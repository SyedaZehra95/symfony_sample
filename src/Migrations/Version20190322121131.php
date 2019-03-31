<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190322121131 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE unattended_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE unattended (id INT NOT NULL, zone VARCHAR(20) DEFAULT NULL, image_base TEXT DEFAULT NULL, yob INT DEFAULT NULL, gender VARCHAR(30) DEFAULT NULL, ethnicity VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id))');
       
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE unattended_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE cases_idx_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE visits_visitid_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE recvideoprojects_projectid_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE recvideourls_urlid_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE recvideoscenes_sceneid_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cases (caseid TEXT NOT NULL, serial INT DEFAULT NULL, starttime TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, casetype INT DEFAULT 0, under18 INT DEFAULT NULL, name TEXT DEFAULT NULL, idx BIGSERIAL NOT NULL, endtime TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, age DOUBLE PRECISION DEFAULT NULL, authdate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, authsig TEXT DEFAULT NULL, pid TEXT DEFAULT NULL, under21 INT DEFAULT NULL, isappearance INT DEFAULT 0, gallery TEXT DEFAULT NULL, wearsglasses INT DEFAULT NULL, binauthdate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, gender TEXT DEFAULT NULL, quality DOUBLE PRECISION DEFAULT NULL, authname TEXT DEFAULT NULL, poseangle DOUBLE PRECISION DEFAULT NULL, tintedglasses INT DEFAULT NULL, glasses DOUBLE PRECISION DEFAULT NULL, state TEXT DEFAULT NULL, userdefined TEXT DEFAULT NULL, ethnicity TEXT DEFAULT NULL, issuer TEXT DEFAULT NULL, recordid TEXT DEFAULT NULL, cameraid TEXT DEFAULT NULL, duration INT DEFAULT NULL, recvideosceneid BIGINT DEFAULT 0, PRIMARY KEY(caseid))');
        $this->addSql('CREATE UNIQUE INDEX u_cases_rid ON cases (recordid)');
        $this->addSql('CREATE UNIQUE INDEX u_cases_idx ON cases (idx)');
        $this->addSql('CREATE INDEX i_cases_cameraid ON cases (cameraid)');
        $this->addSql('CREATE INDEX i_cases_pid ON cases (pid)');
        $this->addSql('CREATE INDEX i_cases_endtime ON cases (endtime)');
        $this->addSql('CREATE INDEX i_cases_rid ON cases (recordid)');
        $this->addSql('CREATE INDEX i_cases_gallery ON cases (gallery)');
        $this->addSql('CREATE INDEX i_cases_starttime ON cases (starttime)');
        $this->addSql('CREATE TABLE casethumbnails (caseid TEXT NOT NULL, mouthx DOUBLE PRECISION DEFAULT NULL, offsety DOUBLE PRECISION DEFAULT NULL, eyerx DOUBLE PRECISION DEFAULT NULL, offsetx DOUBLE PRECISION DEFAULT NULL, eyely DOUBLE PRECISION DEFAULT NULL, thumbnailref TEXT DEFAULT NULL, serial INT DEFAULT NULL, eyelx DOUBLE PRECISION DEFAULT NULL, nasionx DOUBLE PRECISION DEFAULT NULL, thumbnail BYTEA DEFAULT NULL, capturetime TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, nasiony DOUBLE PRECISION DEFAULT NULL, nosetipx DOUBLE PRECISION DEFAULT NULL, eyery DOUBLE PRECISION DEFAULT NULL, nosetipy DOUBLE PRECISION DEFAULT NULL, mouthy DOUBLE PRECISION DEFAULT NULL, issuer TEXT DEFAULT NULL, recordid TEXT DEFAULT NULL, PRIMARY KEY(caseid))');
        $this->addSql('CREATE INDEX i_casethumbnails_rid ON casethumbnails (recordid)');
        $this->addSql('CREATE UNIQUE INDEX u_casethumbnails_rid ON casethumbnails (recordid)');
        $this->addSql('CREATE INDEX i_casethumbnails_caseid ON casethumbnails (caseid)');
        $this->addSql('CREATE TABLE enrollmentresults (firgeneration INT DEFAULT NULL, enrollmenttime TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, jobid TEXT DEFAULT NULL, caseid TEXT DEFAULT NULL, imageevaluation INT DEFAULT NULL, imagerecordid TEXT DEFAULT NULL)');
        $this->addSql('CREATE TABLE firs (caseid TEXT DEFAULT NULL, threshold DOUBLE PRECISION DEFAULT NULL, serial INT DEFAULT NULL, fir BYTEA DEFAULT NULL, binval BYTEA DEFAULT NULL, recordid TEXT DEFAULT NULL, issuer TEXT DEFAULT NULL, bindate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, pfddate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, firref TEXT DEFAULT NULL, gallery TEXT DEFAULT NULL, duration INT DEFAULT NULL, signature TEXT DEFAULT NULL, quality DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('CREATE INDEX ci_firs_is ON firs (issuer, serial)');
        $this->addSql('CREATE UNIQUE INDEX u_firs_cid ON firs (caseid)');
        $this->addSql('CREATE INDEX i_firs_cid ON firs (caseid)');
        $this->addSql('CREATE UNIQUE INDEX u_firs_rid ON firs (recordid)');
        $this->addSql('CREATE INDEX i_firs_rid ON firs (recordid)');
        $this->addSql('CREATE TABLE images (caseid TEXT DEFAULT NULL, source TEXT DEFAULT NULL, recorddate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, eyerx DOUBLE PRECISION DEFAULT NULL, eyeconfidence DOUBLE PRECISION DEFAULT NULL, eyery DOUBLE PRECISION DEFAULT NULL, img BYTEA DEFAULT NULL, issuer TEXT DEFAULT NULL, recordid TEXT DEFAULT NULL, trackingid TEXT DEFAULT NULL, eyely DOUBLE PRECISION DEFAULT NULL, serial INT DEFAULT NULL, imgref TEXT DEFAULT NULL, eyelx DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('CREATE INDEX i_images_trackingid ON images (trackingid)');
        $this->addSql('CREATE UNIQUE INDEX u_images_rid ON images (recordid)');
        $this->addSql('CREATE INDEX i_images_rid ON images (recordid)');
        $this->addSql('CREATE INDEX i_images_cid ON images (caseid)');
        $this->addSql('CREATE TABLE enrollmentcases (caseid TEXT NOT NULL, authdate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, firpid TEXT DEFAULT NULL, binauthdate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, fircaseid TEXT DEFAULT NULL, authsig TEXT DEFAULT NULL, bindate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, pfddate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(caseid))');
        $this->addSql('CREATE TABLE identificationprobes (probeid TEXT NOT NULL, imgref TEXT DEFAULT NULL, fir BYTEA DEFAULT NULL, img BYTEA DEFAULT NULL, PRIMARY KEY(probeid))');
        $this->addSql('CREATE TABLE identificationresults (galleryid TEXT DEFAULT NULL, probeid TEXT DEFAULT NULL, rank INT DEFAULT NULL, score DOUBLE PRECISION DEFAULT NULL, jobid TEXT DEFAULT NULL)');
        $this->addSql('CREATE TABLE crossidentificationcases (probeid TEXT DEFAULT NULL)');
        $this->addSql('CREATE INDEX i_cic_p ON crossidentificationcases (probeid)');
        $this->addSql('CREATE TABLE crossidentificationprocessed (probeid TEXT DEFAULT NULL)');
        $this->addSql('CREATE INDEX i_cip_probeid ON crossidentificationprocessed (probeid)');
        $this->addSql('CREATE TABLE crossidentificationresults (jobid TEXT DEFAULT NULL, score DOUBLE PRECISION DEFAULT NULL, rank INT DEFAULT NULL, probeid TEXT DEFAULT NULL, galleryid TEXT DEFAULT NULL)');
        $this->addSql('CREATE TABLE matesidentificationcases (probeid TEXT DEFAULT NULL)');
        $this->addSql('CREATE INDEX i_mic_probeid ON matesidentificationcases (probeid)');
        $this->addSql('CREATE TABLE matesidentificationprocessed (probeid TEXT DEFAULT NULL)');
        $this->addSql('CREATE INDEX i_mip_probeid ON matesidentificationprocessed (probeid)');
        $this->addSql('CREATE TABLE matesidentificationresults (galleryid TEXT DEFAULT NULL, rank INT DEFAULT NULL, probeid TEXT DEFAULT NULL, score DOUBLE PRECISION DEFAULT NULL, jobid TEXT DEFAULT NULL)');
        $this->addSql('CREATE TABLE repself (replicaid TEXT DEFAULT NULL)');
        $this->addSql('CREATE TABLE reptv (serial INT DEFAULT NULL, replicaid TEXT DEFAULT NULL)');
        $this->addSql('CREATE TABLE repdeleted (tablename TEXT DEFAULT NULL, serial INT DEFAULT NULL, recordid TEXT DEFAULT NULL, issuer TEXT DEFAULT NULL)');
        $this->addSql('CREATE INDEX ci_repdeleted_tis ON repdeleted (tablename, issuer, serial)');
        $this->addSql('CREATE TABLE charactthresholds (ismale DOUBLE PRECISION DEFAULT NULL, minskincolourratio DOUBLE PRECISION DEFAULT NULL, wearsglasses DOUBLE PRECISION DEFAULT NULL, tintedglasses DOUBLE PRECISION DEFAULT NULL)');
        $this->addSql('CREATE TABLE persons (personid TEXT NOT NULL, yearofbirth INT DEFAULT NULL, gender TEXT DEFAULT NULL, ethnicity TEXT DEFAULT NULL, PRIMARY KEY(personid))');
        $this->addSql('CREATE TABLE visits (visitid BIGSERIAL NOT NULL, personid TEXT DEFAULT NULL, zoneid TEXT DEFAULT NULL, starttime TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, endtime TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, state TEXT DEFAULT NULL, PRIMARY KEY(visitid))');
        $this->addSql('CREATE INDEX i_visits_personid ON visits (personid)');
        $this->addSql('CREATE INDEX i_visits_personid_zoneid ON visits (personid, zoneid)');
        $this->addSql('CREATE TABLE appearancesinvisits (appearanceidx BIGINT NOT NULL, visitid BIGINT NOT NULL, appearanceserial BIGINT DEFAULT NULL, cameraid TEXT DEFAULT NULL, PRIMARY KEY(appearanceidx, visitid))');
        $this->addSql('CREATE INDEX i_appearancesinvisits_visitid ON appearancesinvisits (visitid)');
        $this->addSql('CREATE TABLE vssyncstatus (confname VARCHAR(255) NOT NULL, instancename VARCHAR(255) DEFAULT NULL, serial BIGINT NOT NULL, gaps TEXT DEFAULT NULL, PRIMARY KEY(confname))');
        $this->addSql('CREATE TABLE gallerycasematches (gallerycaseidx BIGINT NOT NULL, personid TEXT NOT NULL, gallerycaseserial BIGINT DEFAULT NULL, galleryid TEXT DEFAULT NULL, PRIMARY KEY(gallerycaseidx, personid))');
        $this->addSql('CREATE INDEX i_gallerycasematches_gallerycaseidx_personid ON gallerycasematches (gallerycaseidx, personid)');
        $this->addSql('CREATE INDEX i_gallerycasematches_personid ON gallerycasematches (personid)');
        $this->addSql('CREATE TABLE appearancesingallerycasematches (gallerycaseidx BIGINT NOT NULL, personid TEXT NOT NULL, appearanceidx BIGINT NOT NULL, appearanceserial BIGINT DEFAULT NULL, cameraid TEXT DEFAULT NULL, score DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(gallerycaseidx, personid, appearanceidx))');
        $this->addSql('CREATE INDEX i_appearancesingallerycasematches_gallerycaseidx_personid ON appearancesingallerycasematches (gallerycaseidx, personid)');
        $this->addSql('CREATE TABLE spareappearances (appearanceidx BIGINT NOT NULL, appearanceserial BIGINT NOT NULL, cameraid TEXT NOT NULL, personid TEXT NOT NULL, PRIMARY KEY(appearanceidx))');
        $this->addSql('CREATE INDEX i_spareappearances_cameraid_personid ON spareappearances (cameraid, personid)');
        $this->addSql('CREATE INDEX i_spareappearances_personid ON spareappearances (personid)');
        $this->addSql('CREATE TABLE recvideoprojects (projectid SERIAL NOT NULL, creationdate TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, zoneid VARCHAR(255) DEFAULT NULL, zonevisitexpirationtime INT DEFAULT NULL, defaultscenestart TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, author VARCHAR(255) DEFAULT NULL, PRIMARY KEY(projectid))');
        $this->addSql('CREATE TABLE recvideourls (urlid SERIAL NOT NULL, projectid BIGINT DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(urlid))');
        $this->addSql('CREATE INDEX IDX_D398A3FCF9174455 ON recvideourls (projectid)');
        $this->addSql('CREATE TABLE recvideoscenes (sceneid SERIAL NOT NULL, urlid BIGINT DEFAULT NULL, zoneid VARCHAR(255) DEFAULT NULL, relstartpos BIGINT DEFAULT NULL, relendpos BIGINT DEFAULT NULL, absstartpos TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, tobeprocessed INT DEFAULT NULL, processingdone INT DEFAULT NULL, lasterror TEXT DEFAULT \'\' NOT NULL, PRIMARY KEY(sceneid))');
        $this->addSql('CREATE INDEX IDX_85A60066890BB75E ON recvideoscenes (urlid)');
        $this->addSql('CREATE TABLE zones (zoneid VARCHAR(255) NOT NULL, displayname VARCHAR(255) DEFAULT NULL, visitexpirationtime INT NOT NULL, PRIMARY KEY(zoneid))');
        $this->addSql('CREATE TABLE galleries (galleryid VARCHAR(255) NOT NULL, displayname VARCHAR(255) DEFAULT NULL, matchthreshold DOUBLE PRECISION NOT NULL, active INT DEFAULT NULL, PRIMARY KEY(galleryid))');
        $this->addSql('ALTER TABLE casethumbnails ADD CONSTRAINT r_casethumbnails_caseid FOREIGN KEY (caseid) REFERENCES cases (caseid) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE firs ADD CONSTRAINT r_firs_cid FOREIGN KEY (caseid) REFERENCES cases (caseid) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT r_images_cid FOREIGN KEY (caseid) REFERENCES cases (caseid) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE recvideourls ADD CONSTRAINT r_recvideourls_projectid FOREIGN KEY (projectid) REFERENCES recvideoprojects (projectid) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE recvideoscenes ADD CONSTRAINT r_recvideoscenes_urlid FOREIGN KEY (urlid) REFERENCES recvideourls (urlid) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE unattended');
    }
}
