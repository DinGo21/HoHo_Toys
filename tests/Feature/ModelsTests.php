<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Child;
use App\Models\Toy;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelsTests extends TestCase
{
    use RefreshDatabase;

    public function testItCanCreateAChild()
    {
        $child = Child::factory()->create([
            'name' => 'John',
            'surname' => 'Doe',
            'photo' => 'photo.jpg',
            'age' => 10,
            'naughty' => false,
        ]);

        $this->assertDatabaseHas('children', [
            'name' => 'John',
            'surname' => 'Doe',
        ]);
    }

    public function testItCanRetrieveRelatedToys()
    {
        $child = Child::factory()->create();
        $toy = Toy::factory()->create();

        $child->toys()->attach($toy->id);

        $this->assertTrue($child->toys->contains($toy));
    }

    public function testItCanCreateAToy()
    {
        $toy = Toy::factory()->create([
            'name' => 'Teddy Bear',
            'photo' => 'toy.jpg',
            'description' => 'A soft plush bear',
            'min_age' => 3,
        ]);

        $this->assertDatabaseHas('toys', [
            'name' => 'Teddy Bear',
            'description' => 'A soft plush bear',
        ]);
    }

    public function testItCanRetrieveRelatedChildren()
    {
        $toy = Toy::factory()->create();
        $child = Child::factory()->create();

        $toy->children()->attach($child->id);

        $this->assertTrue($toy->children->contains($child));
    }

    public function testItCanCreateAUser()
    {
        $user = User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);
    }

    public function testItCanHidePasswordAndRememberToken()
    {
        $user = User::factory()->create();

        $this->assertArrayNotHasKey('password', $user->toArray());
        $this->assertArrayNotHasKey('remember_token', $user->toArray());
    }

    public function testItCastsEmailVerifiedAtToDatetime()
    {
        $user = User::factory()->create([
            'email_verified_at' => now(),
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $user->email_verified_at);
    }
}
