<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleOne;

use App\LiskovSubstitutionPrincipleViolation\ExampleOne\Interfaces\LessonRepositoryInterface;

class CacheLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // Get all the lessons from the cache...
        // Return array of lessons
        return $lessons;
    }
}
