<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Number;

Route::get('/', [WelcomeController::class, "home"])->name("home");

Route::get('/jobs', function () {
    return view("jobs", [
        "jobs" => [
            [
                "id" => 1,
                "title" => "Director",
                'salary' => '$50,000'
            ],
            [
                "id" => 2,
                'title' => 'full stack developer',
                'salary' => '$10,000'
            ],
            [
                "id" => 3,
                'title' => 'php developer',
                'salary' => '$70,000'
            ],
            [
                "id" => 4,
                'title' => 'django developer',
                'salary' => '$80,000'
            ]
        ]
    ]);
});


Route::get("/jobs/{id}", function ($id) {
    $jobs = [
        [
            "id" => 1,
            "title" => "Director",
            'salary' => '$50,000'
        ],
        [
            "id" => 2,
            'title' => 'full stack developer',
            'salary' => '$10,000'
        ],
        [
            "id" => 3,
            'title' => 'php developer',
            'salary' => '$70,000'
        ],
        [
            "id" => 4,
            'title' => 'django developer',
            'salary' => '$80,000'
        ]
    ];
    $job = Arr::first($jobs, fn($job) => ($job['id']) == $id);
    return view('job', [
        'job'=> $job
    ]);
});

Route::get("/contact", function () {
    return view("contact");
});
