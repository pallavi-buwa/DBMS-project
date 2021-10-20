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
    gender varchar(10) not null,
);

create table Hospital(
    h_id int(10) primary key,
    pin int(10) not null,
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
    primary key(h_id, age_criteria),
    foreign key(h_id) references Hospital(h_id) on delete cascade,
    foreign key(vac_id) references Vaccines(vac_id) on delete cascade
);

create table FAQs(
    serial_no int(10) primary key,
    question varchar(30) not null,
    answer varchar(50) not null
);

create table Login(
    pt_id int(10),
    email varchar(20),
    password varchar(30) not null,
    primary key(pt_id),
    foreign key(pt_id) references Patient(id) on delete cascade,
    foreign key(email) references Patient(email) on delete set null
);

create table Vaccination_status1 (
    vacc_id int(10) not null auto_increment primary key,
    type varchar(20),
    h_id int(10),
    date_taken date,
    foreign key(type) references Vaccines(type) on delete set null,
    foreign key(h_id) references Hospital(h_id) on delete set null
);


create table Vaccination_status2 (
    vacc_id int(10),
    type varchar(20),
    h_id int(10),
    date_taken date,
    primary key(vacc_id),
    foreign key(vacc_id) references Vaccination_status1(vacc_id) on delete cascade,
    foreign key(type) references Vaccines(type) on delete set null,
    foreign key(h_id) references Hospital(h_id) on delete set null
);



alter table Patient add column vacc_id int(10);
alter table Patient add foreign key(vacc_id) references Vaccination_status1(vacc_id) on delete set null;

