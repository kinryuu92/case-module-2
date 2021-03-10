
-- 1. thông tin phòng
CREATE TABLE tbl_rooms 
(
room_id INT AUTO_INCREMENT PRIMARY KEY,
room_name varchar(255),
status varchar(255),
style varchar(255),
room_rates INT
);

-- 2. Khách hàng
CREATE TABLE tbl_customers
(
customers_id INT AUTO_INCREMENT PRIMARY KEY,
customer_name varchar (255),
address varchar(255),
sex varchar(5),
id_card INT,
phone INT,
nationality varchar(50)
);

-- 3.nhân viên
CREATE TABLE tbl_staffs
(
staff_id INT AUTO_INCREMENT PRIMARY KEY,
staff_name varchar(255),
sex varchar(5),
date_of_birth YEAR,
address varchar(255),
phone INT,
position varchar(255)	
);

-- 4. Hóa đơn
CREATE TABLE tbl_bill 
(
bill_id INT AUTO_INCREMENT PRIMARY KEY,
Date_payments DATE,
staff_id INT,
service_prices INT,
FOREIGN KEY (staff_id) REFERENCES tbl_staffs(staff_id)
);

-- 5.dịch vụ
CREATE TABLE tbl_services 
(
service_id INT AUTO_INCREMENT PRIMARY KEY,
service_name varchar(255),
service_prices INT
);

CREATE TABLE tbl_registration 
(
registration_id INT AUTO_INCREMENT PRIMARY KEY,
staff_id INT,
customers_id INT,
check_in_date DATE,
check_out_date DATE,
room_id INT,
FOREIGN KEY (customers_id) REFERENCES tbl_customers(customers_id),
FOREIGN KEY (staff_id) REFERENCES tbl_staffs(staff_id),
FOREIGN KEY (room_id) REFERENCES tbl_rooms(room_id)
);


	