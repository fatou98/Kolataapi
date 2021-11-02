<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211006215038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, tailor_id INT DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, adress LONGTEXT NOT NULL, mobile_number VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, ref_code VARCHAR(255) NOT NULL, epaule VARCHAR(255) NOT NULL, manche VARCHAR(255) NOT NULL, blouse VARCHAR(255) NOT NULL, poitrine VARCHAR(255) NOT NULL, longueur_manche VARCHAR(255) NOT NULL, taille VARCHAR(255) NOT NULL, longueur_jupe VARCHAR(255) NOT NULL, longueur_robe VARCHAR(255) NOT NULL, longueur_haut VARCHAR(255) NOT NULL, ceinture VARCHAR(255) NOT NULL, cuisse VARCHAR(255) NOT NULL, tour_manche VARCHAR(255) NOT NULL, tete VARCHAR(255) NOT NULL, INDEX IDX_81398E09754B74EC (tailor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_customer (id INT AUTO_INCREMENT NOT NULL, customer_id INT DEFAULT NULL, tailor_id INT DEFAULT NULL, creation_date VARCHAR(50) NOT NULL, tissu LONGTEXT NOT NULL, modele LONGTEXT NOT NULL, delyvery_date VARCHAR(50) NOT NULL, amount_order INT NOT NULL, avance_amount INT NOT NULL, rest_amount INT NOT NULL, statut TINYINT(1) NOT NULL, delivery_statut TINYINT(1) NOT NULL, INDEX IDX_60C16CB89395C3F3 (customer_id), INDEX IDX_60C16CB8754B74EC (tailor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tailor (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, adress LONGTEXT NOT NULL, name_atelier VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_DEAE5D3CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(25) NOT NULL, password VARCHAR(500) NOT NULL, is_active TINYINT(1) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, address LONGTEXT NOT NULL, mobile_number VARCHAR(30) NOT NULL, identity_number VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E09754B74EC FOREIGN KEY (tailor_id) REFERENCES tailor (id)');
        $this->addSql('ALTER TABLE order_customer ADD CONSTRAINT FK_60C16CB89395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id)');
        $this->addSql('ALTER TABLE order_customer ADD CONSTRAINT FK_60C16CB8754B74EC FOREIGN KEY (tailor_id) REFERENCES tailor (id)');
        $this->addSql('ALTER TABLE tailor ADD CONSTRAINT FK_DEAE5D3CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_customer DROP FOREIGN KEY FK_60C16CB89395C3F3');
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E09754B74EC');
        $this->addSql('ALTER TABLE order_customer DROP FOREIGN KEY FK_60C16CB8754B74EC');
        $this->addSql('ALTER TABLE tailor DROP FOREIGN KEY FK_DEAE5D3CA76ED395');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE order_customer');
        $this->addSql('DROP TABLE tailor');
        $this->addSql('DROP TABLE users');
    }
}
