<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleTwo;

// A Duck is a bird that can fly so this should extend the FlyingBirds class
// which in turn extends the Bird class. $duck->fly(); will echo "Fly!"
class Duck extends FlyingBirds {
}
