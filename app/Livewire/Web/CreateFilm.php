<?php

namespace App\Livewire\Web;

use App\Models\Film;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateFilm extends Component
{

    use WithFileUploads;

    //variable parameters
    public string $title = ' ';
    public string $summary = ' ';
    public $cover;

    //content parameter that will be insert inside the variables
    protected $rules = [
        'title' => 'required|min:3',
        'summary' => 'required|min:10',
        'cover' => 'required|image|max:2048'
    ];

    public function save()
    {
        $this->validate();

        $coverPath  = $this->cover->store('covers', 'public');

        $film = Film::create([
            'title' => $this->title,
            'summary' => $this->summary,
            'cover' => $coverPath,
        ]);

        return $this->redirect(route('see', $film->id));
    }

    public function render()
    {
        return view('livewire.web.create-film');
    }
}
