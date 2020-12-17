<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201216152424 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE frcontact_details (id INT AUTO_INCREMENT NOT NULL, contact_details_number VARCHAR(10) NOT NULL, contact_details_street VARCHAR(150) NOT NULL, contact_details_complement VARCHAR(150) DEFAULT NULL, contact_details_city VARCHAR(80) NOT NULL, contact_details_postcode VARCHAR(10) NOT NULL, contact_details_country VARCHAR(50) NOT NULL, contact_details_phone_number VARCHAR(15) NOT NULL, contact_details_email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE frcontact_details');
    }
}
