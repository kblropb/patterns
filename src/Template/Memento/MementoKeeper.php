<?php

namespace App\Template\Memento;

class MementoKeeper
{
    /** @var MyObject */
    private $object;
    /** @var MementoInterface[] */
    private $states = [];

    /**
     * StateKeeper constructor.
     *
     * @param MyObject $object
     */
    public function __construct(MyObject $object)
    {
        $this->object = $object;
    }

    /**
     * @return MementoInterface
     */
    public function backup(): MementoInterface
    {
        $state = $this->object->save();
        $this->states[] = $state;

        return $state;
    }

    public function undo(): void
    {
        if (empty($this->states)) {
            return;
        }

        $state = array_pop($this->states);
        $this->object->restore($state);
    }
}
