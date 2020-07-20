<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
    	if($request->hasFile('image')) {
    		User::uploadAvatar($request->image);
    		//$request->session()->flash('message', 'Image Uploaded');
    		return redirect()->back()->with('message', 'Image Uploaded');
    	}
    	//$request->session()->flash('error', 'Image not Uploaded');
    	return redirect()->back()->with('error', 'Image not Uploaded');
    }

}
