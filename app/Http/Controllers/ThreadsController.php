<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
    	$threads = [
    	['title' => 'Titill A', 'body' => 'Lorem Ipsum dolor set.'],
    	['title' => 'Titill B', 'body' => 'Þetta er B.']
    	];
    	return view('threads.index', compact('threads'));
    }

    public function create()
    {
        $tasks = [
            ['title' => 'Fara út í búð', 'complete' => true, 'anchor' => 'https://bonus.is'],
            ['title' => 'Klára heimanám', 'complete' => true, 'anchor' => 'https://www.fss.is'],
            ['title' => 'Horfa a mynd', 'complete' => false, 'anchor' => 'https://www.imdb.com'],
            ['title' => 'Fara út að hlaupa', 'complete' => false],
            ['title' => 'Skutla frænda', 'complete' => false]
         ];
        return view('threads.create', compact('tasks'));
    }

    public function show($id)
    {
    	return view('threads.show');
    }

    public function store()
    {
        dd('Store method');
    }
}
