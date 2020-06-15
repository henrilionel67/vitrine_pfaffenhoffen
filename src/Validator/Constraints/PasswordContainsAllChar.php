<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @Annotation
 */
class PasswordContainsAllChar extends Constraint
{
    public $message = 'Le mot de passe n\'est pas valide: Le mot de passe doit contenir au moins 8 caractères, dont au moins une lettre minuscule, une majuscule et un chiffre.';
}