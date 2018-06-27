<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuoteRepository")
 */
class Quote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $book;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $quote;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getBook(): ?string
    {
        return $this->book;
    }

    /**
     * @param string $book
     * @return Quote
     */
    public function setBook(string $book): self
    {
        $this->book = $book;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return Quote
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getQuote(): ?string
    {
        return $this->quote;
    }

    /**
     * @param string $quote
     * @return Quote
     */
    public function setQuote(string $quote): self
    {
        $this->quote = $quote;

        return $this;
    }
}
