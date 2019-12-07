<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleOne;

use App\LiskovSubstitutionPrincipleViolation\ExampleOne\Interfaces\LessonRepositoryInterface;

class FileSystemLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // Get all the lessons from the filesystem...
        // Return array of lessons
        return $files;
    }
}
