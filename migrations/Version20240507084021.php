<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240507084021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aboutme ADD signature VARCHAR(255) DEFAULT NULL, ADD altsignature VARCHAR(255) DEFAULT NULL, ADD image VARCHAR(255) DEFAULT NULL, ADD altimage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE banner ADD image VARCHAR(255) DEFAULT NULL, ADD altimage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE contactsection ADD image VARCHAR(255) DEFAULT NULL, ADD altimage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE experience ADD logocompany VARCHAR(255) DEFAULT NULL, ADD altlogocompany VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE feedback ADD image VARCHAR(255) DEFAULT NULL, ADD altimage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE langage ADD projects_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE langage ADD CONSTRAINT FK_CC50EA261EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id)');
        $this->addSql('CREATE INDEX IDX_CC50EA261EDE0F55 ON langage (projects_id)');
        $this->addSql('ALTER TABLE projects ADD image VARCHAR(255) DEFAULT NULL, ADD altimage VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE projectstype ADD projects_id INT NOT NULL');
        $this->addSql('ALTER TABLE projectstype ADD CONSTRAINT FK_B17E5D341EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id)');
        $this->addSql('CREATE INDEX IDX_B17E5D341EDE0F55 ON projectstype (projects_id)');
        $this->addSql('ALTER TABLE setting ADD logo VARCHAR(255) DEFAULT NULL, ADD altlogo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE socialmedia ADD setting_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE socialmedia ADD CONSTRAINT FK_78180273EE35BD72 FOREIGN KEY (setting_id) REFERENCES setting (id)');
        $this->addSql('CREATE INDEX IDX_78180273EE35BD72 ON socialmedia (setting_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE projectstype DROP FOREIGN KEY FK_B17E5D341EDE0F55');
        $this->addSql('DROP INDEX IDX_B17E5D341EDE0F55 ON projectstype');
        $this->addSql('ALTER TABLE projectstype DROP projects_id');
        $this->addSql('ALTER TABLE feedback DROP image, DROP altimage');
        $this->addSql('ALTER TABLE langage DROP FOREIGN KEY FK_CC50EA261EDE0F55');
        $this->addSql('DROP INDEX IDX_CC50EA261EDE0F55 ON langage');
        $this->addSql('ALTER TABLE langage DROP projects_id');
        $this->addSql('ALTER TABLE experience DROP logocompany, DROP altlogocompany');
        $this->addSql('ALTER TABLE projects DROP image, DROP altimage');
        $this->addSql('ALTER TABLE contactsection DROP image, DROP altimage');
        $this->addSql('ALTER TABLE setting DROP logo, DROP altlogo');
        $this->addSql('ALTER TABLE aboutme DROP signature, DROP altsignature, DROP image, DROP altimage');
        $this->addSql('ALTER TABLE socialmedia DROP FOREIGN KEY FK_78180273EE35BD72');
        $this->addSql('DROP INDEX IDX_78180273EE35BD72 ON socialmedia');
        $this->addSql('ALTER TABLE socialmedia DROP setting_id');
        $this->addSql('ALTER TABLE banner DROP image, DROP altimage');
    }
}
