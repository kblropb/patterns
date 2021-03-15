<?php

namespace App\Template\State;

class State implements StateInterface
{

    /** @var string */
    private $state;
    /** @var int */
    private $createdAt;
    /** @var string */
    private $name;

    /**
     * State constructor.
     *
     * @param string $state
     * @param string|null $name
     */
    public function __construct(string $state, string $name = null)
    {
        $this->state = $state;
        $this->createdAt = time();
        $this->name = $name;
    }

    /**
     * @param string $format
     *
     * @return string
     */
    public function getDate($format = 'm-d-Y H:i:s'): string
    {
        return date($format, $this->createdAt);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name ?? 'State ' . mb_strimwidth($this->state, 0, 10, '...');
    }

    public function getState(): string
    {
        return $this->state;
    }
}