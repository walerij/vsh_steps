<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.registerLTE');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'photo' => ['required','image'] ,
        ]);

        //$data["photo"] =$this->set_image($data["imagelink"], $data['courl'].".".$data["imagelink"]->extension());

       // dd($request->photo);
        $ph_ = $this->set_image($request->photo,$request->email.'.'.$request->photo->extension());
        //dd($ph_);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'photo'=> $ph_ ,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function set_image($media, $filename_){
        $filename =$filename_;
        //dump($filename);
        //Сохраняем оригинальную картинку
        $media->move(public_path('images/user_photos/'),$filename);
        return($filename);
    }

}
