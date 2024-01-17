<?php

namespace Tests\Feature\Livewire;

use App\Livewire\HelloWorld;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(HelloWorld::class)
            ->assertStatus(200);
    }
}
