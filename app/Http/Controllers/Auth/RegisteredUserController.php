<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'role' => ['enum'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'contact_no' =>['string', 'max:20'],
            'job_role' =>['string', 'max:255'],
            'rate' =>['float'],
            'licences'=>['string', 'max:255'],
            'safepass'=>['binary'],

        ]);

        $user = User::create([
            // 'role' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'contact_no'=>$request->contact_no,
            'job_role'=>$request->job_role,
            'rate'=>$request->rate,
            'licences'=>$request->licences,
            'safepass'=>$request->safepass,
        ]);

        event(new Registered($user));

        Auth::login($user);
        // return redirect(auth()->user()->getRedirectRoute());
        return redirect(RouteServiceProvider::HOME);
    }
}
