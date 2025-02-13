<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function ShowAdminDashboard()
    {
        // Get the currently authenticated user
        $id = Auth::user();

        // Fetch reviews where approved = false and include related votes
        $reviews = Review::where('approved', false)
        ->with('votes') // Use 'votes' instead of 'vote'
        ->get();

        // Return to the view with the compacted data
        return view('admin-dashboard', compact('id', 'reviews'));
    }

    public function ShowAdminSettings()
    {
        // Get the currently authenticated user
        $id = Auth::user();

        // Fetch all users
        $users = User::all();

        // Return to the view with the compacted data
        return view('admin-settings', compact('id', 'users'));
    }

    public function search(Request $request)
    {

        // Get the currently authenticated user
        $id = Auth::user();

        $query = $request->input('search');
    
        // Search users by name
        $users = User::where('name', 'LIKE', "%{$query}%")->get();
    
        return view('admin-settings', compact('users', 'query', 'id'));
    }

    public function edit(User $user)
    {
        // Fetch the user details and pass them to the view
        return view('edit-user', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        try {

            $request->validate([
                'name' => 'required|string|max:255',
                'role' => 'required|string|max:255',
            ]);
    
            $user->update($request->all());
    
            return redirect()->route('user.edit', ['user' => $user->user_id])->with('success', 'User updated successfully');
        } catch (\Exception $e) {

            return redirect()->route('user.edit', ['user' => $user->user_id])->with('error', 'Failed to update user. Please try again.');
        }

    }

    public function updateUserSettings(Request $request)
    {
        $user = Auth::user(); // Get authenticated user
    
        try {
            if (!$request->filled('username') && !$request->filled('email') && !$request->filled('password')) {
                return redirect()->back()->with('error', 'You must provide at least one field to update.');
            }
    
            // Validate only the fields that are filled
            $validatedData = $request->validate([
                'username' => 'nullable|string|max:255|unique:users,name,' . $user->user_id . ',user_id',
                'email' => 'nullable|string|email|max:255|unique:users,email,' . $user->user_id . ',user_id',
                'password' => ['nullable', 'confirmed', Password::min(8)],
            ]);
                        
            // Update fields only if they are provided
            if ($request->filled('username')) {
                $user->name = $request->username;
            }
            if ($request->filled('email')) {
                $user->email = $request->email;
            }
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }
    
            $user->save();
    
            return redirect()->back()->with('success', 'Profile updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update user: ' . $e->getMessage());
        }        
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->route('admin-settings')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('admin-settings')->with('error', 'Failed to delete user. Please try again.');
        }
    }

    public function showUserSettings()
    {
        $user = Auth::user();

        return view('user-settings', compact('user'));
    }
    
}
