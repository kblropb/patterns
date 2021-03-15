<?php

namespace App\Template\Bridge;

class ProductPage extends AbstractPage
{
    /** @var Product */
    private $product;

    /**
     * ProductPage constructor.
     *
     * @param RendererInterface $renderer
     * @param Product $product
     */
    public function __construct(RendererInterface $renderer, Product $product)
    {
        parent::__construct($renderer);
        $this->product = $product;
    }

    public function view(): string
    {
        return $this->renderer->renderParts(
            [
                $this->renderer->renderHeader(),
                $this->renderer->renderTitle($this->product->getTitle()),
                $this->renderer->renderTextBlock($this->product->getDescription()),
                $this->renderer->renderImage($this->product->getImage()),
                $this->renderer->renderLink('/cart/add/' . $this->product->getId(), 'Add to cart'),
                $this->renderer->renderFooter(),
            ]
        );
    }
}