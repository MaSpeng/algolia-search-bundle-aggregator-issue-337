<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post class
 *
 * @ORM\Entity()
 */
class Post
{
    /**
     * Id
     *
     * @ORM\Id()
     *
     * @ORM\GeneratedValue();
     *
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * Title
     *
     * @ORM\Column(type="string")
     */
    private string $title;

    /**
     * Content
     *
     * @ORM\Column(type="string")
     */
    private string $content;

    /**
     * Post constructor
     */
    public function __construct(string $title, string $content)
    {
        $this->title = $title;
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
     * Get title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get content
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
