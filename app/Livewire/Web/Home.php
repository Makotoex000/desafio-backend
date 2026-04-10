<?php

namespace App\Livewire\Web;

use Livewire\WithPagination;
use App\Models\Film;
use Livewire\Component;
//render connect HTML with the component 
// Here i'll make the search in database like TypeORM

class Home extends Component{

    use WithPagination; 

        public function render()
        {
            $films = Film::paginate(8);

            return view('livewire.web.home', [
                'films' => $films,
            ]);
        }
}

