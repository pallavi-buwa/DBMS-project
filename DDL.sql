create database Vaccinations;

use Vaccinations;

create table Patient(
    id int(10) auto_increment primary key,
    name varchar(20) not null,
    mobile int(10) not null,
    email varchar(20) not null,
    address varchar(40) not null,
    aadhaar int(20) not null,
    age int(3) not null,
    gender varchar(10) not null
);

create table Hospital(
    h_id int(10) primary key,
    h_name varchar(20) not null,
    address varchar(40) not null
);

create table Vaccines(
    vac_id int(10) primary key,
    type varchar(20) not null
);

create table Hospital_vacc (
    h_id int(10),
    age_criteria varchar(20) not null,
    time_slots varchar(20) not null,
    capacity int(5) not null,
    vac_id int(10),
    primary key(h_id, age_criteria)
);

alter table Hospital_vacc add foreign key(h_id) references Hospital(h_id) on delete cascade;
alter table Hospital_vacc add foreign key(vac_id) references Vaccines(vac_id) on delete cascade;

create table FAQs(
    serial_no int(10) primary key,
    question varchar(30) not null,
    answer varchar(500) not null
);

create table Login(
    pt_id int(10) not null,
    email varchar(20) not null,
    password varchar(30) not null,
    primary key(pt_id),
);
alter table Login add foreign key(pt_id) references Patient(id) on delete cascade


create table Vaccination_status1 (
    vacc_id int(10) not null auto_increment primary key,
    type varchar(20),
    h_id int(10),
    date_taken date
);
alter table Vaccination_status1 add foreign key(h_id) references Hospital(h_id) on delete set null


create table Vaccination_status2 (
    vacc_id int(10),
    type varchar(20),
    h_id int(10),
    date_taken date,
    primary key(vacc_id));

alter table Vaccination_status2 add foreign key(vacc_id) references Vaccination_status1(vacc_id) on delete cascade,
alter table Vaccination_status2 add foreign key(h_id) references Hospital(h_id) on delete set null

alter table Patient add column vacc_id int(10);
alter table Patient add foreign key(vacc_id) references Vaccination_status1(vacc_id) on delete set null;

ALTER TABLE `hospital_vacc`DROP PRIMARY KEY, ADD PRIMARY KEY(`h_id`, `age_criteria`, `time_slots`);


/*INSERTING DATA*/

INSERT INTO `patient` (`id`, `name`, `mobile`, `email`, `address`, `aadhaar`, `age`, `gender`, `vacc_id`) VALUES ('1', 'Admin', '000000000', 'admin@gmail.com', 'NA', '0000000000', '20', 'Female', NULL);
INSERT INTO login values (1, 'admin@gmail.com', 'ADMIN')
INSERT INTO `patient` (`id`, `name`, `mobile`, `email`, `address`, `aadhaar`, `age`, `gender`, `vacc_id`) VALUES ('3', 'Archisha Shukla', '0987654321', 'archisha@gmail.com', 'Baner Road', '1144332266', '20', 'F', NULL); 

ALTER TABLE `hospital` ADD `h_name` VARCHAR(20) NOT NULL AFTER `h_id`;
INSERT INTO `login` (`pt_id`, `email`, `password`) VALUES ('3', 'archisha@gmail.com', 'xyz123');
 


INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES ('1', 'What is COVID-19?', 'COVID-19 is a disease caused by a virus called SARS-CoV-2. Most people with COVID-19 have mild symptoms, but some people can become severely ill.'); 
INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES ('2', 'How does the virus spread?', 'COVID-19 spreads when an infected person breathes out droplets and very small particles that contain the virus. These droplets and particles can be breathed in by other people or land on their eyes, noses, or mouth. In some circumstances, they may contaminate surfaces they touch.'); 
INSERT INTO `faqs` (`serial_no`, `question`, `answer`) VALUES ('3', 'How can I take care?', 'Handwashing is one of the best ways to protect yourself and your family from getting sick. Wash your hands often with soap and water for at least 20 seconds, especially after blowing your nose, coughing, or sneezing; going to the bathroom; and before eating or preparing food.'); 

INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('210', 'Jehangir', '32, Sassoon Road');
INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('540', 'Ruby Hall', '40, Sasoon Road');
INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('170', 'Sahyadri', 'Erandwane Deccan Gymkhana');
INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('420', 'Shree Hospital', 'Gulmohar Society, Kharadi');
INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('840', 'Poona Hospital', ' L B Shastri Road');
INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('560', 'Inamdar Hospital', 'Fatima Nagar Wanowarie');
INSERT INTO `hospital` (`h_id`, `h_name`, `address`) VALUES ('780', 'Noble Hospital', '153, Magarpatta City Road Hadapsar');

INSERT INTO `vaccines` (`vac_id`, `type`) VALUES ('1890', 'Covaxin'); 
INSERT INTO `vaccines` (`vac_id`, `type`) VALUES ('1621', 'Covishield');
INSERT INTO `vaccines` (`vac_id`, `type`) VALUES ('6755', 'Pfizer');
INSERT INTO `vaccines` (`vac_id`, `type`) VALUES ('7693', 'Sputnik V');

INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('210', '45+', '3pm to 5pm', '150', '1621');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('210', '18+', '8am to 10am', '250', '1890');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('420', '45+', '1pm to 2pm', '50', '6755');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('560', '18+', '1pm to 5pm', '400', '1621');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('780', '18+', '5pm to 7pm', '350', '7693');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('420', '45+', '2pm to 4pm', '100', '1621');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('540', '45+', '12pm to 6pm', '500', '6755');
INSERT INTO `hospital_vacc` (`h_id`, `age_criteria`, `time_slots`, `capacity`, `vac_id`) VALUES ('560', '18+', '5pm to 7pm', '200', '1890');

/* todo : add back button on admin side, check if hospital has specified vaccine
