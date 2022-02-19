<?php

namespace Tests\Feature\Posts;

use Tests\TestCase;
use App\Models\Post;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexPostsTest extends TestCase
{
    use RefreshDatabase;

    public function testCanSeeAListPosts(): void
    {
        $posts = Post::factory()->count(10)->create();
        $response = $this->get(route('posts.index'));

        $response->assertOk();
        //$response->getContent();
    }
}
