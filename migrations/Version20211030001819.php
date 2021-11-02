<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211030001819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer DROP epaule, DROP manche, DROP blouse, DROP poitrine, DROP longueur_manche, DROP taille, DROP longueur_jupe, DROP longueur_robe, DROP longueur_haut, DROP ceinture, DROP cuisse, DROP tour_manche, DROP tete');
        $this->addSql('ALTER TABLE order_customer ADD epaule VARCHAR(255) NOT NULL, ADD manche VARCHAR(255) NOT NULL, ADD blouse VARCHAR(255) NOT NULL, ADD poitrine VARCHAR(255) NOT NULL, ADD longueur_manche VARCHAR(255) NOT NULL, ADD taille VARCHAR(255) NOT NULL, ADD longueur_jupe VARCHAR(255) NOT NULL, ADD longueur_robe VARCHAR(255) NOT NULL, ADD longueur_haut VARCHAR(255) NOT NULL, ADD ceinture VARCHAR(255) NOT NULL, ADD cuisse VARCHAR(255) NOT NULL, ADD tour_manche VARCHAR(255) NOT NULL, ADD tete VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tailor DROP FOREIGN KEY FK_DEAE5D3CA76ED395');
        $this->addSql('DROP INDEX UNIQ_DEAE5D3CA76ED395 ON tailor');
        $this->addSql('ALTER TABLE tailor DROP user_id');
        $this->addSql('ALTER TABLE users ADD tailor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9754B74EC FOREIGN KEY (tailor_id) REFERENCES tailor (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9754B74EC ON users (tailor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer ADD epaule VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD manche VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD blouse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD poitrine VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD longueur_manche VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD taille VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD longueur_jupe VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD longueur_robe VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD longueur_haut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD ceinture VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD cuisse VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD tour_manche VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD tete VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE order_customer DROP epaule, DROP manche, DROP blouse, DROP poitrine, DROP longueur_manche, DROP taille, DROP longueur_jupe, DROP longueur_robe, DROP longueur_haut, DROP ceinture, DROP cuisse, DROP tour_manche, DROP tete');
        $this->addSql('ALTER TABLE tailor ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tailor ADD CONSTRAINT FK_DEAE5D3CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_DEAE5D3CA76ED395 ON tailor (user_id)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9754B74EC');
        $this->addSql('DROP INDEX IDX_1483A5E9754B74EC ON users');
        $this->addSql('ALTER TABLE users DROP tailor_id');
    }
}
