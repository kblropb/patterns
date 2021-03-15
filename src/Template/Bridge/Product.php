<?php

namespace App\Template\Bridge;

class Product
{
    /** @var int */
    private $id;
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var string */
    private $image;

    /**
     * Product constructor.
     *
     * @param int $id
     * @param string $title
     * @param string $description
     * @param string $image
     */
    public function __construct(int $id, string $title, string $description, string $image)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}
