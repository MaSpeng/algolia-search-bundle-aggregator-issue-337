<?php declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200709132616 extends AbstractMigration
{
    /**
     * Up
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function up(Schema $schema): void
    {
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'sqlite',
            'Migration can only be executed safely on \'sqlite\'.'
        );

        $this->addSql(
            'CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL)'
        );
        $this->addSql(
            'CREATE TABLE comment (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, content VARCHAR(255) NOT NULL)'
        );
    }

    /**
     * Down
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function down(Schema $schema): void
    {
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'sqlite',
            'Migration can only be executed safely on \'sqlite\'.'
        );

        $this->addSql('DROP TABLE comment');
    }
}
