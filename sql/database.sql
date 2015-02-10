------------------
--
--	This SQL file is a seed to set up a database for running a 
--	so-called "Chinese Auction."
--
--	Supporters buy tickets packages and then can put tickets into
--	prize packages for the auction.
--
--	See the comments above each table for details.
--	
------------------

-- Create a database
CREATE DATABASE IF NOT EXISTS AUCS;

-- Each record constructs a phone number.
CREATE TABLE PHONE (
	number_id int NOT NULL AUTO_INCREMENT,
	country_code varchar(3),
	area_code varchar(3),
	digits varchar(10),	-- US Only
	extension varchar(10),
	PRIMARY KEY(number_id)
)

-- Each record constructs an address.
CREATE TABLE ADDRESS (
	address_id int NOT NULL AUTO_INCREMENT,
	street_number varchar(10),
	street_name varchar(50),
	apartment_or_suite varchar(10),
	city varchar(50),
	state varchar(2),
	ZIP varchar(10),
	PRIMARY KEY(address_id)
)

-- Users have names, emails, passwords, and references phones and addresses.
CREATE TABLE USER (
	user_id int NOT NULL AUTO_INCREMENT,
	created datetime default CURRENT_TIMESTAMP,
	email_address varchar(255),
	first_name varchar(255),
	last_name varchar(255),
	token_or_password varchar(255),
	phone_number_id int,
	address_id int,
	PRIMARY KEY(user_id),
	FOREIGN KEY(phone_number_id) REFERENCES PHONE(number_id),
	FOREIGN KEY(address_id) REFERENCES ADDRESS(address_id)
)

-- Organizers are special admin users.
CREATE TABLE ORGANIZER (
	organizer_id int NOT NULL AUTO_INCREMENT,
	user_id int NOT NULL, 
	PRIMARY KEY(organizer_id),
	FOREIGN KEY user_id REFERENCES USER(user_id)
)

-- A prize package is a collection of prizes that users can "put in for."
CREATE TABLE PRIZE_PACKAGE (
	prize_package_id int NOT NULL AUTO_INCREMENT,
	package_name varchar(200),
	package_price_in_dollars(3),
	PRIMARY KEY(prize_package_id)
)

-- Prizes live in a prize package.
CREATE TABLE PRIZE (
	prize_id int NOT NULL AUTO_INCREMENT,
	prize_name varchar(255) NOT NULL,
	prize_description varchar(4000),
	sponsor_id,
	package_id,
	PRIMARY KEY(prize_id),
	FOREIGN KEY sponsor_id REFERENCES SPONSOR(sponsor_id),
	FOREIGN KEY package_id REFERENCES PRIZE_PACKAGE(prize_package_id)
)

-- Ticket packages allow the user to buy extra tickets for less money.
-- For example, give $75 worth of tickets for paying only $50.
CREATE TABLE TICKET_PACKAGE (
	ticket_package_id int NOT NULL AUTO_INCREMENT,
	actual_amount varchar(3)
	value_amount varchar(4),
	PRIMARY KEY(ticket_package_id)
)

CREATE TABLE SPONSOR (
	sponsor_id int NOT NULL AUTO_INCREMENT,
	sponsor_name varchar(255),
	website_url varchar(255),
	phone_number varchar(10),
	PRIMARY KEY(sponsor_id)
)

-- The ORDER table holds orders.
--
--	A user chooses a ticket package and then picks prizes.
--	The PRIZE_PICKS table associates picks with orders.

CREATE TABLE ORDER (
	order_id int NOT NULL AUTO_INCREMENT,
	created datetime default CURRENT_TIMESTAMP,
	user_id int,
	ticket_package_id int,
	PRIMARY KEY(order_id),
	FOREIGN KEY user_id REFERENCES USER(user_id),
	FOREIGN KEY ticket_package_id REFERENCES TICKET_PACKAGE(ticket_package_id)
)

-- Associate the pick with an order.
CREATE TABLE PACKAGE_PICK (
	pick_id int NOT NULL AUTO_INCREMENT,
	order_id int,
	prize_id int,
	quantity int NOT NULL,
	PRIMARY KEY(pick_id)
	FOREIGN KEY order_id REFERENCES ORDER(order_id),
	FOREIGN KEY prize_id REFERENCES PRIZE_PACKAGE(prize_package_id)
)
