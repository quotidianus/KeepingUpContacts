<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180221165714 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ku_address (id_address INT AUTO_INCREMENT NOT NULL, ku_address_label VARCHAR(100) NOT NULL, ku_address_street VARCHAR(200) NOT NULL, ku_address_city VARCHAR(100) NOT NULL, ku_address_state VARCHAR(100) NOT NULL, ku_address_zip VARCHAR(100) NOT NULL, ku_id_country INT NOT NULL, PRIMARY KEY(id_address)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_anniversary (id_anniversary INT AUTO_INCREMENT NOT NULL, ku_anniversary_label VARCHAR(100) NOT NULL, ku_anniversary_date DATE NOT NULL, PRIMARY KEY(id_anniversary)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact (id_ku_contact INT AUTO_INCREMENT NOT NULL, ku_contact_prefix VARCHAR(100) NOT NULL, ku_contact_first_name VARCHAR(100) NOT NULL, ku_contact_middle_name VARCHAR(100) NOT NULL, ku_contact_last_name VARCHAR(100) NOT NULL, ku_contact_is_company TINYINT(1) NOT NULL, ku_contact_company VARCHAR(100) NOT NULL, ku_contact_job_title VARCHAR(100) NOT NULL, ku_contact_department VARCHAR(100) NOT NULL, ku_contact_maiden_name VARCHAR(100) NOT NULL, ku_contact_birthday DATE NOT NULL, ku_contact_nickname VARCHAR(100) NOT NULL, ku_contact_phonetic_first_name VARCHAR(100) NOT NULL, ku_contact_phonetic_last_name VARCHAR(100) NOT NULL, ku_contact_notes LONGTEXT NOT NULL, PRIMARY KEY(id_ku_contact)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_address (id_contact_address INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_address INT NOT NULL, PRIMARY KEY(id_contact_address)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_anniversary (id_contact_anniversary INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_anniversary INT NOT NULL, PRIMARY KEY(id_contact_anniversary)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_email (id_contact_email INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_email INT NOT NULL, PRIMARY KEY(id_contact_email)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_event (id_contact_event INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_event INT NOT NULL, PRIMARY KEY(id_contact_event)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_group (id_contact_group INT AUTO_INCREMENT NOT NULL, ku_contact_group_name VARCHAR(100) NOT NULL, PRIMARY KEY(id_contact_group)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_group_contact (id_contact_group_contact INT AUTO_INCREMENT NOT NULL, ku_id_contact_group INT NOT NULL, ku_id_event_group INT NOT NULL, PRIMARY KEY(id_contact_group_contact)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_network (id_contact_network INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_network INT NOT NULL, PRIMARY KEY(id_contact_network)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_phone (id_contact_phone INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_phone INT NOT NULL, PRIMARY KEY(id_contact_phone)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_relationship (id_contact_relationship INT AUTO_INCREMENT NOT NULL, ku_id_relationship INT NOT NULL, ku_id_contact_parent INT NOT NULL, ku_id_contact_child INT NOT NULL, PRIMARY KEY(id_contact_relationship)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_contact_url (id_contact_url INT AUTO_INCREMENT NOT NULL, ku_id_contact INT NOT NULL, ku_id_url INT NOT NULL, PRIMARY KEY(id_contact_url)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_country (id_country INT AUTO_INCREMENT NOT NULL, ku_country_name VARCHAR(100) NOT NULL, ku_country_address_format VARCHAR(100) NOT NULL, ku_country_phone_format VARCHAR(100) NOT NULL, PRIMARY KEY(id_country)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_custom_field (id_custom_field INT AUTO_INCREMENT NOT NULL, ku_custom_field_label VARCHAR(100) NOT NULL, ku_custom_field_content LONGTEXT NOT NULL, PRIMARY KEY(id_custom_field)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_email (id_email INT AUTO_INCREMENT NOT NULL, ku_email_label VARCHAR(100) NOT NULL, PRIMARY KEY(id_email)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event (id_event INT AUTO_INCREMENT NOT NULL, ku_event_description VARCHAR(100) NOT NULL, ku_event_begin DATETIME NOT NULL, ku_event_end DATETIME NOT NULL, ku_event_recurrence TIME NOT NULL, ku_event_alert VARCHAR(100) NOT NULL, ku_event_notes LONGTEXT NOT NULL, PRIMARY KEY(id_event)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_address (id_event_address INT AUTO_INCREMENT NOT NULL, ku_id_event INT NOT NULL, ku_id_address INT NOT NULL, PRIMARY KEY(id_event_address)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_custom_field (id_event_custom_field INT AUTO_INCREMENT NOT NULL, ku_id_event INT NOT NULL, ku_id_custom_field INT NOT NULL, PRIMARY KEY(id_event_custom_field)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_email (id_event_email INT AUTO_INCREMENT NOT NULL, ku_id_event INT NOT NULL, ku_id_email INT NOT NULL, PRIMARY KEY(id_event_email)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_group (id_event_group INT AUTO_INCREMENT NOT NULL, ku_event_group_name VARCHAR(100) NOT NULL, PRIMARY KEY(id_event_group)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_group_event (id_event_group_event INT AUTO_INCREMENT NOT NULL, ku_id_event_group INT NOT NULL, ku_id_contact_group INT NOT NULL, PRIMARY KEY(id_event_group_event)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_network (id_event_network INT AUTO_INCREMENT NOT NULL, ku_id_event INT NOT NULL, ku_id_network INT NOT NULL, PRIMARY KEY(id_event_network)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_phone (id_event_phone INT AUTO_INCREMENT NOT NULL, ku_id_event INT NOT NULL, ku_id_phone INT NOT NULL, PRIMARY KEY(id_event_phone)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_event_url (id_event_url INT AUTO_INCREMENT NOT NULL, ku_id_event INT NOT NULL, ku_id_url INT NOT NULL, PRIMARY KEY(id_event_url)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_network (id_network INT AUTO_INCREMENT NOT NULL, ku_network_label VARCHAR(100) NOT NULL, ku_user_name VARCHAR(100) NOT NULL, PRIMARY KEY(id_network)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_phone (id_phone INT AUTO_INCREMENT NOT NULL, ku_phone_label VARCHAR(100) NOT NULL, ku_id_country INT NOT NULL, PRIMARY KEY(id_phone)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_relationship (id_relationship INT AUTO_INCREMENT NOT NULL, ku_relationship_label VARCHAR(100) NOT NULL, ku_relationship_reverse VARCHAR(100) NOT NULL, PRIMARY KEY(id_relationship)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ku_url (id_url INT AUTO_INCREMENT NOT NULL, ku_url_label VARCHAR(100) NOT NULL, PRIMARY KEY(id_url)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ku_address');
        $this->addSql('DROP TABLE ku_anniversary');
        $this->addSql('DROP TABLE ku_contact');
        $this->addSql('DROP TABLE ku_contact_address');
        $this->addSql('DROP TABLE ku_contact_anniversary');
        $this->addSql('DROP TABLE ku_contact_email');
        $this->addSql('DROP TABLE ku_contact_event');
        $this->addSql('DROP TABLE ku_contact_group');
        $this->addSql('DROP TABLE ku_contact_group_contact');
        $this->addSql('DROP TABLE ku_contact_network');
        $this->addSql('DROP TABLE ku_contact_phone');
        $this->addSql('DROP TABLE ku_contact_relationship');
        $this->addSql('DROP TABLE ku_contact_url');
        $this->addSql('DROP TABLE ku_country');
        $this->addSql('DROP TABLE ku_custom_field');
        $this->addSql('DROP TABLE ku_email');
        $this->addSql('DROP TABLE ku_event');
        $this->addSql('DROP TABLE ku_event_address');
        $this->addSql('DROP TABLE ku_event_custom_field');
        $this->addSql('DROP TABLE ku_event_email');
        $this->addSql('DROP TABLE ku_event_group');
        $this->addSql('DROP TABLE ku_event_group_event');
        $this->addSql('DROP TABLE ku_event_network');
        $this->addSql('DROP TABLE ku_event_phone');
        $this->addSql('DROP TABLE ku_event_url');
        $this->addSql('DROP TABLE ku_network');
        $this->addSql('DROP TABLE ku_phone');
        $this->addSql('DROP TABLE ku_relationship');
        $this->addSql('DROP TABLE ku_url');
    }
}
