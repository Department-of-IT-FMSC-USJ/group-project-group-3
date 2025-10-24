create database EternalBlissPlanners;
use EternalBlissPlanners;


create table Hotels (
   HotelNo int auto_increment primary key,
   HotelName varchar(50),
   Address varchar(30),
   Contactno char(10),
   Package01 varchar(50),
   Price01 decimal(10,2),
   Package02 varchar(50),
   Price02 decimal(10,2));
   
insert into Hotels (HotelName, Address, Contactno, Package01, Price01, Package02, Price02) values 
   ('Hotel Royal Palace', 'Nugegoda', '0752245769', '100 Guests', 100000.00, '150 Guests', 200000.00),
   ('Sunset Resort', 'Colombo', '0715643800', '100 Guests', 300000.00, '200 Guests', 400000.00),
   ('Grand Heaven Hotel', 'Maharagama', '0703567843', '100 Guests', 200000.00, '200 Guests', 350000.00),
   ('Hotel Araliya', 'Kirulapana', '0778765007', '150 Guests', 250000.00, '250 Guests', 400000.00);
   
   CREATE TABLE Payment (
    PaymentID INT PRIMARY KEY AUTO_INCREMENT,
    CustomerID INT,
    BookingID INT,
    Amount DECIMAL(10 , 2 ),
    ReferenceNo VARCHAR(50),
    Payment_Date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (BookingID) REFERENCES Booking(BookingID),
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);
