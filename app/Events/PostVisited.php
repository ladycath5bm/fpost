<?php

namespace App\Events;

use App\Models\Post;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PostVisited
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Post $post;
    public string $ip;
    public string $userAgent;

    //public function __construct(Post $post, string $ip, string $browser, string $os)
    public function __construct(Post $post, string $ip, string $userAgent)
    {
        $this->post = $post;
        $this->ip = $ip;
        $this->userAgent = $userAgent;
        
    }
}