CREATE TABLE IF NOT EXISTS 'user' (

'user_id' INT(11) NOT NULL,
'name' VARCHAR(50) NOT NULL,
'contact_no' INT(10) NOT NULL,
'email' VARCHAR(50) NOT NULL,
'mun_council' VARCHAR(50) NOT NULL,
'username' VARCHAR(50) NOT NULL,
'password' VARCHAR(50) NOT NULL,
're_enter_password' VARCHAR(50) NOT NULL 
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO 'user' ('user_id','name','contact_no','email','mun_council','username','password','re_enter_password') VALUES 
(4,'nimal','0712345678','ac@c.com','2B','user1','user1','user1'),
(5,'kamal','0713245678','bc@c.com','2B','user2','user2','user2');

ALTER TABLE 'user'
	ADD PRIMARY KEY ('user_id');

ALTER TABLE 'user'
	MODIFY 'user_id' INT(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;