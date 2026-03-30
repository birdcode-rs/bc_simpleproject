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

    workinginstructions varchar(255) DEFAULT '' NOT NULL,
    workingdatamonday varchar(255) DEFAULT '' NOT NULL,
    workingdatatuesday varchar(255) DEFAULT '' NOT NULL,
    workingdatawednesday varchar(255) DEFAULT '' NOT NULL,
    workingdatathursday varchar(255) DEFAULT '' NOT NULL,
    workingdatafriday varchar(255) DEFAULT '' NOT NULL,
    workingdatasaturday varchar(255) DEFAULT '' NOT NULL,
    workingdatasunday varchar(255) DEFAULT '' NOT NULL,
    workingdatanewyear varchar(255) DEFAULT '' NOT NULL,
    workingdatachristmas varchar(255) DEFAULT '' NOT NULL,
    workingdataeaster varchar(255) DEFAULT '' NOT NULL,

    googleanalyticsid varchar(255) DEFAULT '' NOT NULL,
    googleconfirmationid varchar(255) DEFAULT '' NOT NULL,
 
    projectembededcss text, 
    favicons text,
    PRIMARY KEY (uid)
);
 
#
# Extend Table structure for table 'pages'
#
CREATE TABLE pages (
    exclude_from_sitemap tinyint(4) DEFAULT '0' NOT NULL 
);
 
#
# Extend Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    embededcss TEXT,
    preheader varchar(255) DEFAULT '' NOT NULL,
    preheader_layout int(11) DEFAULT '0' NOT NULL,
    preheader_class varchar(255) DEFAULT '' NOT NULL,
    preheader_position int(11) DEFAULT '0' NOT NULL,
    subheader_layout int(11) DEFAULT '0' NOT NULL,
    subheader_position int(11) DEFAULT '0' NOT NULL,
    subheader_class varchar(255) DEFAULT '' NOT NULL,
    header_class varchar(255) DEFAULT '' NOT NULL
);