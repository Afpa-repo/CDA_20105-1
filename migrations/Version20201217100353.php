<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217100353 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frpersonnes ADD contact_details_id INT NULL');
        $this->addSql('ALTER TABLE frpersonnes ADD CONSTRAINT FK_ECE752B77CA35EB5 FOREIGN KEY (contact_details_id) REFERENCES frcontact_details (id)');
        $this->addSql('CREATE INDEX IDX_ECE752B77CA35EB5 ON frpersonnes (contact_details_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frpersonnes DROP FOREIGN KEY FK_ECE752B77CA35EB5');
        $this->addSql('DROP INDEX IDX_ECE752B77CA35EB5 ON frpersonnes');
        $this->addSql('ALTER TABLE frpersonnes DROP contact_details_id');
    }
}
