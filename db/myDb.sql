CREATE TABLE subjects(
    subject_ID SERIAL PRIMARY KEY,
    subject_name VARCHAR  (40)
);

CREATE TABLE departments(
    department_ID SERIAL PRIMARY KEY,
    department_name VARCHAR(40)
);

CREATE TABLE schools(
    school_ID SERIAL PRIMARY KEY,
    school_name VARCHAR(40)
);
CREATE TABLE teachers(
teacher_ID SERIAL PRIMARY KEY,
first_name VARCHAR(50),
last_name VARCHAR(50),
users_name VARCHAR(40),
phone VARCHAR(20)

);

CREATE TABLE terms(
    term_ID SERIAL PRIMARY KEY,
    term_name VARCHAR(40)
);

--The class table---
CREATE TABLE classes(
    classe_ID SERIAL PRIMARY KEY,
    classe_name VARCHAR(40),
    
    department_ID INT REFERENCES departments(department_ID)
);


/*
 Classroom table 
 referencing tems, subjects, schools and classes 
*/
CREATE TABLE classrooms(
    classroom_ID SERIAL PRIMARY KEY,
    classroom_name VARCHAR(50),
    term_ID INT REFERENCES terms(term_ID),
    subject_ID INT REFERENCES subjects(subject_ID),
    school_ID INT REFERENCES schools(school_ID),
    classe_ID INT REFERENCES classes(classe_ID),
    teacher_ID INT REFERENCES teachers(teacher_ID)

);


CREATE TABLE students(
    student_ID SERIAL PRIMARY KEY, 
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    classroom_ID INT REFERENCES classrooms(classroom_ID)
);

CREATE TABLE parents(
    parents_ID SERIAL PRIMARY KEY,
    student_ID INT REFERENCES students(student_ID),
    first_name VARCHAR(40),
    last_name VARCHAR(40),
    phone VARCHAR(15),
    users_name VARCHAR(40),
    user_password VARCHAR(40)
);

--The marks table---
CREATE TABLE marks(
mark_ID SERIAL PRIMARY KEY,
student_ID INT REFERENCES students(student_ID),
exercise_name VARCHAR(40),
score INT
);
