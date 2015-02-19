-- ----------------
--
--	This SQL file is a seed to set up a database for running a 
--	so-called "Chinese Auction."
--
--	Supporters buy tickets packages and then can put tickets into
--	prize packages for the auction.
--
--	See the comments above each table for details.
--	
-- ----------------

-- Create a database
CREATE DATABASE IF NOT EXISTS `aucs-simple`;

USE `aucs-simple`;

-- Users have names, emails, passwords, and references phones and addresses.
CREATE TABLE IF NOT EXISTS USER (
	user_id       INT NOT NULL AUTO_INCREMENT,
	created       TIMESTAMP    DEFAULT CURRENT_TIMESTAMP,
	email_address VARCHAR(255),
	first_name    VARCHAR(255),
	last_name     VARCHAR(255),
	token_or_password VARCHAR(255),
	phone_number  VARCHAR(10),
	address	VARCHAR(255),
	is_organizer  INT(1)       DEFAULT 0,
	PRIMARY KEY (user_id)
);

-- Sponsors supply prizes
CREATE TABLE IF NOT EXISTS SPONSOR (
	sponsor_id int NOT NULL AUTO_INCREMENT,
	sponsor_name varchar(255),
	website_url varchar(255),
	phone_number varchar(10),
	PRIMARY KEY(sponsor_id)
);

-- A prize package is a collection of prizes that users can "put in for."
CREATE TABLE IF NOT EXISTS PRIZE_PACKAGE (
	prize_package_id int NOT NULL AUTO_INCREMENT,
	package_name varchar(200),
	package_price_in_dollars varchar(3),
  package_number int(3),
	PRIMARY KEY(prize_package_id)
);

-- Prizes live in a prize package.
CREATE TABLE IF NOT EXISTS PRIZE (
	prize_id int NOT NULL AUTO_INCREMENT,
	prize_name varchar(255) NOT NULL,
	prize_description varchar(4000),
	sponsor_id int,
	package_id int,
	PRIMARY KEY(prize_id),
	FOREIGN KEY(sponsor_id) REFERENCES SPONSOR(sponsor_id),
	FOREIGN KEY(package_id) REFERENCES PRIZE_PACKAGE(prize_package_id)
);

-- Ticket packages allow the user to buy extra tickets for less money.
-- For example, give $75 worth of tickets for paying only $50.
CREATE TABLE IF NOT EXISTS TICKET_PACKAGE (
	ticket_package_id int NOT NULL AUTO_INCREMENT,
	actual_amount varchar(3),
	awarded_amount varchar(4),
	PRIMARY KEY(ticket_package_id)
);

-- The ORDER table holds orders.
--
--	A user chooses a ticket package and then picks prizes.
--	The PRIZE_PICKS table associates picks with orders.

CREATE TABLE IF NOT EXISTS USER_ORDER (
	order_id int NOT NULL AUTO_INCREMENT,
	created timestamp default CURRENT_TIMESTAMP,
	user_id int,
	ticket_package_id int,
	PRIMARY KEY(order_id),
	FOREIGN KEY(user_id) REFERENCES USER(user_id),
	FOREIGN KEY(ticket_package_id) REFERENCES TICKET_PACKAGE(ticket_package_id)
);

-- Associate the pick with an order.
CREATE TABLE IF NOT EXISTS PACKAGE_PICK (
	pick_id int NOT NULL AUTO_INCREMENT,
	order_id int,
	prize_id int,
	quantity int NOT NULL,
	PRIMARY KEY(pick_id),
	FOREIGN KEY(order_id) REFERENCES USER_ORDER(order_id),
	FOREIGN KEY(prize_id) REFERENCES PRIZE_PACKAGE(prize_package_id)
);
