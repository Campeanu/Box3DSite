db_name: 
    box3d

users_table:
    CREATE TABLE users ( 
        idUsers    int(11)  AUTO_INCREMENT PRIMARY KEY NOT NULL,
        uidUsers   TINYTEXT NOT NULL,
        emailUsers TINYTEXT NOT NULL,
        pwdUsers   LONGTEXT NOT NULL,
        userStatus INT      NOT NULL,
        haskey     INT      NOT NULL,
        userkey    LONGTEXT NOT NULL                
    );