<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() 
    {
    	$threads = [
    	['title' => 'Ari Steinn Guðmundsson published',
    	 'body' => 'Hvernig býr maður til controller í Laravel?',
    	 'anchor' => 'https://laravel.com/docs/5.4/controllers',
         'title2' => 'Ari Steinn Guðmundsson published',
    	 'body2' => 'Hver er munurinn á Laravel útgáfu 5.4 og 5.5?',
    	 'anchor2' => 'https://laravel.com/docs/5.4']
        ];
    	return view('profile.profile', compact('threads'));
    }

    public function show($id)
    {
    	return view('profile.profile');
    }
}
