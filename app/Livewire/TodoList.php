<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class TodoList extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    public function create()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password'=> $this->password,
        ]);

        $this->reset(['name','email','password']);
        // session()->flash('success','Account created successfully 🎉');
        $this->dispatch(
            'alert',
            type : 'success',
            title : 'Account created successfully 🎉',
            position : 'center',
            timer : 2000,
        );
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.todo-list',compact('users'));
    }
}
