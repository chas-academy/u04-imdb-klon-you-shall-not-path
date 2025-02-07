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
}
