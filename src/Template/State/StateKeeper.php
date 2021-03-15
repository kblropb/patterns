<?php

namespace App\Template\State;

class StateKeeper
{
    /** @var MyObject */
    private $object;
    /** @var StateInterface[] */
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
     * @return StateInterface
     */
    public function backup(): StateInterface
    {
        $state = $this->object->save();
        $this->states[] = $state;

        return $state;
    }

    public function undo()
    {
        if (empty($this->states)) {
            return;
        }

        $state = array_pop($this->states);
        $this->object->restore($state);
    }
}