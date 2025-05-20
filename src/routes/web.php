<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('jobs', function () {
    return view('jobs',
        [
            'jobs' => [
                [
                    'title' => 'Software Engineer',
                    'id' => 1,
                    'location' => 'New York, NY',
                    'description' => 'Develop and maintain web applications.',
                ],
                [
                    'title' => 'Data Analyst',
                    'id' => 2,
                    'location' => 'San Francisco, CA',
                    'description' => 'Analyze data and generate reports.',
                ],
                [
                    'title' => 'Project Manager',
                    'id' => 3,
                    'location' => 'Palo Alto, CA',
                    'description' => 'Manage projects and coordinate teams.',
                ],
            ],
        ]
    );
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
                [
                    'title' => 'Software Engineer',
                    'id' => 1,
                    'location' => 'New York, NY',
                    'description' => 'Develop and maintain web applications.',
                ],
                [
                    'title' => 'Data Analyst',
                    'id' => 2,
                    'location' => 'San Francisco, CA',
                    'description' => 'Analyze data and generate reports.',
                ],
                [
                    'title' => 'Project Manager',
                    'id' => 3,
                    'location' => 'Palo Alto, CA',
                    'description' => 'Manage projects and coordinate teams.',
                ]
                ];
$job = Arr::first($jobs, function ($job) use ($id) {
    return $job['id'] == $id;
});
    return view('job', ['job'=> $job]);
});

Route::get('/contact', function () {
    return view('contact');
});