<?php

namespace App\Template\Bridge;

abstract class AbstractPage
{
    /** @var RendererInterface */
    protected $renderer;

    /**
     * AbstractPage constructor.
     *
     * @param RendererInterface $renderer
     */
    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @return string
     */
    abstract public function view(): string;

    /**
     * @param RendererInterface $renderer
     */
    public function setRenderer(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }
}