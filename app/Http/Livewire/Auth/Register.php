<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    public $picture;

    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'picture' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:4096'],
        ]);

        $user = User::create([
                'email' => $this->email,
                'name' => $this->name,
                'password' => Hash::make($this->password),
            ]);

        if ($this->picture) {
            $user->addMedia($this->picture->getRealPath())
            ->usingName($this->picture->getClientOriginalName())
            ->toMediaCollection('avatars');
        }



        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function deletePicture()
    {
        $this->reset('picture');
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
