<?php

namespace App\Command;

use App\Template\Memento\MyObject;
use App\Template\Memento\MementoKeeper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StateCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'pattern:state';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $object = new MyObject();
        $stateKeeper = new MementoKeeper($object);

        $object->changeState();
        $state1 = $stateKeeper->backup();
        $output->writeln('');

        $object->changeState();
        $state2 = $stateKeeper->backup();
        $output->writeln('');

        $object->changeState();
        $state3 = $stateKeeper->backup();
        $output->writeln('');

        $object->changeState();
        $state4 = $stateKeeper->backup();
        $output->writeln('');

        $stateKeeper->undo();
        $output->writeln('');

        $stateKeeper->undo();
        $output->writeln('');

        $stateKeeper->undo();
        $output->writeln('');

        return self::SUCCESS;
    }
}