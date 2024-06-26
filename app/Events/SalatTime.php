<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SalatTime implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $location;

    public $data; 

    /**
     * Create a new event instance.
     */
    public function __construct($location, $data)
    {
        $this->location = $location;
        $this->data = $data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('salat-time.'. $this->location),
        ];
    }

    /**
     * Get the data to broadcast.
     *
     * @return array<string, mixed>
     */
    public function broadcastWith(): array
    {
        return $this->data;
    }

    public function broadcastAs()
    {
        return 'salat-time-event';
    }
}
