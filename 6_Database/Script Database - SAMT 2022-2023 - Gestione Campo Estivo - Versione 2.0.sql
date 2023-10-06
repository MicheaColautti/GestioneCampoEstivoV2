
DROP DATABASE IF EXISTS GestioneCampoEstivo;
CREATE DATABASE GestioneCampoEstivo;
USE GestioneCampoEstivo;


/****************PERSON****************/
DROP TABLE IF EXISTS person;
CREATE TABLE person(
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    address VARCHAR(40) NOT NULL,
    CAP VARCHAR(20) NOT NULL,
    country VARCHAR(30) NOT NULL,
    type ENUM('guest', 'volunteer', 'admin','reference') NOT NULL,
    born_date DATE NOT NULL,
    regUserId  INT,
    userState ENUM('suspended', 'approved') NOT NULL,
    userMansion ENUM('cooking','hospitality','washing','cafeteria','infirmary','') NOT NULL,
    PRIMARY KEY(id)
    
);

       
/****************GUEST_INFO****************/
DROP TABLE IF EXISTS guestInfo;
CREATE TABLE guestInfo(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,
    marital_state VARCHAR(20) NOT NULL,
    weight INT NOT NULL,
    height INT NOT NULL,
    form_placeAndDate VARCHAR(40) NOT NULL,
    signature VARCHAR(40) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);


/****************REFERENCE****************/
DROP TABLE IF EXISTS referencePerson;
CREATE TABLE referencePerson(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,
    idReference INT NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id),
    FOREIGN KEY (idReference) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);


/****************LIVING_SITU****************/
DROP TABLE IF EXISTS livingSituation;
CREATE TABLE livingSituation(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,

    livingState ENUM('da solo', 'con il coniuge', 'in istituto', 'con i parenti') NOT NULL,
    instituteNumber INT,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);

/****************HEALT_IN****************/
DROP TABLE IF EXISTS healtIns;
CREATE TABLE healtIns(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,

    name VARCHAR(40) NOT NULL,
    number VARCHAR(30) NOT NULL,
    picture VARCHAR(40) NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);


/****************LAST_RECOVER****************/
DROP TABLE IF EXISTS lastRecover;
CREATE TABLE lastRecover(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,
    date DATE,
    reason VARCHAR(40),
    hospital VARCHAR(30),
    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);


/****************MOVEMENT***************/
DROP TABLE IF EXISTS movement;
CREATE TABLE movement(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,    
    
    status_and_transport ENUM('Indipendente', 'Semidipendente', 'Dipendente') NOT NULL,
    aux_equipment VARCHAR(30),
    arm_sx ENUM('buona', 'ridotta', 'nessun movimento') NOT NULL,
    arm_dx ENUM('buona', 'ridotta', 'nessun movimento') NOT NULL,
    leg_sx ENUM('buona', 'ridotta', 'nessun movimento') NOT NULL,
    leg_dx ENUM('buona', 'ridotta', 'nessun movimento') NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);


/****************ALIMENTATION****************/
DROP TABLE IF EXISTS alimentation;
CREATE TABLE alimentation(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,

    eating_ability ENUM('da solo', 'con aiuto', 'imboccare') NOT NULL,
    drinking_ability ENUM('da solo', 'con aiuto', 'imboccare') NOT NULL,
    dentures ENUM('nessuna', 'sopra', 'sotto','entrambe') NOT NULL,
    thickener ENUM('si', 'no') NOT NULL,
    diet VARCHAR(40),
    unadviced_food VARCHAR(40),
    allergies VARCHAR(40),
    alchool VARCHAR(40),

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);



/****************GUEST_HYG****************/
DROP TABLE IF EXISTS guestHyg;
CREATE TABLE guestHyg(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,

    washing_ab ENUM('da solo', 'con aiuto', 'dipendente') NOT NULL,
    dressing_ab ENUM('da solo', 'con aiuto', 'dipendente') NOT NULL,
    toilet_ab ENUM('da solo', 'con aiuto', 'dipendente') NOT NULL,
    urine_cont ENUM('Continente', 'Incontinente') NOT NULL,
    feces_cont ENUM('Continente', 'Incontinente') NOT NULL,
    catheter ENUM('si', 'no') NOT NULL,
    last_change_date DATE,
    CV VARCHAR(40),
    costipation ENUM('si', 'no') NOT NULL,
    manual_feces_ext ENUM('si', 'no') NOT NULL,
    decupitus ENUM('si', 'no') NOT NULL,
    where_decupitus VARCHAR(40),
    prev_and_cure VARCHAR(40),

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);

