INSERT INTO
SportTypeTBL (Type, Description)
VALUES
("Esport:CSGO", "Austrian Esport in CounterStrike"),
("Football", "Austrian Football"),
("Eishockey", "Austrian Eishockey"),
("Basketball", "Austrian Basketball");

INSERT INTO
TeamTBL (Name, Description, _FK_SportTypeID)
VALUES
("Astralis", "CounterStrike CS:GO Profi Team", 1),
("FNTC", "CounterStrike CS:GO Profi Team", 1),
("RB Salzburg", "Austrian Football Club", 2),
("Rapid Wien", "Austrian Football Club", 2),
("Vienna Capitals", "Austrian Eishockey Club", 3),
("HC Bozen", "Austrian Eishockey Club", 3),
("Gunners", "Austrian Basketball Club", 4),
("Swans", "Austrian Basketball Club", 4);

INSERT INTO
EventTBL (Name, Description, Pricepool, _FK_SportTypeID)
VALUES
("Berlin Major", "CounterStrike CS:GO Profi Liga", 100000, 1),
("Austrian Football Budesliga", "Austrian Football Club Liga", NULL, 2),
("Austrian Eishockey Liga", "Austrian Eishockey Club Liga", NULL, 3),
("Austrian Basketball Liga", "Austrian Basketball Club Liga", NULL, 4);

INSERT INTO
DiaryTBL (Date, _FK_SportTypeID, _FK_EventID, _FK_ParticipantOneID, _FK_ParticipantTwoID)
VALUES
("2019-11-20 09:45:00", 1, 1, 1, 2);