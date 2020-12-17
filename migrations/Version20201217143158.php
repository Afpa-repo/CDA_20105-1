<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217143158 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frcategory ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE frcategory ADD CONSTRAINT FK_824831BA12469DE2 FOREIGN KEY (category_id) REFERENCES frcategory (id)');
        $this->addSql('CREATE INDEX IDX_824831BA12469DE2 ON frcategory (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frcategory DROP FOREIGN KEY FK_824831BA12469DE2');
        $this->addSql('DROP INDEX IDX_824831BA12469DE2 ON frcategory');
        $this->addSql('ALTER TABLE frcategory DROP category_id');
    }
}
