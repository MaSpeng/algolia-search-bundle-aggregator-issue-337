<?php declare(strict_types=1);

namespace App\DataFixtures;

use App\Entity\Comment;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * App fixtures class
 */
class AppFixtures extends Fixture
{
    /**
     * Load
     */
    public function load(ObjectManager $manager): void
    {
        $manager->persist(
            new Post('Post title one', 'Post content one')
        );

        $manager->persist(
            new Post('Post title two', 'Post content two')
        );

        $manager->persist(
            new Comment('Comment content one')
        );

        $manager->persist(
            new Comment('Comment content two')
        );

        $manager->flush();
    }
}
