#
# Add SQL definition of database tables
#
CREATE TABLE tx_bcsimpleproject_domain_model_t3projectdetails (
    uid int(11) NOT NULL auto_increment,
    rootpage varchar(255) DEFAULT '' NOT NULL, 
    logo int(11) DEFAULT '0' NOT NULL,
    logotitle varchar(255) DEFAULT '' NOT NULL,
    logodimensions varchar(255) DEFAULT '' NOT NULL,
    footerlogo int(11) DEFAULT '0' NOT NULL,
    footerlogodimensions varchar(255) DEFAULT '' NOT NULL,
    footernote varchar(255) DEFAULT '' NOT NULL, 
    footercopytext varchar(255) DEFAULT '' NOT NULL, 
    email varchar(255) DEFAULT '' NOT NULL, 
    emaillabel varchar(255) DEFAULT '' NOT NULL, 
    phone varchar(255) DEFAULT '' NOT NULL, 
    phonelabel varchar(255) DEFAULT '' NOT NULL, 
    address varchar(255) DEFAULT '' NOT NULL, 
    addresslong text, 
    googlemapurl text, 
    googlemapembededurl text, 	
    linkedinurl varchar(255) DEFAULT '' NOT NULL,
    xurl varchar(255) DEFAULT '' NOT NULL, 
    facebookurl varchar(255) DEFAULT '' NOT NULL, 
    instagramurl varchar(255) DEFAULT '' NOT NULL,
    tiktokurl varchar(255) DEFAULT '' NOT NULL,
    discordurl varchar(255) DEFAULT '' NOT NULL,
    youtubeurl varchar(255) DEFAULT '' NOT NULL,
    githuburl varchar(255) DEFAULT '' NOT NULL,

    projectembededcss text,
    favicons text,
    PRIMARY KEY (uid)
);

#
# Table structure for table 'tt_content'
#
ALTER TABLE tt_content ADD embededcss TEXT;