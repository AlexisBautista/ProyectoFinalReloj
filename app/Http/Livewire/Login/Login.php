<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login');
    }


    public function login()
    {
        $datos =    $this->validate();

        if (Auth::attempt($datos)) {
            return redirect(route('indexrelojs'));
        } else {
            $this->emit('alerta', 'error, favor de verificar correo o password');
            $this->email = null;
            $this->password = null;
        }
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'min:4|string|required'
        ];
    }
}
