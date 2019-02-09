INSERT INTO students(first_name, last_name) VALUES('Freddy', 'Kouakou');
INSERT INTO students(first_name, last_name) VALUES('Michael', 'Schmidt');
INSERT INTO subjects(subject_name) VALUES('French');

INSERT INTO departments(department_name) VALUES('Nusery');
INSERT INTO schools(school_name) VALUES('My Preparatory International');
INSERT INTO schools(school_name) VALUES('My Preparatory National');
INSERT INTO terms(term_name) VALUES('First Term');
INSERT INTO exercises(exercise_name) VALUES('Individual Class Test 30');
INSERT INTO exercises(exercise_name) VALUES('Group Exercise 20');
INSERT INTO exercises(exercise_name) VALUES('Individual ClassTest 30');
INSERT INTO exercises(exercise_name) VALUES('Project Homework 20');

INSERT INTO classes(classe_name, department_ID) VALUES('class One', 1);
INSERT INTO classrooms(term_ID, subject_ID, school_ID, classe_ID) VALUES(1, 1, 1, 1);
INSERT INTO parents(student_ID, first_name, last_name, phone, users_name, user_password) VALUES(1, 'Michael', 'Schmidt', '+233000000000', 'Fred', 'Fred0011');

INSERT INTO marks(classroom_ID, student_ID, exercise_name, score) VALUES(1, 1, 'Individual Class Test 30', 25);
INSERT INTO marks(classroom_ID, student_ID, exercise_name, score) VALUES(1, 1, 'Group Exercise 20', 20);
INSERT INTO marks(classroom_ID, student_ID, exercise_name, score) VALUES(1, 1, 'Individual Class Test 30', 30);
INSERT INTO marks(classroom_ID, student_ID, exercise_name, score) VALUES(1, 1, 'Project Homework 20', 15);