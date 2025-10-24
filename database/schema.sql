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
create table Salons(
    SalonNo int auto_increment primary key,
SalonName varchar(100) not null,
Address varchar(100),
ContactNo char(20),
PackageName1 varchar(100),
    Price1 decimal(10,2),
    PackageName2 varchar(100),
Price2 decimal(10,2));
   
    insert into Salons(SalonName,Address,ContactNo,PackageName1,Price1,PackageName2,Price2)Values
    ('Glamour Touch Salon','Nugegoda','077-4598721','Bridal Makeup',25000,'Bridal + Retouch',35000),
    ('Royal Beauty Lounge','Maharagama','070-2298723','Full Package',40000,'Premium Package',55000),
    ('Radiance Bridal Studio','Kirulapana','078-1198744','Makeup Only',20000,'Makeup + Hair Styling',30000),
    ('Lotus Bridal Spa','Homagama','075-5598712','Pre-Wedding Package',15000,'Full Bridal Glow Package',25000);
   
    create table Cakes(
    CShopID int auto_increment primary key,
CShopName varchar(100) not null,
Address varchar(100),
ContactNo char(20),
PackageName1 varchar(100),
    Price1 decimal(10,2),
    PackageName2 varchar(100),
Price2 decimal(10,2));
   
    insert into Cakes(CShopName,Address,ContactNo,PackageName1,Price1,PackageName2,Price2)Values
    ('Classic White Elegance','Nugegoda','077-4598721','3-Tier',30000,'4-Tier',40000),
    ('Chocolate Romance','Homagama','071-8598726','2-Tier',25000,'3-Tier',35000),
    ('Floral Garden Bliss','Kottawa','070-3398711','3-Tier',28000,'4-Tier',38000),
    ('Custom Luxury Cake','Kirulapana','078-5998736','3-Tier',35000,'Customized',50000);
   
