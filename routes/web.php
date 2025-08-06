<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});


Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => [
      [
        'id' => '1',
        'title' => 'Director',
        'salary' => '$50,000'
      ],
      [
        'id' => '2',
        'title' => 'Programmer',
        'salary' => '$10,000'
      ],
      [
        'id' => '3',
        'title' => 'Teacher',
        'salary' => '$40,000'
      ]
    ]
  ]);
});

Route::get('/jobs/{id}', function ($id) {
  $jobs = [
    [
      'id' => '1',
      'title' => 'Director',
      'salary' => '$50,000'
    ],
    [
      'id' => '2',
      'title' => 'Programmer',
      'salary' => '$10,000'
    ],
    [
      'id' => '3',
      'title' => 'Teacher',
      'salary' => '$40,000'
    ]
  ];

  $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

  return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/boas-vindas', function () {
  return view('boas-vindas', ['message' => "Bem-vindo ao sistema!", "username" => "Caio"]);
});

Route::get('/courses', function () {
  return view('courses', [
    'courses' => [
      [
        'id' => '1',
        'title' => 'PHP For Beginners',
        'duration' => '10 horas'
      ],
      [
        'id' => '2',
        'title' => 'Object-Oriented Principles in PHP',
        'duration' => '3 horas'
      ],
      [
        'id' => '3',
        'title' => '30 Days to Learn Laravel',
        'duration' => '8 horas'
      ]
    ]
  ]);
});

Route::get('/courses/{id}', function ($id) {
  $courses = [
    [
      'id' => '1',
      'title' => 'PHP For Beginners',
      'duration' => '10 horas'
    ],
    [
      'id' => '2',
      'title' => 'Object-Oriented Principles in PHP',
      'duration' => '3 horas'
    ],
    [
      'id' => '3',
      'title' => '30 Days to Learn Laravel',
      'duration' => '8 horas'
    ]
  ];

  $course = Arr::first($courses, fn($course) => $course['id'] == $id);

  return view('course', ['course' => $course]);
});
