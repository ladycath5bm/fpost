<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeletePostTest extends TestCase
{
    use RefreshDatabase;

    public function testYouCanDeleteAPost(): void 
    {
        $post = Post::factory()->create();
        $response = $this->delete(route('posts.destroy', $post));

        $response->assertRedirect();
        $this->assertEmpty($post->fresh());
    }
}
