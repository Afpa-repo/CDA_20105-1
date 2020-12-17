<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217143513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE frproducts_frsuppliers (frproducts_id INT NOT NULL, frsuppliers_id INT NOT NULL, INDEX IDX_CA73CD0A6E1E6C2F (frproducts_id), INDEX IDX_CA73CD0A78C1DBB (frsuppliers_id), PRIMARY KEY(frproducts_id, frsuppliers_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE frproducts_frsuppliers ADD CONSTRAINT FK_CA73CD0A6E1E6C2F FOREIGN KEY (frproducts_id) REFERENCES frproducts (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE frproducts_frsuppliers ADD CONSTRAINT FK_CA73CD0A78C1DBB FOREIGN KEY (frsuppliers_id) REFERENCES frsuppliers (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE frproducts_frsuppliers');
    }
}
