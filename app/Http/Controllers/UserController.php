<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; // Add this line
use Illuminate\Validation\ValidationException; // Add this line
class UserController extends Controller
{
    //register new users function
    // public function register(Request $request)
    // {
       
    //     $validatedData = $request->validate([
    //         'user_name' => 'required|string|max:255',
    //         'role' => 'required|string|in:admin,cms_admin,nolitc_staff',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|string|min:8',
    //     ]);

       
    //     $user = new User();
    //     $user->user_name = $validatedData['user_name'];
    //     $user->role = $validatedData['role'];
    //     $user->email = $validatedData['email'];
    //     $user->password = bcrypt($validatedData['password']);
    //     $user->save();

       
    //     return redirect()->back()->with('success', 'Registration successful!');

    // }

     // Store a new user
     public function store(Request $request)
     {
         // Validate the incoming request
         $request->validate([
             'user_name' => 'required|string|max:255',
             'role' => 'required|string',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:8',
         ]);
 
         // Create a new user
         $user = new User();
         $user->user_name = $request->user_name;
         $user->role = $request->role;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->save();
    // Log the created user for debugging
    Log::info('User created:', $user->toArray());
         // Redirect to the user management page with a success message
         return redirect()->route('users.management')->with('success', 'User created successfully.');
     }

   // Display all users data
   public function index()
   {
       $users = User::all(); // Fetch all users
       return view('pages.user_tbl', ['users' => $users]);
   }

    // update user data
    // public function update(Request $request, $id)
    // {
  
    //     $validatedData = $request->validate([
    //         'user_name' => 'required|string|max:255',
    //         'role' => 'required|string|in:admin,cms_admin,nolitc_staff',
    //         'email' => 'required|email|unique:users,email,',
    //     ]);

      
    //     $user = User::findOrFail($id);
    //     $user->user_name = $validatedData['user_name'];
    //     $user->role = $validatedData['role'];
    //     $user->email = $validatedData['email'];
    //     $user->save();

    //     return redirect()->back()->with('success', 'User updated successfully!');
    // }

    // Update an existing user
    public function update(Request $request, $id)
    {
        Log::info('Update request received:', $request->all());

        $request->validate([
            'user_name' => 'required|string|max:255',
            'role' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8', // Password is optional and must be at least 8 characters if provided
        ]);

        // $user = User::findOrFail($id);
        // $user->update([
        //     'user_name' => $request->user_name,
        //     'role' => $request->role,
        //     'email' => $request->email,
        // ]);
        $user = User::findOrFail($id);
        $user->user_name = $request->user_name;
        $user->role = $request->role;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        Log::info('User updated:', $user->toArray());

        return redirect()->route('users.management')->with('success', 'User updated successfully.');
    }

    //delete user
    // public function destroy(User $user)
    // {
    //     $user->delete();
    //     return redirect()->back()->with('success', 'User deleted successfully!');
    // }

    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.management')->with('success', 'User deleted successfully.');
    }

    //show log in form function
    public function showLoginForm()
    {
        return view('login');  // Points to resources/views/login.blade.php
    }



    
    //log in function
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //         'role' => 'required|string|in:admin,cms_admin,nolitc_staff',
    //     ]);

       
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         $user = Auth::user();

    //         switch ($user->role) {
    //             case 'admin':
    //                 return redirect()->route('/dashboard');
    //             case 'cms_admin':
    //                 return redirect()->route('/cms');
    //             case 'nolitc_staff':
    //                 return redirect()->route('/course-management');
    //             default:
    //                 Auth::logout();
    //                 return redirect()->route('login')->withErrors(['role' => 'Invalid role specified.']);
    //         }
    //     }

    //     throw ValidationException::withMessages([
    //         'email' => [trans('auth.failed')],
    //     ]);
    // }
    public function dashboard()
    {
        return view('dashboard');
    }

    public function cms()
    {
        return view('cms');
    }

    public function courseManagement()
    {
        return view('course-management');
    }

    public function applicants()
    {
        return view('applicants');
    }

    public function usersManagement()
    {
        return view('users-management');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|string|in:admin,cms_admin,nolitc_staff',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
    
            $request->session()->put('role', $user->role);
    
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('dashboard')->with('login_success', 'Welcome Admin!');
                case 'cms_admin':
                    return redirect()->route('cms')->with('login_success', 'Welcome CMS Admin!');
                case 'nolitc_staff':
                    return redirect()->route('course.management')->with('login_success', 'Welcome NOLITC Staff!');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Invalid role specified.']);
            }
        }
    
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }
    
    //log out function
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
   

   
}
