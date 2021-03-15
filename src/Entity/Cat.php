<?php

namespace App\Entity;

use App\Template\Visitor\AnimalVisitorInterface;

/**
 * Class Cat
 *
 * @package App\Entity
 * @ORM\Entity
 */
class Cat extends Pet
{
    /**
     * @param AnimalVisitorInterface $visitor
     */
    public function accept(AnimalVisitorInterface $visitor): void
    {
        $visitor->visitCat($this);
    }
}