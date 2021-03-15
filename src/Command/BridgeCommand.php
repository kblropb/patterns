<?php

namespace App\Command;

use App\Template\Bridge\HtmlRenderer;
use App\Template\Bridge\JsonRenderer;
use App\Template\Bridge\Product;
use App\Template\Bridge\ProductPage;
use App\Template\Bridge\SimplePage;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BridgeCommand extends Command
{
    protected static $defaultName = 'pattern:bridge';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $htmlRenderer = new HtmlRenderer();
        $jsonRenderer = new JsonRenderer();

        $output->writeln('Simple page');
        $output->writeln('Render html');
        $page = new SimplePage(
            $htmlRenderer,
            'Simple Page', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, ' .
            'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.'
        );
        $page->view();

        $output->writeln('Render json');
        $page->setRenderer($jsonRenderer);
        $page->view();

        $output->writeln("\nProduct page\n");

        $product = new Product(
            1132,
            'Product title',
            'Product description',
            'files/products/product-1.jpg'
        );

        $output->writeln('Render html');
        $page = new ProductPage($htmlRenderer, $product);
        $page->view();

        $output->writeln('Render json');
        $page->setRenderer($jsonRenderer);
        $page->view();

        return self::SUCCESS;
    }
}