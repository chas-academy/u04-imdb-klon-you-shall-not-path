<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function ShowAdminDashboard()
    {
        // Get the currently authenticated user
        $id = Auth::user();

        // Return to the view with the compacted data
        return view('admin-dashboard', compact('id'));
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

    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->route('admin-settings')->with('success', 'User deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('admin-settings')->with('error', 'Failed to delete user. Please try again.');
        }
    }
    
}
