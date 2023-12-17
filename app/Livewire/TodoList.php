<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Todo_task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoList extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $task = '';

    public $editingId = '';
    public $taskName = '';

    public function sign()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|unique|email',
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

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = request()->only(['email', 'password']);

        if(!Auth::attempt($credentials)){
            $this->dispatch(
                'alert',
                type : 'error',
                title : "Email or Password don't match with our Record",
                position : 'center',
                timer : 3000,
            );
        }
        else{
            $user = User::where('email', request()->email)->first();
            $user->createToken("API TOKEN")->plainTextToken;

            $this->dispatch(
                'alert',
                type : 'success',
                title : "Logged in successfully 🎉",
                position : 'center',
                timer : 2000,
            );
        }

    }

    public function toggle($taskId)
    {
        $task = Todo_task::find($taskId);
        $task->isCompleted = !$task->isCompleted;
        $task->save();
    }

    public function create(Request $request)
    {
        $this->validate([
            'task' => 'required',
        ]);

        Todo_task::create([
            'task' => $this->task,
        ]);

        $this->reset(['task']);
    }

    public function edit($taskId)
    {
        $task = Todo_task::find($taskId);
        $this->editingId = $taskId;
        $this->taskName = $task->task;
    }

    public function update()
    {
        $this->validate(['taskName' => 'required']);
        $task = Todo_task::find($this->editingId);
        $task->update([
            'task' => $this->taskName
        ]);
        $this->cancelEdit();
    }

    public function cancelEdit()
    {
        $this->reset(['editingId', 'taskName']);
    }

    public function delete($taskId)
    {
        Todo_task::find($taskId)->delete();
    }

    public function render()
    {
        $tasks = Todo_task::all();
        return view('livewire.todo-list',compact('tasks'));
    }
}
