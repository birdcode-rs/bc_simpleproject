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
    snapchaturl varchar(255) DEFAULT '' NOT NULL,
    xingurl varchar(255) DEFAULT '' NOT NULL,

    projectembededcss text,
    favicons text,
    PRIMARY KEY (uid)
);
 
#
# Extend Table structure for table 'pages'
#
ALTER TABLE pages ADD exclude_from_sitemap tinyint(4) DEFAULT '0' NOT NULL;
 
#
# Extend Table structure for table 'tt_content'
#
ALTER TABLE tt_content ADD embededcss TEXT;
ALTER TABLE tt_content ADD preheader varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE tt_content ADD preheader_layout int(11) DEFAULT '0' NOT NULL;
ALTER TABLE tt_content ADD preheader_class varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE tt_content ADD preheader_position int(11) DEFAULT '0' NOT NULL;
ALTER TABLE tt_content ADD subheader_layout int(11) DEFAULT '0' NOT NULL;
ALTER TABLE tt_content ADD subheader_position int(11) DEFAULT '0' NOT NULL;
ALTER TABLE tt_content ADD subheader_class varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE tt_content ADD header_class varchar(255) DEFAULT '' NOT NULL;