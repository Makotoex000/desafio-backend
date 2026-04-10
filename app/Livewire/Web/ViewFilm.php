<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;

class ViewFilm extends Component
{
    public Film $film;
    
    //this function add the action to serach film by url: /ver/1(film) 
    public function mount(Film $film)
    {
        $this->film = $film;
    }

    public function render()
    {
        return view('livewire.web.view-film');
    }
}
