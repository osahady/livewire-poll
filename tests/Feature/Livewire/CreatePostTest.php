<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use App\Models\Medcine;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

    public function can_create_post()
    {
        $medcine = Medcine::whereTitle('some title')->first();

        $this->assertNull($medcine);

        Livewire::test(CreatePost::class)
            ->set('medcine', 'some title')
            ->set('description', 'some description')
            ->call('add');

        $medcine = Medcine::whereTitle('some title')->first();

        $this->assertNotNull($medcine);
        $this->assertEquals('some title', $medcine->medcine);
        $this->assertEquals('some description', $medcine->description);

    }
}
