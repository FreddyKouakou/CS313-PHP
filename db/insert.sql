INSERT INTO students(classroom_id, first_name, last_name) VALUES(1,'Freddy', 'Kouakou');
INSERT INTO students(classroom_id, first_name, last_name) VALUES(2,'Michael', 'Schmidt');
INSERT INTO students(classroom_id, first_name, last_name) VALUES(3,'Paulie', 'Snyder');
INSERT INTO subjects(subject_name) VALUES('French');

INSERT INTO departments(department_name) VALUES('Nusery');
INSERT INTO schools(school_name) VALUES('My Preparatory International');
INSERT INTO schools(school_name) VALUES('My Preparatory National');
INSERT INTO terms(term_name) VALUES('First Term');

INSERT INTO classes(classe_name, department_ID) VALUES('class One', 1);
INSERT INTO classrooms(term_ID, subject_ID, school_ID, classe_ID, classroom_name) VALUES(1, 1, 1, 1, 'Class One');
INSERT INTO classrooms(term_ID, subject_ID, school_ID, classe_ID, classroom_name) VALUES(1, 1, 1, 1, 'Class Two');
INSERT INTO classrooms(term_ID, subject_ID, school_ID, classe_ID, classroom_name) VALUES(1, 1, 1, 1, 'Class Three');

INSERT INTO parents(student_ID, first_name, last_name, phone, users_name, user_password) VALUES(6, 'Michael', 'Schmidt', '+233000000000', 'Fred', 'Fred0011');
INSERT INTO parents(student_ID, first_name, last_name, phone, users_name, user_password) VALUES(7, 'Freddy', 'Schmidt', '+233100000000', 'Mich', 'Mich0011');
INSERT INTO parents(student_ID, first_name, last_name, phone, users_name, user_password) VALUES(8, 'Paulie', 'Schmidt', '+233200000000', 'Pual', 'Paul0011');

INSERT INTO marks(student_ID, exercise_name, score) VALUES(1, 'Individual Class Test 30', 25);
INSERT INTO marks(student_ID, exercise_name, score) VALUES(1, 'Group Exercise 20', 20);
INSERT INTO marks(student_ID, exercise_name, score) VALUES(1, 'Individual Class Test 30', 30);
INSERT INTO marks(student_ID, exercise_name, score) VALUES(1, 'Project Homework 20', 15);