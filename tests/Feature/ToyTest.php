<?php

namespace Tests\Feature;

use App\Models\Toy;
use Tests\TestCase;
use App\Models\Child;
use App\Http\Controllers\ToyController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test index method to list all toys.
     */
    public function test_indexDisplaysAllToys()
    {
        $toys = Toy::factory()->count(3)->create();

        $response = $this->get(route('elf'));

        $response->assertStatus(200)
            ->assertViewIs('elf')
            ->assertViewHas('toys', function ($viewToys) use ($toys) {
                return $viewToys->count() === $toys->count();
            });
    }

    /**
     * Test create method to show the creation form.
     */
    public function test_createDisplaysCreateForm()
    {
        $response = $this->get(route('elfcreate'));

        $response->assertStatus(200)
            ->assertViewIs('createToyForm');
    }

    /**
     * Test store method to add a new toy.
     */
    public function test_storeAddsNewToy()
    {
        $data = [
            'name' => 'New Toy',
            'photo' => 'photo.jpg',
            'description' => 'A wonderful toy',
            'min_age' => '3',
        ];

        $response = $this->post(route('elfstore'), $data);

        $response->assertRedirect(route('elf'));
        $this->assertDatabaseHas('toys', $data);
    }

    /**
     * Test show method to display a specific toy.
     */
    public function test_showDisplaysSpecificToy()
    {
        $toy = Toy::factory()->create();

        $response = $this->get(route('elfshow', $toy->id));

        $response->assertStatus(200)
            ->assertViewIs('elfShow')
            ->assertViewHas('toy', $toy);
    }

    /**
     * Test edit method to show the edit form.
     */
    public function test_editDisplaysEditForm()
    {
        $toy = Toy::factory()->create();

        $response = $this->get(route('elfedit', $toy->id));

        $response->assertStatus(200)
            ->assertViewIs('editToyForm')
            ->assertViewHas('toy', $toy);
    }

    /**
     * Test update method to modify a toy.
     */
    public function test_updateModifiesExistingToy()
{
    $toy = Toy::factory()->create(['description' => 'description']);

    $response = $this->post(route('elfupdate', $toy->id), [
        'name' => 'Updated Name',
        'photo' => 'ohohij',
        'description' => 'Updated description',
        'min_age' => '0',
    ]);

    $response->assertRedirect('elf');

    $updatedToy = Toy::find($toy->id);
    $this->assertEquals('Updated description', $updatedToy->description);
    $this->assertEquals('Updated Name', $updatedToy->name);
    $this->assertEquals('0', $updatedToy->min_age);
}


    /**
     * Test destroy method to delete a toy.
     */
    public function test_destroyDeletesToy()
    {
        $response = $this->post(route('elfstore'), [
            'name' => 'Updated Name',
            'photo' => 'ohohij',
            'description' => 'Updated description',
            'min_age' => 0,
        ]);

        $response = $this->delete(route('elfdestroy', 1));
        $this->assertDatabaseCount('toys', 0);
    }

    public function test_IndexHandlesDeleteAction()
    {
        $toy = Toy::factory()->create();

        $response = $this->get(route('elf', ['action' => 'delete', 'id' => $toy->id]));

        $this->assertDatabaseMissing('toys', ['id' => $toy->id]);

        $response->assertRedirect(route('elf'));
    }

    public function test_age_rage_counter_works(){
        Toy::factory()->create(['min_age' => 0]);
        Toy::factory()->create(['min_age' => 3]);
        Toy::factory()->create(['min_age' => 7]);
        Toy::factory()->create(['min_age' => 12]);
        Toy::factory()->create(['min_age' => 16]);
        Toy::factory()->create(['min_age' => 18]);

        $response = $this->get(route('elf'));
        $response = (New ToyController())->ageRangeCounter();
        
        $this->assertEquals('1', $response[0]);
        $this->assertEquals('1', $response[1]);
        $this->assertEquals('1', $response[2]);
        $this->assertEquals('1', $response[3]);
        $this->assertEquals('1', $response[4]);
        $this->assertEquals('1', $response[5]);
        $this->assertEquals('6', $response[6]);
    }

    public function test_it_has_fillable_properties()
    {
        $fillable = (new Toy())->getFillable();

        $this->assertEquals([
            'name',
            'photo',
            'description',
            'min_age',
        ], $fillable);
    }

    public function test_it_can_create_a_toy()
    {
        Toy::factory()->create([
            'name' => 'Test Toy',
            'photo' => 'test_photo_url.jpg',
            'description' => 'This is a test toy.',
            'min_age' => 7,
        ]);

        $this->assertDatabaseHas('toys', [
            'name' => 'Test Toy',
            'photo' => 'test_photo_url.jpg',
            'description' => 'This is a test toy.',
            'min_age' => 7,
        ]);
    }

    public function test_it_can_belong_to_many_children()
    {
        $toy = Toy::factory()->create();
        $child1 = Child::factory()->create();
        $child2 = Child::factory()->create();

        $toy->children()->attach([$child1->id, $child2->id]);

        $this->assertCount(2, $toy->children);
        $this->assertTrue($toy->children->contains($child1));
        $this->assertTrue($toy->children->contains($child2));
    }

    public function test_it_can_return_children_correctly()
    {
        $toy = Toy::factory()->create();
        $child = Child::factory()->create();

        $toy->children()->attach($child->id);

        $this->assertEquals($child->id, $toy->children->first()->id);
    }
}