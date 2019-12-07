<?php

namespace App\LiskovSubstitutionPrinciple\ExampleOne;

use App\LiskovSubstitutionPrinciple\ExampleOne\Interfaces\LessonRepositoryInterface;

class CacheLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // Get all the lessons from the cache...
        // Return array of lessons
        return $lessons;
    }
}
