<?php

namespace App\Template\State;

interface MementoInterface
{
    /**
     * @param string|null $format
     *
     * @return string
     */
    public function getDate(string $format = null): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getState(): string;
}