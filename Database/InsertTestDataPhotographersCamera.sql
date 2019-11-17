INSERT INTO
SportTBL (Type, Description)
VALUES
("Esport", "CounterStrike CS:GO"),
("Football", "Austrian Football"),
("Basketball", "Austrian Basketball");

INSERT INTO
assosiationtbl (Name, Description, _SportID)
VALUES
("Astralis", "CounterStrike CS:GO Profi Team" , 1),
("RB Salzburg", "Austrian Football Club", 2),
("Gunners", "Austrian Basketball Club", 3),
("FNTC", "CounterStrike CS:GO Profi Team" , 1),
("Rapid Wien", "Austrian Football Club", 2),
("Swans", "Austrian Basketball Club", 3);

INSERT INTO
eventtbl (Name, Description, Pricepool, _SportID)
VALUES
("Berlin Major", "CounterStrike CS:GO Profi Liga", 100000, 1),
("Austrian Football Budesliga", "Austrian Football Club Liga", 0, 2),
("Austrian Basketball Budesliga", "Austrian Basketball Club Liga", 0, 3);

INSERT INTO
diarytbl (Date, Title, Description, _SportID, _EventID, _ParticipantOneID, _ParticipantTwoID)
VALUES
("2019-11-20 09:45:00", "", "", 1, 1, 1, 4);