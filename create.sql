-- Create the User table
CREATE TABLE User (
    Username VARCHAR(20) PRIMARY KEY NOT NULL,
    Major VARCHAR(40),
    Fname VARCHAR(20) NOT NULL,
    Lname VARCHAR(20),
    DOB DATE NOT NULL,
    Classification VARCHAR(10),
    PFP VARCHAR(200) NOT NULL DEFAULT 'link_to_silhouette_image'
);

-- Create the Restaurant table
CREATE TABLE Restaurant (
    Res_name VARCHAR(50) PRIMARY KEY NOT NULL,
    Cuisine VARCHAR(20),
    D_from_campus VARCHAR(20),
    Address VARCHAR(100)
);

-- Create the Food_item table (note consistent naming)
CREATE TABLE Food_item (
    Res_name VARCHAR(50) NOT NULL,
    I_name VARCHAR(30) NOT NULL,
    Photo VARCHAR(200),
    PRIMARY KEY (Res_name, I_name),
    FOREIGN KEY (Res_name) REFERENCES Restaurant (Res_name)
    ON DELETE CASCADE
);

-- Create the Review table
CREATE TABLE Review (
    Res_name VARCHAR(50) NOT NULL,
    Rev_id INT NOT NULL,
    Rating SMALLINT CHECK (Rating BETWEEN 1 AND 5),
    Rev_comment VARCHAR(500),
    I_comment VARCHAR(500),
    Username VARCHAR(20),
    Fav_item VARCHAR(30),
    PRIMARY KEY (Res_name, Rev_id),
    FOREIGN KEY (Res_name) REFERENCES Restaurant (Res_name)
    ON DELETE CASCADE,
    FOREIGN KEY (Username) REFERENCES User (Username)
    ON DELETE CASCADE,
    FOREIGN KEY (Res_name, Fav_item) REFERENCES Food_item (Res_name, I_name)
    ON DELETE CASCADE
);