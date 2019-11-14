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