<?php declare(strict_types=1);

namespace App\Entity;

use Algolia\SearchBundle\Entity\Aggregator;
use Doctrine\ORM\Mapping as ORM;

/**
 * News class
 *
 * @ORM\Entity()
 */
class News extends Aggregator
{
    /**
     * Get entities
     */
    public static function getEntities(): array
    {
        return [
            Post::class,
            Comment::class
        ];
    }
}
