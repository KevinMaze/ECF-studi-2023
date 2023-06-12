CREATE DATABASE VincentParrotCars

CREATE TABLE cars (
  'id' int(11) not null AUTO_INCREMENT,
  'Name' varchar(50) NOT NULL,
  'Price' int(10000) NOT NULL,
  'image' varchar(100) DEFAULT NULL,
  'mileage' int(100000) NOT NULL
)