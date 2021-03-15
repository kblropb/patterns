<?php

namespace App\Template\Visitor;

use App\Entity\Cat;
use App\Entity\Dog;

interface AnimalVisitorInterface
{
    public function visitCat(Cat $cat);
    public function visitDog(Dog $dog);
}