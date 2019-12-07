<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleOne;

use App\LiskovSubstitutionPrincipleViolation\ExampleOne\Interfaces\LessonRepositoryInterface;

// This would be the violating class. If you look at the others they return array,
// however this will return a collection (Illuminate\Support\Collection) thus violating the principle
// as this could'nt be replace the parent without breaking existing code.
class DatabaseLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // Get all the lessons from the database...
        // Using a Laravel Eloquent Model example

        // Return collection (Illuminate\Support\Collection) of lessons
        return Lesson::all();
    }
}
