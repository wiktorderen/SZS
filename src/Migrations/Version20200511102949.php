<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200511102949 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, training_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, password VARCHAR(191) NOT NULL, name VARCHAR(40) NOT NULL, surname VARCHAR(40) NOT NULL, number VARCHAR(15) NOT NULL, UNIQUE INDEX UNIQ_70E4FA78E7927C74 (email), INDEX IDX_70E4FA78BEFD98D1 (training_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE super_admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(191) NOT NULL, roles JSON NOT NULL, password VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_BC8C2783F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE training (id INT AUTO_INCREMENT NOT NULL, trainer_id INT DEFAULT NULL, name VARCHAR(60) NOT NULL, description TINYTEXT NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, price DOUBLE PRECISION DEFAULT NULL, free TINYINT(1) NOT NULL, INDEX IDX_D5128A8FFB08EDF6 (trainer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78BEFD98D1 FOREIGN KEY (training_id) REFERENCES training (id)');
        $this->addSql('ALTER TABLE training ADD CONSTRAINT FK_D5128A8FFB08EDF6 FOREIGN KEY (trainer_id) REFERENCES trainer (id)');
        $this->addSql('ALTER TABLE courses ADD place VARCHAR(255) NOT NULL, ADD time DATETIME NOT NULL, DROP date, CHANGE name name VARCHAR(191) NOT NULL');
        $this->addSql('ALTER TABLE trainer ADD name VARCHAR(50) NOT NULL, ADD surname VARCHAR(50) NOT NULL, ADD email VARCHAR(50) NOT NULL, ADD number VARCHAR(15) NOT NULL, DROP username');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA78BEFD98D1');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE super_admin');
        $this->addSql('DROP TABLE training');
        $this->addSql('ALTER TABLE courses ADD date DATE NOT NULL, DROP place, DROP time, CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE trainer ADD username VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP name, DROP surname, DROP email, DROP number');
    }
}
