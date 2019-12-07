<?php

namespace App\LiskovSubstitutionPrincipleViolation\ExampleTwo;

// This is a violation as Ostrich although a bird is not able to fly.
// Therefor we can't inherit that method without overriding it and returning false
// thus breaking the principle
class Ostrich extends Bird {
}
