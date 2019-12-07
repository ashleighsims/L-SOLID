<?php

namespace App\LiskovSubstitutionPrinciple\ExampleOne;

use App\LiskovSubstitutionPrinciple\ExampleOne\Interfaces\LessonRepositoryInterface;

class FileSystemLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // Get all the lessons from the filesystem...
        // Return array of lessons
        return $files;
    }
}
