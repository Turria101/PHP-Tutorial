
GRANT SELECT
ON app.*
to user2@"%"
IDENIFIED BY 'password'
#------------------------
FLUSH PRIVILEGES
#------------------------
REVOKE ALL PRIVILEGES ON `test2`.* FROM 'user1'@'%';
 GRANT SELECT, INSERT, UPDATE, DELETE ON `test2`.* TO 'user1'@'%' WITH GRANT OPTION;