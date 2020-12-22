<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217091410 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE frorder_details (id INT AUTO_INCREMENT NOT NULL, order_details_quantity_ordered INT NOT NULL, order_details_delivery_date DATE NOT NULL, order_details_taxe_coefficient NUMERIC(4, 2) NOT NULL, order_details_delivery_adress VARCHAR(255) NOT NULL, order_details_billing_adress VARCHAR(255) DEFAULT NULL, order_details_payment VARCHAR(3) NOT NULL, order_details_send VARCHAR(3) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE frorder_details');
    }
}
