<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comments = [
        [
            'author' => 'Puthea',
            'created_at' => '5 Min ago',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam aspernatur beatae doloribus eos
            excepturi ipsa maiores nihil officia optio, pariatur quam quibusdam, rem sapiente tenetur ut velit veritatis
            voluptate!'
        ]
    ];

    public $newContent;

    public function render()
    {
        return view('livewire.comment');
    }

    public function AddComment() {
        $this->comments[] = [
          'author' => 'Puthea Khem',
            'created_at' => Carbon::now()->diffForHumans(),
            'content' => $this->newContent,
        ];
    }
}
