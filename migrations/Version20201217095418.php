<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217095418 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frproducts ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE frproducts ADD CONSTRAINT FK_37BE722112469DE2 FOREIGN KEY (category_id) REFERENCES frcategory (id)');
        $this->addSql('CREATE INDEX IDX_37BE722112469DE2 ON frproducts (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frproducts DROP FOREIGN KEY FK_37BE722112469DE2');
        $this->addSql('DROP INDEX IDX_37BE722112469DE2 ON frproducts');
        $this->addSql('ALTER TABLE frproducts DROP category_id');
    }
}
