<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleOne\Interfaces;

interface LessonRepositoryInterface {
    // From PHP 7 onwards you can declare the return type...
//    public function getAll() : array;
    public function getAll();
}
