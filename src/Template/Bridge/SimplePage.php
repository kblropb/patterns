<?php

namespace App\Template\Bridge;

class SimplePage extends AbstractPage
{
    /** @var string */
    private $title;
    /** @var string */
    private $content;

    /**
     * SimplePage constructor.
     *
     * @param RendererInterface $renderer
     * @param string $title
     * @param string $content
     */
    public function __construct(
        RendererInterface $renderer,
        string $title,
        string $content
    ) {
        parent::__construct($renderer);
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function view(): string
    {
        return $this->renderer->renderParts(
            [
                $this->renderer->renderHeader(),
                $this->renderer->renderTitle($this->title),
                $this->renderer->renderTextBlock($this->content),
                $this->renderer->renderFooter(),
            ]
        );
    }
}