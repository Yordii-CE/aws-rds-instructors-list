use school;

create table instructors(
	id int primary key auto_increment,
    instructorCode varchar(30),
    instructorFirstName varchar(40),
    instructorName varchar(40)
);

insert into instructors(instructorCode, instructorFirstName, instructorName) 
values('AS-23', 'Juan', 'Adrian');

insert into instructors(instructorCode, instructorFirstName, instructorName) 
values('AS-24', 'Yordii', 'Perez');

insert into instructors(instructorCode, instructorFirstName, instructorName) 
values('AS-24', 'Jhonatan', 'Suarez');

insert into instructors(instructorCode, instructorFirstName, instructorName) 
values('AS-24', 'Jhenifer', 'Vasquez');

select * from instructors;