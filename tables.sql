CREATE TABLE Admin(
    admin_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    admin_uname VARCHAR(20) NOT NULL,
    admin_email VARCHAR(50) NOT NULL,
    admin_pwd VARCHAR(100) NOT NULL
);

CREATE TABLE Passenger_profile (
  passenger_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  mobile INT NOT NULL,
  dob DATETIME NOT NULL,
  f_name VARCHAR(20),
  m_name VARCHAR(20),
  l_name VARCHAR(20),
  FOREIGN KEY(user_id) REFERENCES Users(user_id)
);

CREATE TABLE PAYMENT (
  card_no INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  card_type VARCHAR(15) ,
  expire_date DATETIME ,
  amount INT NOT NULL,
  FOREIGN KEY(user_id) REFERENCES Users(user_id)
);

CREATE TABLE Flight (
  flight_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  admin_id INT NOT NULL,
  arrivale DATETIME NOT NULL,
  departure DATETIME NOT NULL,
  Destination VARCHAR(20) NOT NULL,
  source VARCHAR(20) NOT NULL,
  airline VARCHAR(20) NOT NULL,
  Seats INT NOT NULL,
  duration VARCHAR(20) NOT NULL,
  Price INT NOT NULL,
  status VARCHAR(6),
  issue VARCHAR(50),
  FOREIGN KEY(admin_id) REFERENCES Admin(admin_id)
);

CREATE TABLE Ticket (
  ticket_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  passenger_id INT NOT NULL,
  flight_id INT NOT NULL,
  seat_no VARCHAR(10) NOT NULL,
  cost INT NOT NULL,
  class VARCHAR(3) NOT NULL,
  FOREIGN KEY(flight_id) REFERENCES Flight(flight_id),
  FOREIGN KEY(passenger_id) REFERENCES Passenger_profile(passenger_id)
);

CREATE TABLE Airline (
  airline_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  seats INT NOT NULL
);