CREATE TABLE Author (

  AuthorID int NOT NULL AUTO_INCREMENT,
  AuthorName VARCHAR(45),
  Gender VARCHAR(45) NOT NULL,
  BirthDate DATE NOT NULL,
  Biography VARCHAR(3000) NOT NULL,
  Country VARCHAR(45) NOT NULL,
  Image VARCHAR(150) NOT NULL,
  PRIMARY KEY (AuthorID)
  );



CREATE TABLE Literaturework (

  LiteratureworkID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  LiteratureworkTittle VARCHAR(45),
  AuthorID int NOT NULL, 
  AuthorName VARCHAR(45) NOT NULL,
  CategoryID int NOT NULL,
  CategoryTittle VARCHAR(45) NOT NULL,
  Content TEXT(65535) NOT NULL,
  HistoryOfWriting VARCHAR(3000) NOT NULL,
  Genre VARCHAR(3000) NOT NULL,
  Composition VARCHAR(3000) NOT NULL,
  Maincharacters VARCHAR(3000) NOT NULL,
  theme VARCHAR(3000) NOT NULL,
  Image VARCHAR(150) NOT NULL,
  FOREIGN KEY (CategoryID) REFERENCES Category(CategoryID), 
  FOREIGN KEY (AuthorID) REFERENCES Author (AuthorID)
  );
  
CREATE TABLE Category (
  CategoryID int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  CategoryTittle VARCHAR(45)
 
);
