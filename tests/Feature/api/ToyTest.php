<?php

namespace Tests\Feature\api;

use Tests\TestCase;
use App\Models\Child;
use App\Models\Toy;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfSantaCanGetAllToysFromJson(){
        Toy::factory(2)->create();

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfSantaCanShowOneChildFromJson(){
        $toy = Toy::factory()->create();

        $response = $this->get(route('apielfhome', $toy->id));
        $response->assertStatus(200)
            ->assertJsonFragment(['name' => $toy->name]);
    }

    public function test_CheckIfSantaCanStoreChildsWithApi(){
        $data = [
            'name' => 'Pepito',
            'description' => 'Grillo',
            'photo' => 'photoLink',
            'min_age' => 6,
        ];

        $response = $this->post(route('apielfstore'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Pepito']);

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfSantaCanUpdateChildWithApi(){
        $toy = Toy::factory()->create();
        $response = $this->get(route('apielfhome'));

        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['name' => $toy->name]);

        $response = $this->put(route('apielfupdate', $toy->id),
        [
            'name' => 'Modified Name',
            'description' => $toy->surname,
            'photo' => $toy->photo,
            'min_age' => $toy->age,
        ]);

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['name' => 'Modified Name']);
    }

    public function test_CheckIfSantaCanDeleteChildWithApi(){
        Toy::factory(2)->create();

        $response = $this->delete(route('apielfdestroy', 1));
        $this->assertDatabaseCount('toys', 1);

        $response = $this->get(route('apielfhome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }
}
