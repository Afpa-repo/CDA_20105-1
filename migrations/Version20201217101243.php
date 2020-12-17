<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217101243 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frorders ADD personnes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE frorders ADD CONSTRAINT FK_5CBCEB1A146AD7BC FOREIGN KEY (personnes_id) REFERENCES frpersonnes (id)');
        $this->addSql('CREATE INDEX IDX_5CBCEB1A146AD7BC ON frorders (personnes_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frorders DROP FOREIGN KEY FK_5CBCEB1A146AD7BC');
        $this->addSql('DROP INDEX IDX_5CBCEB1A146AD7BC ON frorders');
        $this->addSql('ALTER TABLE frorders DROP personnes_id');
    }
}
