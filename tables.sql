CREATE TABLE Admin(
    admin_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    admin_uname VARCHAR(20) NOT NULL,
    admin_email VARCHAR(50) NOT NULL,
    admin_pwd VARCHAR(100) NOT NULL
);
CREATE TABLE Users(
    user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL 
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
  last_seat VARCHAR(5) DEFAULT '',
  bus_seats INT DEFAULT 20,
  last_bus_seat VARCHAR(5) DEFAULT '',
  FOREIGN KEY(admin_id) REFERENCES Admin(admin_id)
);

CREATE TABLE Passenger_profile (
  passenger_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  flight_id INT NOT NULL,
  mobile INT NOT NULL,
  dob DATETIME NOT NULL,
  f_name VARCHAR(20),
  m_name VARCHAR(20),
  l_name VARCHAR(20),
  FOREIGN KEY(user_id) REFERENCES Users(user_id),
  FOREIGN KEY(flight_id) REFERENCES Flight(flight_id)
);

CREATE TABLE PAYMENT (
  card_no INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
  user_id INT NOT NULL,
  flight_id INT NOT NULL,
  expire_date VARCHAR(5) ,
  amount INT NOT NULL,
  FOREIGN KEY(user_id) REFERENCES Users(user_id),
  FOREIGN KEY(flight_id) REFERENCES Flight(flight_id)
);

CREATE TABLE Ticket (
  ticket_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  passenger_id INT NOT NULL,
  flight_id INT NOT NULL,
  user_id INT NOT NULL,
  seat_no VARCHAR(10) NOT NULL,
  cost INT NOT NULL,
  class VARCHAR(3) NOT NULL,
  FOREIGN KEY(user_id) REFERENCES Users(user_id),
  FOREIGN KEY(flight_id) REFERENCES Flight(flight_id),
  FOREIGN KEY(passenger_id) REFERENCES Passenger_profile(passenger_id)
);

CREATE TABLE Airline (
  airline_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(20) NOT NULL,
  seats INT NOT NULL
);

CREATE TABLE Cities (
  city VARCHAR(20) NOT NULL
);