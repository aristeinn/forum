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
    	 'anchor' => 'https://laravel.com/docs/5.4/controllers'
    	 ],
    	['title' => 'Ari Steinn Guðmundsson published',
    	 'body' => 'Hver er munurinn á Laravel útgáfu 5.4 og 5.5?',
    	 'anchor' => 'https://laravel.com/docs/5.4/controllers']
    	];
    	return view('profile.profile', compact('threads'));
    }

    public function show($id)
    {
    	return view('profile.profile');
    }
}
