<?php

namespace App\Entity;

use App\Template\Visitor\AnimalVisitorInterface;

/**
 * Class Dog
 *
 * @package App\Entity
 * @ORM\Entity
 */
class Dog extends Pet
{
    /**
     * @param AnimalVisitorInterface $visitor
     */
    public function accept(AnimalVisitorInterface $visitor): void
    {
        $visitor->visitDog($this);
    }
}