<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Compound;

/**
 * @Annotation
 */

class CheckName extends Compound
{
    protected function getConstraints(array $options): array
    {
        return [
            new Assert\Length([
                'min' => 2,
                'max' => 15,
                'minMessage' => 'Your name must be at least {{ limit }} charters long',
                'maxMessage' => 'Your name cannot be longer than {{ limit }} charters',
            ]),
            new Assert\Regex([
                'pattern' => '/\d/',
                'match' => false,
                'message' => 'Your name cannot contain a number',
            ]),
        ];
    }
}