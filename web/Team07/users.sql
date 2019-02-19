-- Create the table in the specified schema
CREATE TABLE users(
    Id INT NOT NULL PRIMARY KEY, -- primary key column
    username VARCHAR(50) NOT NULL,
    userpassword VARCHAR(50) NOT NULL
    -- specify more columns here
);