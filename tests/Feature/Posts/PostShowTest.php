<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Routing\Route;
use League\Flysystem\RootViolationException;
use Tests\TestCase;

class PostShowTest extends TestCase
{
    use RefreshDatabase;

    public function testYouCanSeeAPostDetail(): void
    {
        $post = Post::factory()->create();
        $response = $this->get(route('posts.show', $post));

        $response->assertOk();
        $response->assertViewIs('posts.show');
        $response->assertViewHas('post');
        //$response->assertViewHas($post->title);
    }
}
