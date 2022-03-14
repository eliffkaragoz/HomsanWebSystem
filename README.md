# HomsanWebSystem



Database SQL QUERY: 

      CREATE DATABASE my_db;
      
      CREATE TABLE `users` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `role` enum('employee','customer','admin')COLLATE utf8_unicode_ci NOT NULL,
          `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
          `password` varchar(50) NOT NULL,
          PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
      
      INSERT into `users` (role, username, password) VALUES ('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3' ); 
      INSERT into `users` (role, username, password) VALUES ('customer', 'customer', '91ec1f9324753048c0096d036a694f86' );
      INSERT into `users` (role, username, password) VALUES ('employee', 'employee', 'fa5473530e4d1a5a1e1eb53d2fedb10c' );
     
      CREATE TABLE `product` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
          `price` varchar(50) NOT NULL,
          PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
          
          
Example username and password combinations: 
### ---------------------------------

UserName : admin

Password : admin 
### ---------------------------------
UserName : employee

Password : employee 
### ---------------------------------
UserName : customer

Password : customer 
