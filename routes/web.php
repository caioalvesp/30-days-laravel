<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\User;

Route::get('/', function () {
  return view('home');
});


Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all()
  ]);
});

Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);

  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/users', function () {
  return view('users', [
    "users" => User::all()
  ]);
});

Route::get('/users/{id}', function ($id) {
  $user = User::find($id);

  return view('user', ['user' => $user]);
});
