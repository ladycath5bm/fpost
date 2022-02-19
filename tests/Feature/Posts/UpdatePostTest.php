<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdatePostTest extends TestCase
{
    use RefreshDatabase;

    public function testYouCanUpdateAPost(): void 
    {
        $data = [
            'title' => 'title test',
            'content' => 'content test',
        ];

        $post = Post::factory()->create();
        $response = $this->patch(route('posts.update', $post), $data);

        //$response->assertOk();
        $response->assertRedirect();

        $post = $post->refresh();
        $this->assertEquals($data['title'], $post->title);
        $this->assertEquals($data['content'], $post->content);
    }
}