/***************COMUNICATION****************/
DROP TABLE IF EXISTS comunication;
CREATE TABLE comunication(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,
    
    seeing ENUM('normale', 'parziale', 'assente') NOT NULL,
    hearing ENUM('normale', 'parziale', 'assente') NOT NULL,
    hearing_device ENUM('si', 'no') NOT NULL,
    glasses ENUM('si', 'no') NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id) 
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);
/***************SLEEP****************/
DROP TABLE IF EXISTS sleep;
CREATE TABLE sleep(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,
    
    sleep ENUM('normale', 'parziale', 'assente') NOT NULL,
    difficulty_getting_asleep ENUM('si', 'no') NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);


/***************PSY_STATE****************/
DROP TABLE IF EXISTS psySate;
CREATE TABLE psySate(
    id INT AUTO_INCREMENT NOT NULL,
    idGuest INT NOT NULL,
    
    orientation ENUM('Buono', 'Alterato', 'Molto alterato') NOT NULL,
    memoria ENUM('Buono', 'Alterato', 'Molto alterato') NOT NULL,
    agitation_state ENUM('si', 'no') NOT NULL,
    depressed ENUM('si', 'no') NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (idGuest) REFERENCES person(id) 
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);



/**************************************************************/
/**************************VOLUNTEER***************************/
/**************************************************************/

/***************AUTOCERTIFICATE****************/ 
DROP TABLE IF EXISTS autocertificate;
CREATE TABLE autocertificate(
    id INT AUTO_INCREMENT NOT NULL,
    idVolunteer INT NOT NULL,
    /*
    * Datas like name, lastname, and person of reference are stored in table person/reference. 
    * Link is done via foreign Key
    */
    mother_phone VARCHAR(20) NOT NULL,
    father_phone VARCHAR(20) NOT NULL,
    legal_tutor VARCHAR(40) NOT NULL,
    other_problems  VARCHAR(50),
    doctor VARCHAR(50) NOT NULL,
    doctor_phone VARCHAR(30) NOT NULL,
    form_placeAndDate VARCHAR(40) NOT NULL,
    signature VARCHAR(30) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (idVolunteer) REFERENCES person(id) 
    
);

/***************ILLNESS****************/ 
DROP TABLE IF EXISTS illness;
CREATE TABLE illness(
    id INT AUTO_INCREMENT NOT NULL,
    name TEXT NOT NULL,
    PRIMARY KEY(id)
);
INSERT INTO illness(name) VALUES
("Diabete"),
("Emicrania"),
("Epilessia"),
("Pressione bassa"),
("Pressione alta"),
("Problemi respiratori (es: asma, ecc.)"),  
("Problemi cardiaci (es: soffio, valvole calcificate, operazioni al cuore, ecc.)"),
("Problemi di coagulazione"),
("Problemi alle articolazioni"),
("Problemi motori"),
("Problemi psichci (es: depressione, bipolarismo, ecc.)");

/***************VOLUNTEER_ILLNESS****************/ 
DROP TABLE IF EXISTS volunteer_illness;
CREATE TABLE volunteer_illness(
    id INT AUTO_INCREMENT NOT NULL,
    idVolunteer INT NOT NULL,
    idIllness INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (idVolunteer) REFERENCES autocertificate(id),
    FOREIGN KEY (idIllness) REFERENCES illness(id) 


);

/***************************************************************/
/****************************ADMMIN*****************************/
/***************************************************************/

/**************************CAMP***************************/
DROP TABLE IF EXISTS camp;
CREATE TABLE camp(
    id INT AUTO_INCREMENT NOT NULL,

    title TEXT NULL,
    infos TEXT,
    edition TEXT,
    phtos_library TEXT,
    staff_instructions TEXT,
    history TEXT,
    news TEXT,
    PRIMARY KEY(id)
);

