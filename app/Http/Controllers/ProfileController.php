<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function showAllProfile(): View {
        $profile = Profile::all();
        return view('profiles', ['profiles' => $profile]);
    }

    public function showProfile(string $id): View {
        $profiles = Profile::all();
        $profile = $profiles->findOrFail($id);
        return view('profile', ['profile' => $profile]);
    }
}
