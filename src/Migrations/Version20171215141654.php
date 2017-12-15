<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171215141654 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE laboratorium (id INT AUTO_INCREMENT NOT NULL, nama_lab VARCHAR(255) NOT NULL, jenis_lab INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transaksi (id INT AUTO_INCREMENT NOT NULL, biaya INT NOT NULL, tanggal_pengambilan_hasil DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pelanggan (id INT AUTO_INCREMENT NOT NULL, nama VARCHAR(255) NOT NULL, alamat LONGTEXT NOT NULL, telepon INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hasil (id INT AUTO_INCREMENT NOT NULL, satuan VARCHAR(100) NOT NULL, parameter VARCHAR(100) NOT NULL, metode_analisa VARCHAR(255) NOT NULL, baku_mutu VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sampel (id INT AUTO_INCREMENT NOT NULL, lokasi_pengambilan VARCHAR(255) NOT NULL, alamat VARCHAR(255) NOT NULL, petugas_pengambil VARCHAR(255) NOT NULL, tanggal DATETIME NOT NULL, kondisi VARCHAR(255) NOT NULL, jenis_sampel VARCHAR(255) NOT NULL, parameter VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE laboratorium');
        $this->addSql('DROP TABLE transaksi');
        $this->addSql('DROP TABLE pelanggan');
        $this->addSql('DROP TABLE hasil');
        $this->addSql('DROP TABLE sampel');
    }
}
