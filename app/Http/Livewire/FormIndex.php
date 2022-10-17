<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormIndex extends Component
{
    public $nome;
    public $email;

    protected $rules = [
        'nome' => 'required|min:3',
        'email' => 'required|email',
    ];
    public function render()
    {   
        return view('livewire.form-index');
    }
    public function mount()
    {
        $this->nome =" ";
        $this->email = " ";
    }
    public function submit()
    {
        $this->validate();
            
    }
}