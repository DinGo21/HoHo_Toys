<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Models\Child;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChildTest extends TestCase
{
    use RefreshDatabase;
    public function test_ListOfEntryCanBeRead()
    {

        $this->withoutExceptionHandling();

        Child::all();

        $response = $this->get('/santa');

        $response->assertStatus(200)
            ->assertViewIs('santa');
    }

    public function test_CreateFunctionReturnViewCorrectly()
    {

        $response = $this->get('/santa/create');

        $response->assertStatus(200)
            ->assertViewIs('createChildForm');
    }

    public function test_storeMethodSavesObjectCorrectly()
    {
        $response = $this->post(route('santastore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'naughty' => true
        ]);

        $response = $this->get(route('santa'));
        $response->assertStatus(200);
        $this->assertDatabaseCount('children', 1);
    }

    public function test_checkIfShowViewWorksCorrectly()
    {
        $response = $this->post(route('santastore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'naughty' => true
        ]);

        $response = $this->get(route('santashow', 1));

        $response->assertStatus(200)
            ->assertViewIs('santaShow');
    }

    public function test_checkIfEditFormViewWorksCorrectly()
    {
        $child = Child::factory()->create();

        $response = $this->get(route('santaedit', $child->id));

        $response->assertStatus(200)
            ->assertViewIs('editChildForm')
            ->assertViewHas('child', $child);
    }

    public function test_checkIfUpdateMethodWorksCorrectly()
    {
        $child = Child::factory()->create(['age' => 16]);

        $response = $this->post(route('santaupdate', $child->id), [
            'name' => $child->name,
            'surname' => $child->surname,
            'photo' => $child->photo,
            'age' => 18,
            'naughty' => true,
        ]);

        $response->assertRedirect('santa');

        $updatedChild = Child::find($child->id);
        $this->assertEquals(18, $updatedChild->age);
    }

    public function test_checkIfDeleteMethodDestroyElement()
    {
        $response = $this->post(route('santastore'), [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'Example.img',
            'age' => 16,
            'naugty' => true
        ]);

        $response = $this->delete(route('santadestroy', 1));
        $this->assertDatabaseCount('children', 0);
    }

    public function test_IndexHandlesDeleteAction()
    {
        $child = Child::factory()->create();

        $response = $this->get(route('santa', ['action' => 'delete', 'id' => $child->id]));

        $this->assertDatabaseMissing('children', ['id' => $child->id]);

        $response->assertRedirect(route('santa'));
    }
}