<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobModel;
use App\Models\Comment;
use App\Models\User;

Route::get('/', function () {
    Comment::create(['title' => 'Wowww Awsome']);
    //dd(Comment::all());
    return view('home', ["greet" => "Hello"]);
});

Route::get('/users', function () {
    return view('users', ["users" => User::all()]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/jobs', function ()  {
    $jobs = JobModel::with('employer')->paginate(3);
    // dd($jobs[0]->title);
    
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function($id)  {
    $job = JobModel::find($id); 
        //dd($job);
    return view('job', ['job' => $job]);
});

//Route::resource()
