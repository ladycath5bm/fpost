<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditPostTest extends TestCase
{
    use RefreshDatabase;

    public function testYouCanSeeEditPostForm(): void 
    {
        $post = Post::factory()->create();
        $response = $this->get(route('posts.edit', $post));

        $response->assertOk();
        $response->assertViewIs('posts.edit');
        $response->assertViewHas('post');

    }
}
