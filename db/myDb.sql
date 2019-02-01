CREATE TABLE students(
    student_ID INT PRIMARY KEY, 
    first_name VARCHAR(40),
    last_name VARCHAR(40)
);

CREATE TABLE subjects(
    subject_ID INT PRIMARY KEY,
    subject_name VARCHAR  (20)
);

CREATE TABLE departments(
    department_ID INT PRIMARY KEY,
    department_name VARCHAR(20)
);

CREATE TABLE schools(
    school_ID INT PRIMARY KEY,
    school_name VARCHAR(20)
);

CREATE TABLE terms(
    term_ID INT PRIMARY KEY,
    term_name VARCHAR(20)
);

CREATE TABLE exercises(
    exercise_ID INT PRIMARY KEY,
    exercise_name VARCHAR (20) 
);
CREATE TABLE parents(
    parents_ID INT PRIMARY KEY,
    parents_name VARCHAR(40)
);
--The class table---
CREATE TABLE classes(
    classe_ID INT PRIMARY KEY,
    classe_name VARCHAR(20),
    department_ID INT REFERENCES departments(department_ID)
);
/*
 Classroom table 
 referencing tems, subjects, schools and classes 
*/
CREATE TABLE classrooms(
    classroom_ID INT PRIMARY KEY,
    term_ID INT REFERENCES terms(term_ID),
    subject_ID INT REFERENCES subjects(subject_ID),
    school_ID INT REFERENCES schools(school_ID),
    classe_ID INT REFERENCES classes(classe_ID)
);

--The marks table---
CREATE TABLE marks(
mark_ID INT PRIMARY KEY,
classroom_ID INT REFERENCES classrooms(classroom_ID),
student_ID INT REFERENCES students(student_ID),
exercise_ID INT REFERENCES exercises(exercise_ID),
score INT
);
