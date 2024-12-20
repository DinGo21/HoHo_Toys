<?php

namespace Tests\Feature\api;

use Tests\TestCase;
use App\Models\Toy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfElfCanGetAllToysFromJson(){
        Toy::factory(2)->create();

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfElfCanShowOneToyFromJson(){
        $toy = Toy::factory()->create();

        $response = $this->get(route('apielfshow', $toy->id));
        $response->assertStatus(200)
            ->assertJsonFragment(['name' => $toy->name]);
    }

    public function test_CheckIfElfCanStoreToysWithApi(){
        $data = [
            'name' => 'Pepito',
            'description' => 'Grillo',
            'photo' => 'photoLink',
            'min_age' => 7,
        ];

        $response = $this->post(route('apielfstore'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Pepito']);

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfElfCanUpdateToyWithApi(){
        $toy = Toy::factory()->create();
        $response = $this->get(route('apielfhome'));

        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['name' => $toy->name]);

        $response = $this->put(route('apielfupdate', $toy->id),
        [
            'name' => 'Modified Name',
            'description' => $toy->description,
            'photo' => $toy->photo,
            'min_age' => $toy->min_age,
        ]);

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['name' => 'Modified Name']);
    }

    public function test_CheckIfElfCanDeleteToyWithApi(){
        Toy::factory(2)->create();

        $response = $this->delete(route('apielfdestroy', 1));
        $this->assertDatabaseCount('toys', 1);

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }
}
