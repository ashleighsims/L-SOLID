# SOLID Principles - L

_**Note: The code in this repository is example code.**_

The 'L' in SOLID is for Liskov Substitution Principle. This is an extension of the Open-Closed principle. 
The basics of this is that any class which is a child of a parent class should be able to be used in place of the parent class without any unexpected behaviour cropping up.

It is very important that any method that overrides the parent method should return the same as the parent. For example if the parent method returns an array the child should return an array.

- Each of the methods from the parent used in the child should take the same parameters (no adding extras on the end).
- Inherited methods should not have more conditionals that change the return of that method i.e. throwing an exception
- Inherited methods should return the same type as that of its parent
- Exception types must match, if a method returns a FileNotFoundException in the event of an error then the same condition inside the inherited method should return FileNotFoundException also.

Why should we do it?
- Make code more re-usable
- Prevent code rot
- Easier to maintain

## Liskov Substitution Principle Violation

Within the directory `app/LiskovSubstitutionPrincipleViolation` you will find 2 examples of violations to this principle.

### Example 1

This covers a violation where the return types are'nt the same. As they should be returning an array, the `DatabaseLessonRepository` in fact returns a collection (Illuminate\Support\Collection).

If this was to happen this could not be used as a substitute for the parent as it's returning a different type. What it should do is return an array instead.

### Example Two

This example shows the inheritance of methods within an extended class. We take a Bird as the parent class this has 1 method `fly()` we extend different birds from the parent class.

We have `Duck` and we have `Ostrich` from the looks of things that's fine as they are both birds. 
However something is not right. A Duck is a bird with the ability of flight. So the `fly()` method which it inherits is applicable to that bird.
An Ostrich on the other hand does not have the ability of flight yet still has access to the `fly()` method. This isn't right as an actual Ostrich won't be able to fly even if it tried.

## Liskov Substitution Principle Correctly

### Example One

This is the fix to Example One in the violation directory. Navigate to `app/LiskovSubstitutionPrinciple` and you will find the fi which is to return an array as opposed to the collection (Illuminate\Support\Collection).

### Example Two

This is the fix for Example Two in the violations. Here we remove the `fly()` method from the base `Bird` class. We then create a new class `FlyingBirds` which extends `Bird` and has a method `fly()`.

The actual birds now extend the respective class depending on if they have the ability of flight or don't. This leads nicely into the Interface Segregation Principle.

## Useful resources
- https://codeburst.io/the-liskov-substitution-principle-5ba387055a2a
- https://laracasts.com/series/solid-principles-in-php/episodes/3
- https://www.youtube.com/watch?v=w7KxVGcHzno&list=PLrIm-p2rpV0EMU_OsbH8RekBNp9buhsr-&index=3
- https://stackoverflow.com/questions/56860/what-is-an-example-of-the-liskov-substitution-principle
