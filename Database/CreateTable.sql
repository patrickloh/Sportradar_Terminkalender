USE PictureDatabase

DROP TABLE IF EXISTS
SportTypeTBL,
TeamTBL,
EventTBLn
DiaryTBL
GO

CREATE TABLE SportTypeTBL
(
    SportTypeID INT AUTO_INCREMENT PRIMARY KEY,
    Type VARCHAR(255) NOT NULL,
    Description VARCHAR(255)
);

CREATE TABLE TeamTBL (
    TeamID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Description VARCHAR(255),
    _FK_SportTypeID INT,
    FOREIGN KEY (_FK_SportTypeID) REFERENCES SportTypeTBL(SportTypeID)
);

CREATE TABLE EventTBL (
    EventID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Description VARCHAR(255),
    Pricepool INT,
    _FK_SportTypeID INT,
    FOREIGN KEY (_FK_SportTypeID) REFERENCES SportTypeTBL(SportTypeID)
);

CREATE TABLE CalenderTBL (
    CalenderyID INT AUTO_INCREMENT PRIMARY KEY,
    Date DATE NOT NULL,
    _FK_SportTypeID INT,
    _FK_EventID INT,
    _FK_ParticipantOneID INT,
    _FK_ParticipantTwoID INT,    
    FOREIGN KEY (_FK_SportTypeID) REFERENCES SportTypeTBL(SportTypeID),
    FOREIGN KEY (_FK_EventID) REFERENCES EventTBL(EventID),
    FOREIGN KEY (_FK_ParticipantOneID) REFERENCES TeamTBL(TeamID),
    FOREIGN KEY (_FK_ParticipantTwoID) REFERENCES TeamTBL(TeamID)
);

/*
CREATE TABLE SportTBL
(
    ID INT IDENTITY primary key,
    Type VARCHAR(128) NOT NULL,
    Description VARCHAR(256)
)

CREATE TABLE LocationTBL
(
    ID INT IDENTITY primary key,
    Name VARCHAR(256) NOT NULL, 
    Country VARCHAR(256) NOT NULL,
    Description VARCHAR(256)
)

CREATE TABLE BroadcasterTBL
(
    ID INT IDENTITY primary key,
    Name VARCHAR(256) NOT NULL, 
    Link VARCHAR(256) NOT NULL,
    Description VARCHAR(256)
)

CREATE TABLE AssociationTBL
(
    ID INT IDENTITY primary key,
    Name VARCHAR(256) NOT NULL, 
    Description VARCHAR(256),
    League VARCHAR(256),
    _Sport int foreign key REFERENCES "SportTBL"(ID)
)

CREATE TABLE EventTBL
(
    ID INT IDENTITY primary key,
    Name VARCHAR(256) NOT NULL, 
    Description VARCHAR(256),
    Price int NOT NULL,
    _Sport int foreign key REFERENCES "SportTBL"(ID)
)

CREATE TABLE DiaryTBL
(
    ID INT IDENTITY primary key,
    Title VARCHAR(256) NOT NULL, 
    Date DATE NOT NULL,
    Description VARCHAR(256),
    _PlayerOne int foreign key REFERENCES "AssociationTBL"(ID)
    _PlayerTwo int foreign key REFERENCES "AssociationTBL"(ID)
    _Sport int foreign key REFERENCES "SportTBL"(ID)
    _Location int foreign key REFERENCES "LocationTBL"(ID),
    _Event int foreign key REFERENCES "EventTBL"(ID),
    _Broadcaster int foreign key REFERENCES "BroadcasterTBL"(ID)
)*/