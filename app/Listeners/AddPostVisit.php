<?php

namespace App\Listeners;

use UAParser\Parser;
use App\Models\PostVisit;
use App\Events\PostVisited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddPostVisit
{
    //se podria inicialiar el modelo en el construct

    public function handle(PostVisited $event): void
    {   
        $userAgent = Parser::create()->parse($event->userAgent);

        PostVisit::create([
            'post_id' => $event->post->getRouteKey(),
            'ip' => $event->ip,
            'os' => $userAgent->os->toString(),
            'browser' => $userAgent->ua->toString(),
        ]);
    }
}
