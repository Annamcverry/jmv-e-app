<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{

    //My function
    public function index(){
        return view('employees', ['users' =>User::all()]);

    }

    public function show($id){
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function adminEdit($id)
    {
        $user = User::find($id);
        if($user){
            return response()->json([
                'status'=>200,
                'user'=>$user,
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'No User Found'
            ]);
        }
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        $request->user()->contact_no = $request->get('contact_no');
        $request->user()->job_role = $request->get('job_role');
        $request->user()->rate = $request->get('rate');
        $request->user()->licences = $request->get('licences');
        $request->user()->safepass = $request->get('safepass');

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
