<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220915121618 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6612469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_23A0E6612469DE2 ON article (category_id)');
        $this->addSql('ALTER TABLE category DROP CONSTRAINT fk_64c19c17294869c');
        $this->addSql('DROP INDEX idx_64c19c17294869c');
        $this->addSql('ALTER TABLE category DROP article_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE category ADD article_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT fk_64c19c17294869c FOREIGN KEY (article_id) REFERENCES article (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_64c19c17294869c ON category (article_id)');
        $this->addSql('ALTER TABLE article DROP CONSTRAINT FK_23A0E6612469DE2');
        $this->addSql('DROP INDEX IDX_23A0E6612469DE2');
        $this->addSql('ALTER TABLE article DROP category_id');
    }
}
