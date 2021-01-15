<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{

    public $cpf;
    public $cpf2;
    public $cpf3;

    public function updatedCpf($value)
    {
        dd($value);
    }

    public function updatedCpf2($value)
    {
        dd($value);
    }

    public function updatedCpf3($value)
    {
        dd($value);
    }

    public function save()
    {
        $this->validate([
            'cpf' => 'required',
            'cpf2' => 'required',
            'cpf3' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.form');
    }
}
