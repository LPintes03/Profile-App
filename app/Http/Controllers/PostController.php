<?php

namespace App\Http\Controllers;
use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showAllProfile(){
        #$profiles = Profile::all();
        #return view ('profiles', ['profiles'=> $profiles]);
        return view ('profiles');
    }
}
