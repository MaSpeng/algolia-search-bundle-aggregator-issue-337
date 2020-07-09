<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment class
 *
 * @ORM\Entity()
 */
class Comment
{
    /**
     * Id
     *
     * @ORM\Id()
     *
     * @ORM\GeneratedValue()
     *
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * Content
     *
     * @ORM\Column(type="string")
     */
    private string $content;

    /**
     * Comment constructor
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * Get id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get content
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
