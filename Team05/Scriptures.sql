CREATE TABLE Scriptures(
id SERIAL,
book VARCHAR(40),
chapter INT,
verse INT,
content TEXT,
PRIMARY KEY(id)
);
INSERT INTO Scriptures VALUES('1','John', '1', '5', 'And the alight shineth in bdarkness; and the darkness ccomprehended it not.');
INSERT INTO Scriptures VALUES('2', 'D&C', '88', '49', 'The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.');
INSERT INTO Scriptures VALUES('3', 'D&C', '93', '28', 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.');
INSERT INTO Scriptures VALUES('4', 'Mosiah', '16', '9', 'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death');
