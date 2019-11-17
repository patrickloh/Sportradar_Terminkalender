USE PictureDatabase

DROP TABLE IF EXISTS
SportTBL,
LocationTBL,
BroadcasterTBL,
AssociationTBL,
EventTBL,
DiaryTBL
GO

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
)

---------------------------------------

CREATE TABLE SportTBL
(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Type VARCHAR(255) NOT NULL,
    Description VARCHAR(255)
);

CREATE TABLE assosiationtbl (
    AssosiationID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Description VARCHAR(255),
    _SportID INT,
    FOREIGN KEY (_SportID) REFERENCES sportstbl(SportID)
);

CREATE TABLE eventtbl (
    EventID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    Description VARCHAR(255),
    Pricepool INT,
    _SportID INT,
    FOREIGN KEY (_SportID) REFERENCES sportstbl(SportID)
);

CREATE TABLE diarytbl (
    DiaryID INT AUTO_INCREMENT PRIMARY KEY,
    Date DATE NOT NULL,
    Title VARCHAR(255) NOT NULL,
    Description VARCHAR(255),
    _SportID INT,
    _EventID INT,
    _ParticipantOneID INT,
    _ParticipantTwoID INT,
    FOREIGN KEY (_SportID) REFERENCES sportstbl(SportID),
    FOREIGN KEY (_EventID) REFERENCES eventtbl(EventID),
    FOREIGN KEY (_ParticipantOneID) REFERENCES assosiationtbl(AssosiationID),
    FOREIGN KEY (_ParticipantTwoID) REFERENCES assosiationtbl(AssosiationID)
);