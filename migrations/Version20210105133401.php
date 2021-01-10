<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210105133401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frcategory CHANGE category_id category_id INT NULL');
//        $this->addSql('ALTER TABLE frcontact_details DROP contact_details_email');
//        $this->addSql('ALTER TABLE frpersonnes ADD personnes_email VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frcategory CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE frcontact_details ADD contact_details_email VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE frpersonnes DROP personnes_email');
    }
}
