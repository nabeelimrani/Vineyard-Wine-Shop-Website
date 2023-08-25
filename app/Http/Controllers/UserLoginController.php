<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming your User model is located here

class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        // Retrieve user by email
        $user = User::where('email', $email)->first();
    
        if ($user && $user->password === $password) {
            // Authentication passed
            $request->session()->put('user_name', $user->name); // Store user's name in the session
            return redirect()->route('admin.dashboard');
        } else {
            // Authentication failed
            return redirect()->back()->withInput($request->only('email'))->withErrors([
                'email' => 'Invalid email or password',
            ]);
        }
    }
    

}
