<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleTwo;

class FlyingBirds extends Bird {
    public function fly()
    {
        return "Fly";
    }
}
