CREATE TABLE USER(
  UserID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  FirstName char(255) NOT NULL,
  LastName char (255) NOT NULL,
  UserName varchar (255) NOT NULL,
  Email varchar(50) NOT NULL,
  Password char NOT NULL,
  Permission char NOT NULL,
  Company varchar(50) NOT NULL

);

CREATE TABLE REQUEST(
  AutoRequestID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  RequestQTY INT,
  UserID INT,
  RequestID INT,
  FlowerID INT,

  CONSTRAINT RequestFK FOREIGN KEY (UserID,FlowerID) references USER,Flower(UserID,FlowerID) ON DELETE CASCADE
);

CREATE TABLE FLOWER(
  FlowerID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  CategoryID INT NOT NULL,
  Color char,
  FlowerName char,
  Quantity INT,
  PRICE INT,
  Picture varbinary (max),
  CONSTRAINT RequestFK FOREIGN KEY (CategoryID) references Category(CategoryID) ON DELETE CASCADE

);

CREATE TABLE Category(
  CategoryID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  FlowerID INT PRIMARY KEY
  references FLower(FlowerId),
  CategoryName varchar(255) NOT NULL

);

CREATE TABLE Invoice(
  Invoiceid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  RquestID INT PRIMARY KEY
  references Request(RequestID),
  Shipped varchar(255),
  Paid char,
  Amount int


);
