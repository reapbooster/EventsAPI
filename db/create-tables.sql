-- Database export via SQLPro (https://www.sqlprostudio.com/allapps.html)
-- Exported by stovak at 30-05-2021 19:43.
-- WARNING: This file may contain descructive statements such as DROPs.
-- Please ensure that you are running the script at the proper location.


-- BEGIN TABLE dbo.Events
IF OBJECT_ID('dbo.Events', 'U') IS NOT NULL
DROP TABLE dbo.Events;
GO

CREATE TABLE dbo.Events (
	ID int NOT NULL IDENTITY(1,1),
	EventID nvarchar(255) NULL,
	Name nvarchar(255) NULL,
	nameShort nvarchar(250) NULL,
	[Type] nvarchar(255) NULL,
	Description nvarchar(max) NULL,
	titleLogo nvarchar(max) NULL,
	file1 nvarchar(255) NULL,
	file2 nvarchar(255) NULL,
	file3 nvarchar(255) NULL,
	file4 nvarchar(255) NULL,
	doc1 nvarchar(255) NULL,
	doc2 nvarchar(255) NULL,
	doc3 nvarchar(255) NULL,
	doc4 nvarchar(255) NULL,
	MoY int NULL,
	DoM int NULL,
	[Year] int NULL,
	E_Moy int NULL,
	E_Dom int NULL,
	E_Year int NULL,
	etime nvarchar(255) NULL,
	Venue nvarchar(max) NULL,
	Speakers nvarchar(max) NULL,
	HPShow bit NULL,
	MIHPshow bit NULL,
	blurb nvarchar(max) NULL,
	publish bit NULL,
	regdeadMoY int NULL,
	regdeadDoM int NULL,
	regdeadYear int NULL,
	CalDisplay bit NULL,
	Picture nvarchar(255) NULL,
	eventPrice money NULL,
	confirmationEmail nvarchar(max) NULL,
	confirmationWeb nvarchar(max) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL,
	dateEvent datetime NULL,
	splashPage bit NULL,
	splashURL nvarchar(300) NULL,
	dateAsNum int NULL,
	campaignName nvarchar(300) NULL,
	campaignID nvarchar(250) NULL,
	campaignType nvarchar(250) NULL,
	campaignOwner nvarchar(50) NULL,
	campaignTypePublic nvarchar(250) NULL,
	CventID nvarchar(250) NULL
);
GO

ALTER TABLE dbo.Events ADD CONSTRAINT [Events$PrimaryKey] PRIMARY KEY (ID);
GO

-- END TABLE dbo.Events

-- BEGIN TABLE dbo.gcHiltonRooms
IF OBJECT_ID('dbo.gcHiltonRooms', 'U') IS NOT NULL
DROP TABLE dbo.gcHiltonRooms;
GO

CREATE TABLE dbo.gcHiltonRooms (
	room_id int NOT NULL IDENTITY(1,1),
	rName nvarchar(250) NULL,
	schoolhousecap int NULL,
	roundscap int NULL,
	theatercap int NULL,
	hollowSquare int NULL,
	conference int NULL,
	notes nvarchar(max) NULL,
	sortorder int NULL,
	roomGroup nvarchar(50) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL,
	eventType nvarchar(50) NULL,
	lounge int NULL,
	reception int NULL,
	tour int NULL,
	hollowCircle int NULL,
	uShape int NULL,
	boardroom int NULL,
	Capacity int NULL
);
GO

ALTER TABLE dbo.gcHiltonRooms ADD CONSTRAINT [gcHiltonRooms$PrimaryKey] PRIMARY KEY (room_id);
GO

-- END TABLE dbo.gcHiltonRooms

-- BEGIN TABLE dbo.gcroomlinks
IF OBJECT_ID('dbo.gcroomlinks', 'U') IS NOT NULL
DROP TABLE dbo.gcroomlinks;
GO

CREATE TABLE dbo.gcroomlinks (
	id int NOT NULL IDENTITY(1,1),
	panel_id int NULL,
	room_id int NULL,
	[type] nvarchar(250) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL
);
GO

ALTER TABLE dbo.gcroomlinks ADD CONSTRAINT [gcroomlinks$PrimaryKey] PRIMARY KEY (id);
GO

-- END TABLE dbo.gcroomlinks

-- BEGIN TABLE dbo.gcspeakerlinks
IF OBJECT_ID('dbo.gcspeakerlinks', 'U') IS NOT NULL
DROP TABLE dbo.gcspeakerlinks;
GO

CREATE TABLE dbo.gcspeakerlinks (
	id int NOT NULL IDENTITY(1,1),
	panel_id int NULL,
	speaker_id int NULL,
	role nvarchar(50) NULL,
	showfloworder int NULL,
	datecreated datetime NULL,
	datemodified datetime NULL,
	micontactidMod nchar(10) NULL
);
GO

ALTER TABLE dbo.gcspeakerlinks ADD CONSTRAINT [gcspeakerlinks$PrimaryKey] PRIMARY KEY (id);
GO

-- END TABLE dbo.gcspeakerlinks

-- BEGIN TABLE dbo.gctracklinks
IF OBJECT_ID('dbo.gctracklinks', 'U') IS NOT NULL
DROP TABLE dbo.gctracklinks;
GO

CREATE TABLE dbo.gctracklinks (
	id int NOT NULL IDENTITY(1,1),
	panel_id int NULL,
	track_id int NULL,
	role nvarchar(50) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL
);
GO

ALTER TABLE dbo.gctracklinks ADD CONSTRAINT [gctracklinks$PrimaryKey] PRIMARY KEY (id);
GO

-- END TABLE dbo.gctracklinks

-- BEGIN TABLE dbo.gcTracks
IF OBJECT_ID('dbo.gcTracks', 'U') IS NOT NULL
DROP TABLE dbo.gcTracks;
GO

CREATE TABLE dbo.gcTracks (
	track_ID int NOT NULL IDENTITY(1,1),
	trackName nvarchar(250) NULL,
	trackDescription nvarchar(max) NULL,
	event_ID nvarchar(50) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL,
	tracktype nvarchar(250) NULL
);
GO

ALTER TABLE dbo.gcTracks ADD CONSTRAINT [gcTracks$PrimaryKey] PRIMARY KEY (track_ID);
GO

-- END TABLE dbo.gcTracks

-- BEGIN TABLE dbo.panel
IF OBJECT_ID('dbo.panel', 'U') IS NOT NULL
DROP TABLE dbo.panel;
GO

CREATE TABLE dbo.panel (
	ID int NOT NULL IDENTITY(1,1),
	panel nvarchar(max) NULL,
	PID int NULL,
	sess nvarchar(255) NULL,
	Description nvarchar(max) NULL,
	pDate nvarchar(255) NULL,
	pTime nvarchar(50) NULL,
	Pday nvarchar(50) NULL,
	Etime nvarchar(50) NULL,
	epday nvarchar(50) NULL,
	lktxt1 nvarchar(255) NULL,
	link1 nvarchar(255) NULL,
	lktxt2 nvarchar(255) NULL,
	link2 nvarchar(255) NULL,
	lktxt3 nvarchar(255) NULL,
	link3 nvarchar(255) NULL,
	lktxt4 nvarchar(255) NULL,
	link4 nvarchar(255) NULL,
	lktxt5 nvarchar(255) NULL,
	link5 nvarchar(255) NULL,
	lktxt6 nvarchar(255) NULL,
	link6 nvarchar(255) NULL,
	lktxt7 nvarchar(255) NULL,
	link7 nvarchar(255) NULL,
	lktxt8 nvarchar(255) NULL,
	link8 nvarchar(255) NULL,
	lktxt9 nvarchar(255) NULL,
	link9 nvarchar(255) NULL,
	lktxt10 nvarchar(255) NULL,
	link10 nvarchar(255) NULL,
	video bit NULL,
	vdfile1 nvarchar(255) NULL,
	vdfile2 nvarchar(255) NULL,
	vdfile3 nvarchar(255) NULL,
	vdfile4 nvarchar(255) NULL,
	audio bit NULL,
	adfile nvarchar(255) NULL,
	why nvarchar(max) NULL,
	summ nvarchar(max) NULL,
	pic1 nvarchar(255) NULL,
	pic2 nvarchar(255) NULL,
	spons nvarchar(max) NULL,
	slide nvarchar(255) NULL,
	EventID nvarchar(255) NULL,
	EventIDnum int NULL,
	md1 nvarchar(50) NULL,
	md2 nvarchar(50) NULL,
	md3 nvarchar(50) NULL,
	md4 nvarchar(50) NULL,
	md5 nvarchar(50) NULL,
	publish bit NULL,
	private bit NULL,
	paneltxt nvarchar(255) NULL,
	startTimed datetime NULL,
	endTimed datetime NULL,
	paneltypeid int NULL,
	progNotes nvarchar(max) NULL,
	shortTitle nvarchar(250) NULL,
	PanelSeating nvarchar(max) NULL,
	microphones nvarchar(max) NULL,
	assignedRA nvarchar(max) NULL,
	CameraType nvarchar(max) NULL,
	DVDset nvarchar(100) NULL,
	audioRecording nvarchar(100) NULL,
	ppsetup nvarchar(100) NULL,
	stafflinked nvarchar(50) NULL,
	seniorStaff nvarchar(100) NULL,
	deptGroup nchar(100) NULL,
	showflownotes nvarchar(max) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL,
	youTubeURL nvarchar(500) NULL,
	printedProgram int NULL,
	tumblr nvarchar(250) NULL,
	livetweet nvarchar(50) NULL,
	tweeter nvarchar(50) NULL,
	twitterHandle nvarchar(50) NULL,
	shorturl nvarchar(50) NULL,
	hashtags nvarchar(max) NULL,
	commNotes nvarchar(max) NULL,
	itinDescription nvarchar(max) NULL,
	pFinal bit NULL,
	descFinal bit NULL,
	descStatus nvarchar(50) NULL,
	descStatusTS datetime NULL,
	hideDesc bit NULL,
	hideDescSF bit NULL,
	srrTime nvarchar(50) NULL,
	onSreens nvarchar(255) NULL,
	VOG nvarchar(255) NULL,
	onStage nvarchar(255) NULL,
	showTimeline nvarchar(max) NULL,
	showNotes nvarchar(max) NULL,
	AttendeeCount int NULL,
	AttendeePCT numeric(5,2) NULL,
	nonMI bit NULL,
	liveStream bit NULL,
	ZoomID nvarchar(255) NULL,
	ZoomAccount nvarchar(255) NULL,
	WebexID nvarchar(255) NULL,
	WebexAccount nvarchar(255) NULL,
	techProducer nvarchar(255) NULL,
	techProducerBU nvarchar(255) NULL
);
GO

ALTER TABLE dbo.panel ADD CONSTRAINT [panel$PrimaryKey] PRIMARY KEY (ID);
GO

-- END TABLE dbo.panel

-- BEGIN TABLE dbo.speak
IF OBJECT_ID('dbo.speak', 'U') IS NOT NULL
DROP TABLE dbo.speak;
GO

CREATE TABLE dbo.speak (
	SpkrID int NOT NULL IDENTITY(1,1),
	salutation nvarchar(255) NULL,
	SpkrNm nvarchar(200) NULL,
	Mname nvarchar(255) NULL,
	Lname nvarchar(255) NULL,
	suffix nvarchar(50) NULL,
	Description nvarchar(500) NULL,
	BioLink nvarchar(255) NULL,
	BioPic nvarchar(200) NULL,
	BioText nvarchar(max) NULL,
	speakertype nvarchar(50) NULL,
	Status bit NULL,
	PgID int NULL,
	PgTitle nvarchar(50) NULL,
	EventID nvarchar(255) NULL,
	sortorder int NULL,
	cancelled bit NULL,
	rawFileType nvarchar(50) NULL,
	printFileType nvarchar(50) NULL,
	WebFileType nvarchar(50) NULL,
	notes nvarchar(max) NULL,
	datecreated datetime NULL,
	datemodified datetime NULL,
	createdbyID int NULL,
	modifiedbyID int NULL,
	ipnum nvarchar(255) NULL,
	attendeeID int NULL,
	ContactID int NULL,
	panelID int NULL,
	whoSuggested nvarchar(250) NULL,
	whoEntered nvarchar(250) NULL,
	dateSuggested datetime NULL,
	recBio bit NULL,
	recBioDate datetime NULL,
	recPhoto bit NULL,
	recPhotoDate datetime NULL,
	recWaiver bit NULL,
	recWaiverDate datetime NULL,
	spkEmail nvarchar(250) NULL,
	twitter nvarchar(300) NULL,
	twitter2 nvarchar(300) NULL,
	twitterNotes nvarchar(max) NULL,
	invitationextend nvarchar(50) NULL,
	invitationWhom nvarchar(50) NULL,
	spideremaildate nvarchar(50) NULL,
	whoconfirmed nchar(10) NULL,
	city nvarchar(50) NULL,
	developmentPriority int NULL,
	speakerRole nvarchar(250) NULL,
	speakerTopics nvarchar(max) NULL,
	primaryTrack nchar(10) NULL,
	secondaryTrack nchar(10) NULL,
	topicNotes nvarchar(max) NULL,
	connections nvarchar(max) NULL,
	devRelationship bit NULL,
	devRelationContact nvarchar(200) NULL,
	womensreport bit NULL,
	location nvarchar(250) NULL,
	photoModDate datetime NULL,
	displayChinese bit NULL,
	devOrganization nvarchar(255) NULL,
	roleChangeDate datetime NULL,
	cVentID nvarchar(100) NULL,
	phoneticName nvarchar(250) NULL,
	needsfinaledit nchar(10) NULL,
	ScheduleNotes nvarchar(max) NULL,
	ShowFlowNotes nvarchar(max) NULL,
	linkedin nvarchar(300) NULL,
	speakerLiaison nvarchar(250) NULL,
	Facebook nvarchar(300) NULL,
	FacebookFollowers nvarchar(50) NULL,
	salesForceID nvarchar(250) NULL,
	instaGram nvarchar(250) NULL
);
GO

ALTER TABLE dbo.speak ADD CONSTRAINT [speak$PrimaryKey] PRIMARY KEY (SpkrID);
GO

-- END TABLE dbo.speak

set IDENTITY_INSERT Events on;

SET
    IDENTITY_INSERT gcroomlinks ON;
SET
    IDENTITY_INSERT gcspeakerlinks ON;

SET
    IDENTITY_INSERT gcspeakerlinks ON;

SET
    IDENTITY_INSERT gctracklinks ON;

SET
    IDENTITY_INSERT gcTracks ON;

SET
    IDENTITY_INSERT panel ON;

SET
    IDENTITY_INSERT speak ON;

set IDENTITY_INSERT gcHiltonRooms on;

go