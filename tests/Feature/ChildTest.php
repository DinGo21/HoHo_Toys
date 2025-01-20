<?php

namespace Tests\Feature;


use App\Models\Toy;
use Tests\TestCase;
use App\Models\Child;
use App\Http\Controllers\ChildController;
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
            'naughty' => true,
            'country' => 'Spain'
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
            'naughty' => true,
            'country' => 'Spain'
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
            'country' => 'Spain'
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
            'naugty' => true,
            'country' => 'Spain'
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

    public function test_if_assigns_a_random_ticket_to_a_child()
    {

        Toy::factory()->create(['id' => 28]);
        Toy::factory()->create(['id' => 29]);
        Toy::factory()->create(['id' => 30]);

        $child = Child::factory()->create();

        (New ChildController())->gift_tickets($child);

        $this->assertCount(1, $child->toys);
        $this->assertContains($child->toys->first()->id, [28, 29, 30]);
    }

    public function test_if_assigns_a_random_charcoal_to_a_child()
    {

        Toy::factory()->create(['name' => "Carbón test1"]);
        Toy::factory()->create(['name' => "Carbón test2"]);
        Toy::factory()->create(['name' => "Carbón test3"]);

        $child = Child::factory()->create();

        (New ChildController())->gift_charcoal($child);

        $this->assertCount(1, $child->toys);
        $this->assertStringContainsString("Carbón", $child->toys->first()->name);
    }

    public function test_if_assigns_valid_toys_age(){
        Toy::factory()->create(['min_age' => 0]);
        Toy::factory()->create(['min_age' => 3]);
        Toy::factory()->create(['min_age' => 7]);
        Toy::factory()->create(['min_age' => 12]);
        Toy::factory()->create(['min_age' => 16]);
        Toy::factory()->create(['min_age' => 18]);

        $child1 = Child::factory()->create(['age' => 1]);
        $child2 = Child::factory()->create(['age' => 4]);
        $child3 = Child::factory()->create(['age' => 8]);
        $child4 = Child::factory()->create(['age' => 13]);
        $child5 = Child::factory()->create(['age' => 17]);
        $child6 = Child::factory()->create(['age' => 19]);

        $response = $this->get(route('santa'));

        $response = (New ChildController())->get_toys($child1);
        $this->assertEquals('0', $response[0]['min_age']);

        $response = (New ChildController())->get_toys($child2);
        $this->assertEquals('3', $response[0]['min_age']);

        $response = (New ChildController())->get_toys($child3);
        $this->assertEquals('7', $response[0]['min_age']);

        $response = (New ChildController())->get_toys($child4);
        $this->assertEquals('12', $response[0]['min_age']);

        $response = (New ChildController())->get_toys($child5);
        $this->assertEquals('16', $response[0]['min_age']);

        $response = (New ChildController())->get_toys($child6);
        $this->assertEquals('1', $response[0]['id']);
    }

    public function test_it_assigns_two_valid_toys_to_a_child()
    {
        Toy::factory()->create(['id' => 1, 'min_age' => 0]);
        Toy::factory()->create(['id' => 2, 'min_age' => 0]);

        $child = Child::factory()->create(['age' => 1]);
        $child2 = Child::factory()->create(['age' => 5]);

        (New ChildController())->gift_toys($child);
        (New ChildController())->gift_toys($child2);

        $this->assertCount(2, $child->toys);
        $this->assertCount(0, $child2->toys);

        foreach ($child->toys as $toy) {
            $this->assertEquals(0, $toy->min_age);
        }

        $assignedToyIds = $child->toys->pluck('id')->toArray();
        $this->assertCount(2, array_unique($assignedToyIds));

    }

    public function test_it_assigns_gifts_based_on_child_age_and_behavior()
    {

        Toy::factory()->create(['id' => 28, 'name' => 'Ticket A']);
        Toy::factory()->create(['id' => 29, 'name' => 'Ticket B']);
        Toy::factory()->create(['id' => 30, 'name' => 'Ticket C']);
        Toy::factory()->create(['name' => 'Carbón Rojo']);
        Toy::factory()->create(['min_age' => 7]);
        Toy::factory()->create(['min_age' => 7]);

        $childAdult = Child::factory()->create(['age' => 18, 'naughty' => false]);
        $childNaughty = Child::factory()->create(['age' => 10, 'naughty' => true]);
        $childNice = Child::factory()->create(['age' => 10, 'naughty' => false]);

        (New ChildController())->list();

        $this->assertCount(1, $childAdult->toys);
        $this->assertContains($childAdult->toys->first()->id, [28, 29, 30]);

        $this->assertCount(1, $childNaughty->toys);
        $this->assertStringContainsString('Carbón', $childNaughty->toys->first()->name);

        $this->assertCount(2, $childNice->toys);
        foreach ($childNice->toys as $toy) {
            $this->assertEquals(7, $toy->min_age);
        }
    }
}