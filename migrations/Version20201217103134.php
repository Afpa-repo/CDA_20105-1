<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201217103134 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frorder_details ADD order_fk_id INT NOT NULL');
        $this->addSql('ALTER TABLE frorder_details ADD CONSTRAINT FK_373E015D26E96D2D FOREIGN KEY (order_fk_id) REFERENCES frorders (id)');
        $this->addSql('CREATE INDEX IDX_373E015D26E96D2D ON frorder_details (order_fk_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE frorder_details DROP FOREIGN KEY FK_373E015D26E96D2D');
        $this->addSql('DROP INDEX IDX_373E015D26E96D2D ON frorder_details');
        $this->addSql('ALTER TABLE frorder_details DROP order_fk_id');
    }
}
