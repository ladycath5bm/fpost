<?php

namespace Tests\Feature\Posts;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StorePostsTest extends TestCase
{
    use RefreshDatabase;

    public function testYouCanStoreAPost(): void
    {
        $data = [
            'title' => 'Ttitle-test',
            'content' => 'content-test',
        ];

        $response = $this->post(route('posts.store'), $data);

        //$response->assertOk();
        $response->assertRedirect();
        $this->assertDatabaseHas('posts', $data);
    }
}
