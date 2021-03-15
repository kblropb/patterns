<?php

namespace App\Template\Bridge;

class HtmlRenderer implements RendererInterface
{

    /**
     * @param array $parts
     *
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }

    public function renderHeader(): string
    {
        return "<html><body>";
    }

    public function renderFooter(): string
    {
        return "</body></html>";
    }

    /**
     * @param string $title
     *
     * @return string
     */
    public function renderTitle(string $title): string
    {
        return "<h1>$title</h1>";
    }

    public function renderTextBlock(string $content): string
    {
        return "<div class='text'>$content</div>";
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function renderImage(string $url): string
    {
        return "<img src='$url'>";
    }

    /**
     * @param string $url
     * @param string $title
     *
     * @return string
     */
    public function renderLink(string $url, string $title): string
    {
        return "<a href='$url'>$title</a>";
    }
}
