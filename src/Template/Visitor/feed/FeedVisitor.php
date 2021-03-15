<?php

namespace App\Template\Visitor\feed;

use App\Entity\Cat;
use App\Entity\Dog;
use App\Template\Visitor\AnimalVisitorInterface;

class FeedVisitor implements AnimalVisitorInterface
{
    public function visitCat(Cat $cat)
    {
        echo "Покормил кота $cat->name \n";
    }

    public function visitDog(Dog $dog)
    {
        echo "Покормил собаку $dog->name \n";
    }
}
