<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all():array 
    {
           return [
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
    }
    public static function find(int $id): array
    {
        $job = Arr::first(Job::all(), function ($job) use ($id) {
            return $job['id'] == $id;
        });
        if (!$job) {
            abort(404);
        }
    }
}