/**************************BELONGS***************************/
DROP TABLE IF EXISTS belongs;
CREATE TABLE belongs (
    id INT AUTO_INCREMENT NOT NULL,
    idPerson INT NOT NULL,
    idCamp INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (idPerson) REFERENCES person (id),
    FOREIGN KEY (idCamp) REFERENCES camp (id)
);
/***************EVENTS****************/ 
USE gestionecampoestivo;
DROP TABLE IF EXISTS events;
CREATE TABLE events(
	id int NOT NULL AUTO_INCREMENT,
	idVolunteer int,
	title varchar(50),
    #Y-MM-DD HH:mm:ss
	start varchar(50) NOT NULL,
	end varchar(50) NOT NULL,
    updated_at varchar(50) NOT NULL,
    created_at varchar(50) NOT NULL,
    color VARCHAR(7) NOT NULL DEFAULT "#FFCC99",
    isEvent BOOLEAN,
	PRIMARY KEY (id),
	FOREIGN KEY (idVolunteer) REFERENCES person(id)
);
/***************ROOM****************/ 
DROP TABLE IF EXISTS room;
CREATE TABLE room(
	id int NOT NULL AUTO_INCREMENT,
	number VARCHAR(10),
    block INT,
	places INT,
    campId INT,
	PRIMARY KEY (id),
	FOREIGN KEY (campId) REFERENCES camp(id)
);
INSERT INTO room(block,number,places,campId) VALUES
(1,212,2,1),
(1,213,3,1),
(1,214,3,1),
(1,215,3,1),
(1,217,3,1),
(1,218,3,1),
(1,219,3,1),
(1,220,3,1),
(1,220,3,1),
(2,3,4,1),
(2,5,2,1),
(2,13,2,1),
(2,15,8,1),
(2,16,8,1),
(2,17,7,1),
(3,107,2,1),
(3,111,3,1),
(3,112,3,1),
(3,113,3,1),
(3,114,4,1),
(3,101,2,1),
(3,103,2,1),
(3,104,4,1),
(3,121,8,1),
(3,122,8,1),
(3,123,8,1);








/***************OCCUPIED****************/ 
DROP TABLE IF EXISTS occupied;
CREATE TABLE occupied(
    id INT AUTO_INCREMENT NOT NULL,
    idPerson INT NOT NULL,
    idRoom INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (idPerson) REFERENCES person(id),
    FOREIGN KEY (idRoom) REFERENCES room(id)
    ON UPDATE NO ACTION
    ON DELETE CASCADE
);




/*************************************************************
#Inserimento campo
INSERT INTO camp(title,infos,edition,staff_instructions,news,history) VALUES
("Campo estivo 2023","Per informazioni:
 alberto.mombelli@vitaserena.ch
 Tel. 091 857 59 03","Edizione 2023","","Il campo 2020 è stato annullato a causa della pandemia.
 Il campo 2021 idem","");


#Inserimento eventi

INSERT INTO events(idVolunteer,title,start,end,updated_at,created_at,color) VALUES
(1,'Michea', '2023-03-18 00:00:00', '2023-03-30 00:00:00', '2023-03-02 09:06:59', '2023-03-02 08:43:28',"#FF0000"),
(2,'Marco', '2023-03-05 00:00:00', '2023-03-15 00:00:00', '2023-03-02 09:06:59', '2023-03-02 08:43:28',"#FF00FF"),
(3,'Luigi', '2023-03-12 00:00:00', '2023-03-28 00:00:00', '2023-03-02 09:06:59', '2023-03-02 08:43:28',"#FF0000"),
(4,'Admin', '2023-03-11 00:00:00', '2023-03-19 00:00:00', '2023-03-02 09:06:59', '2023-03-02 08:43:28',"#00FF00"),
(5,'Aldo', '2023-03-09 00:00:00', '2023-03-14 00:00:00', '2023-03-02 09:06:59', '2023-03-02 08:43:28',"#00FFFF"),
(6,'Volontario', '2023-03-20 00:00:00', '2023-07-02 00:00:00', '2023-03-02 09:06:59', '2023-03-02 08:43:28',"#0000FF");
**/

/*************************************************************
#Inserimento admin, da eseguire dopo la registrazione al sito. ATTENNZIONE A ID

USE GestioneCampoEstivo;
INSERT INTO person(name,lastname,phone_number,address,CAP,country,type,born_date,regUserId,userState,userMansion)
VALUES("Admin","Super","0041-12-345-67-89","Admin","1234","Admin","admin",1979-07-09,3,"approved","");
*************************************************************/	