<?php

namespace App\Template\Bridge;

class JsonRenderer implements RendererInterface
{

    /**
     * @param array $parts
     *
     * @return string
     */
    public function renderParts(array $parts): string
    {
        return "{\n" . implode(",\n", array_filter($parts)) . "\n}";
    }

    /**
     * @return string
     */
    public function renderHeader(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function renderFooter(): string
    {
        return '';
    }

    /**
     * @param string $title
     *
     * @return string
     */
    public function renderTitle(string $title): string
    {
        return '"title": "' . $title . '"';
    }

    /**
     * @param string $content
     *
     * @return string
     */
    public function renderTextBlock(string $content): string
    {
        return '"text": "' . $content . '"';
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function renderImage(string $url): string
    {
        return '"img": "' . $url . '"';
    }

    /**
     * @param string $url
     * @param string $title
     *
     * @return string
     */
    public function renderLink(string $url, string $title): string
    {
        return '"link": {"href": "' . $url . '", "title": "' . $title . '"}';
    }
}