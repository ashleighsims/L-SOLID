<?php

namespace App\LiskovSubstitutionPrinciple\ExampleOne;

use App\LiskovSubstitutionPrinciple\ExampleOne\Interfaces\LessonRepositoryInterface;

class DatabaseLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // Get all the lessons from the database...
        // Using a Laravel Eloquent Model example

        // Return array of lessons
        return Lesson::all()->toArray();
    }
}
