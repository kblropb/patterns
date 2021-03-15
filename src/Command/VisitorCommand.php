<?php

namespace App\Command;

use App\Entity\Cat;
use App\Entity\Dog;
use App\Entity\Pet;
use App\Template\Visitor\feed\FeedVisitor;
use App\Template\Visitor\feed\WalkVisitor;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class VisitorCommand extends Command
{
    protected static $defaultName = 'pattern:visitor';

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('З')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Test any code...');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $pets = [];
        $petClasses = [Cat::class, Dog::class];
        for ($i = 1; $i <= 10; $i++) {
            $petClassIndex = array_rand($petClasses);
            $pet = new $petClasses[$petClassIndex];
            $pet->name = substr(md5(random_bytes(10)), 0, 5);
            $pets[] = $pet;
        }

        $visitor1 = new FeedVisitor();
        $visitor2 = new WalkVisitor();
        /** @var Pet $pet */
        foreach ($pets as $pet) {
            $pet->accept($visitor2);
            $pet->accept($visitor1);
            $output->writeln("");
        }

        return Command::SUCCESS;
    }
}