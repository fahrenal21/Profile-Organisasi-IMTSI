<?php

namespace Tests\Unit;

use App\Models\Pengurus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PengurusResourceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_create_pengurus()
    {
        // Create an admin user and login
        $user = \App\Models\User::factory()->create([
            'email' => 'admin@imtsi.org',
            'password' => bcrypt('Secret1234'),
        ]);

        // Login as the admin
        $this->actingAs($user);

        // Visit the page and interact with the Livewire component for creating Pengurus
        Livewire::test('filament.resources.penguruses.create') // You may need to adjust the component name
            ->set('nama', 'Indra Pratama')  // Set the form fields
            ->set('jabatan', 'Wakil Ketua Umum')
            ->set('foto', 'path/to/indra_foto.jpg')  // You can mock the file upload here
            ->call('save') // Trigger the save method on the component

            // Assert that Pengurus is created
            ->assertDatabaseHas('pengurus', [
                'nama' => 'Indra Pratama',
                'jabatan' => 'Wakil Ketua Umum',
            ])
            ->assertRedirect(route('filament.resources.penguruses.index')); // Ensure redirection to the index page
    }

    /** @test */
    public function user_can_update_pengurus()
    {
        // Create a pengurus instance
        $pengurus = Pengurus::factory()->create([
            'nama' => 'Ahmad Fauzi',
            'jabatan' => 'Ketua Umum',
        ]);

        // Create an admin user and login
        $user = \App\Models\User::factory()->create([
            'email' => 'admin@imtsi.org',
            'password' => bcrypt('Secret1234'),
        ]);

        // Login as the admin
        $this->actingAs($user);

        // Visit the Pengurus edit page and interact with the form
        Livewire::test('filament.resources.penguruses.edit', ['record' => $pengurus]) // You may need to adjust the component name
            ->set('nama', 'Ahmad Fauzi Updated')  // Set the updated fields
            ->set('jabatan', 'Ketua Umum Updated')
            ->call('save') // Trigger the save method on the component

            // Assert that the pengurus is updated
            ->assertDatabaseHas('pengurus', [
                'nama' => 'Ahmad Fauzi Updated',
                'jabatan' => 'Ketua Umum Updated',
            ])
            ->assertRedirect(route('filament.resources.penguruses.index')); // Ensure redirection to the index page
    }

    /** @test */
    public function user_can_delete_pengurus()
    {
        // Create a pengurus instance
        $pengurus = Pengurus::factory()->create([
            'nama' => 'Budi Santoso',
            'jabatan' => 'Sekretaris Umum',
        ]);

        // Create an admin user and login
        $user = \App\Models\User::factory()->create([
            'email' => 'admin@imtsi.org',
            'password' => bcrypt('Secret1234'),
        ]);

        // Login as the admin
        $this->actingAs($user);

        // Visit the Pengurus list page and delete the pengurus
        Livewire::test('filament.resources.penguruses.index') // You may need to adjust the component name
            ->call('delete', $pengurus->id) // Trigger the delete action
            ->assertDatabaseMissing('pengurus', [
                'nama' => 'Budi Santoso',
            ])
            ->assertRedirect(route('filament.resources.penguruses.index')); // Ensure redirection after deletion
    }
}
