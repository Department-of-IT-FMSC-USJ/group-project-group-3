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
<<<<<<< HEAD

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
=======
create table GroomDresses (
   GshopID int auto_increment primary key,
   ShopName varchar(50),
   Address varchar(20),
   Contactno char(10),
   Package01 varchar(50),
   Price01 decimal(10,2),
   Package02 varchar(50),
   Price02 decimal(10,2));
   
   
insert into GroomDresses (ShopName, Address, Contactno, Package01, Price01, Package02, Price02) values 
   ('Elegent Suit House', 'Colombo 05', '0714598721', 'Classic Suit', 35000.00, 'Custom Tuxedo', 55000.00),
   ('Royal Attire Studio', 'Maharagama', '0703398712', 'Traditional Outfit', 40000.00, 'Full Kandyan Set', 65000.00),
   ('Dapper Men Studio', 'Nugegoda', '0782298745', 'Suit Only', 28000.00, 'Complete Groom Set', 45000.00),
   ('The Gentlemen Wardrobe', 'Homagama', '0755598712', 'Standard Suit', 32000.00, 'Luxury Tailor-Made', 50000.00);
   
   create table jewelery(
  shopid INT PRIMARY KEY AUTO_INCREMENT,
  shopname VARCHAR(100) NOT NULL,
  address VARCHAR(255) NOT NULL,
  package VARCHAR(100) NOT NULL,
  price decimal(10,2),
  contactno char(10)
);
INSERT INTO jewelery (shopname, address, package, price, contactno)
VALUES
('Vogue', 'Colombo-2', 'Set of 2', 45000.00,'0712345678'),
('Diamond World', 'Maharagama', 'Set of 2', 40000.00,'0706547892'),
('Red Rose', 'Hettiweediya', 'Set of 2', 65000.00,'0759867541'),
('Gade World', 'Colombo-7', 'Customized Set', 70000.00,'0704325124');

create table bridaldress(
  BshopID INT PRIMARY KEY AUTO_INCREMENT,
  dressname VARCHAR(100) NOT NULL,
  shopname VARCHAR(100) NOT NULL,
  address VARCHAR(255) NOT NULL,
  contactno VARCHAR(20) NOT NULL,
  price DECIMAL(10, 2) NOT NULL
);

INSERT INTO bridaldress (dressname, shopname, address, contactno, price)
 VALUES
('Ivory Lace Gown', 'Elegant Bridal Shop', 'Colombo', '077-1234567', 75000),
('Modern Mermaid Dress', 'Bridal Boutique', 'Colombo', '071-9876543', 85000),
('Romantic Tulle Dress', 'Dream Bridal Studio', 'Colombo', '070-4567890', 65000),
('Vintage Ballgown', 'Royal Bridal Collection', 'Colombo', '078-2345678', 90000),
('Kandian Bride Dress', 'Kandian Heritage Shop', 'Colombo', '075-6789012', 120000);

>>>>>>> cc3ce8bc852b619cbcbdc992650b8cc4faeac810
