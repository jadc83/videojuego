<?php

namespace App\Livewire;

use App\Models\Posesion;
use Livewire\Component;

class Tengo extends Component
{

    public function tengo()
    {

        $posesion = new Posesion();
        $posesion->videojuego_id=4;
        $posesion->user_id=1;
        $posesion->save();

    }

    public function render()
    {
        return view('livewire.tengo');
    }
}
