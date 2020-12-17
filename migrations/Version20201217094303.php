<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217094303 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frsuppliers ADD contact_details_id INT NOT NULL');
        $this->addSql('ALTER TABLE frsuppliers ADD CONSTRAINT FK_6B7B15C07CA35EB5 FOREIGN KEY (contact_details_id) REFERENCES frcontact_details (id)');
        $this->addSql('CREATE INDEX IDX_6B7B15C07CA35EB5 ON frsuppliers (contact_details_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frsuppliers DROP FOREIGN KEY FK_6B7B15C07CA35EB5');
        $this->addSql('DROP INDEX IDX_6B7B15C07CA35EB5 ON frsuppliers');
        $this->addSql('ALTER TABLE frsuppliers DROP contact_details_id');
    }
}
