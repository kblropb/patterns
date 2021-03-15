<?php

namespace App\Template\Bridge;

interface RendererInterface
{

    public function renderParts(array $parts): string;

    public function renderHeader(): string;

    public function renderTitle(string $title): string;

    public function renderTextBlock(string $content): string;

    public function renderImage(string $url): string;

    public function renderLink(string $url, string $title): string;

    public function renderFooter(): string;
}