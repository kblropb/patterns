<?php

namespace App\Template\Visitor\feed;

use App\Entity\Cat;
use App\Entity\Dog;
use App\Template\Visitor\AnimalVisitorInterface;

class WalkVisitor implements AnimalVisitorInterface
{
    public function visitCat(Cat $cat)
    {
        echo "Поиграл с котом $cat->name \n";
    }

    public function visitDog(Dog $dog)
    {
        echo "Выгулял собаку $dog->name \n";
    }
}
