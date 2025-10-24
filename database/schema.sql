create database EternalBlissPlanners;
use EternalBlissPlanners;


CREATE TABLE Customer (
    CustomerID INT AUTO_INCREMENT PRIMARY KEY,
    UserName varchar(100),
    Email VARCHAR(100),
    User_Password VARCHAR(50)
    );
    

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

create table photography (
   StudioId int auto_increment primary key,
   CustomerID INT,
   StudioName varchar(50),
   location varchar(50),
   Contactno char(10),
   Price01 decimal(10,2)
   );
    
insert into photography (StudioName, location, Contactno,  Price01 )
   values 
   ('Jhethro Studio', 'Maharagama', '0712345678',  130000.00),
   ('Sithuwam Studio', 'Nugegoda', '0764543802', 160000.00),
   ('PixelCraft Studio', 'Kirulapana', '0725643330', 145000.00),
   ('Studio Vision', 'Wijerama', '0713943300',  110000.00);
    
create table decorations (
   DShopId int auto_increment primary key,
   CustomerID INT,
   DShopName varchar(50),
   location varchar(50),
   Contactno char(10),
   Price01 decimal(10,2),
   Price02 decimal(10,2)
  );
    
insert into decorations ( DShopName, location, Contactno,  Price01, Price02 )
   values 
   ('Lassana Flora', 'nugegoda', '0714456658',  100000.00, 80000.00),
   ('Lumos Events', 'maharagama','0765345608', 120000.00, 90000.00),
   ('KOLIN’s ', 'kirulapana', '0714566367', 125000.00, 85000.00),
   ('90F Weddings', 'Wijerama', '0714456658', 95000.00, 75000.00);