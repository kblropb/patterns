<?php

namespace App\Template\State;

class MyObject
{
    private const NAME = 'MyObject';

    /** @var string */
    private $state;

    /**
     * @param string|null $name
     *
     * @return StateInterface
     */
    public function save(string $name = null): StateInterface
    {
        $state = new State($this->state, $name);
        echo "Save state [{$state->getName()}], date [{$state->getDate()}] \n";

        sleep(1);

        return $state;
    }

    /**
     * @param StateInterface $state
     */
    public function restore(StateInterface $state): void
    {
        echo "{$this->getName()}: Restore state [{$state->getName()}], date [{$state->getDate()}] \n";
        $this->state = $state->getState();
        echo "{$this->getName()}: My state is [{$state->getState()}]";
    }

    public function changeState(): void
    {
        echo "{$this->getName()}: I'm doing something important.\n";
        $this->state = $this->generateRandomString(30);
        echo "{$this->getName()}: and my state has changed to: {$this->state}\n";
    }

    /**
     * @param int $length
     *
     * @return string
     */
    private function generateRandomString(int $length = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length / strlen($x))
                )
            ),
            1,
            $length
        );
    }

    /**
     * @return string
     */
    private function getName(): string
    {
        return '[' . self::NAME . ']';
    }
}
