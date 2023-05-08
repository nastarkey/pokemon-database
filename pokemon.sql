DROP DATABASE IF EXISTS pokemon;

CREATE DATABASE pokemon;
USE pokemon;

CREATE TABLE Trainer(
	trainer_id INTEGER,
	username CHARACTER VARYING(32) NOT NULL,
	password CHARACTER VARYING(255) NOT NULL,
	email CHARACTER VARYING(32) NOT NULL,
	PRIMARY KEY(trainer_id)
);


CREATE TABLE Pokemon(
	pokedex_number INTEGER,
	pokemon_name CHARACTER VARYING(32) NOT NULL,
	weight NUMERIC(16,2),
	height NUMERIC(16,2),
	trainer_id INTEGER,
	PRIMARY KEY(pokedex_number),
	FOREIGN KEY(trainer_id) REFERENCES Trainer (trainer_id)
	ON UPDATE CASCADE ON DELETE RESTRICT,
);

CREATE TABLE Type(
	Type_name VAR CHAR(32),
	PRIMARY KEY(type_name)
);


CREATE TABLE Ability(
	Ability_name VAR CHAR(32),
	Effect VAR CHAR(255)
	PRIMARY KEY(ability_name)
);

CREATE TABLE Location(
	Location_name VAR CHAR(32),
	Region_name VAR CHAR(32),
	PRIMARY KEY(location_name),
	FOREIGN KEY(region_name) REFERENCES(Region)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
);

CREATE TABLE Move(
	Move_name VAR CHAR(32),
	Accuracy INTEGER,
	Power INTEGER,
	Status_effect VAR CHAR(32),
	Power_points INTEGER,
	Category VAR CHAR(32),
	Type_name VAR CHAR(32),
	PRIMARY KEY(move_name),
	FOREIGN KEY(type_name) REFERENCES(Type)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
);

CREATE TABLE Region(
	Region_name VAR CHAR(32),
	Generation INTEGER,
	PRIMARY KEY(region_name)
);

CREATE TABLE Pokemon_Pokemon(
	Pokedex_number1 INTEGER,
	Pokedex_number2 INTEGER,
	Condition VAR CHAR(255),
	PRIMARY KEY(pokedex_number1),
	FOREIGN KEY(pokedex_number1), REFERENCES(Pokemon),
	ON UPDATE NO ACTION ON DELETE NO ACTION;
    FOREIGN KEY(pokedex_number2), REFERENCES(Pokemon)
    ON UPDATE NO ACTION ON DELETE NO ACTION;
);

CREATE TABLE Pokemon_Location (
	Pokedex_number INTEGER,
	Location_number VAR CHAR(32),
	Habitat VAR CHAR(32),
	PRIMARY KEY(pokedex_number),
	FOREIGN KEY(pokedex_number), REFERENCES(Pokemon),
ON UPDATE NO ACTION ON DELETE NO ACTION;
	FOREIGN KEY(location_number)
);

CREATE TABLE Pokemon_Move(
	Pokedex_number INTEGER,
	Move_name VAR CHAR(32),
	PRIMARY KEY(pokedex_number),
	FOREIGN KEY(pokedex_number), REFERENCES(Pokemon),
	ON UPDATE NO ACTION ON DELETE NO ACTION
	FOREGIN KEY(move_name), REFERENCES(Move)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
);

CREATE TABLE Pokemon_Type(
	Pokedex_number INTEGER,
	Type_name VAR CHAR(32),
	PRIMARY KEY(pokedex_number),
	FOREIGN KEY(pokedex_number), REFERENCES(Pokemon),
	ON UPDATE NO ACTION ON DELETE NO ACTION;
	FOREIGN KEY(type_name), REFERENCES(Type)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
);

CREATE TABLE Type_Type(
	Type_name1 VAR CHAR(32),
	Type_name2 VAR CHAR(32),
	PRIMARY KEY(type_name1),
	FOREIGN KEY(type_name1), REFERENCES(Type),
ON UPDATE NO ACTION ON DELETE NO ACTION;
	FOREIGN KEY(type_name2), REFERENCES(Type)
	ON UPDATE NO ACTION ON DELETE NO ACTION;
);



