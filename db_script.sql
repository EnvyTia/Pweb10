CREATE DATABASE `studentRegis`;

CREATE TABLE `studentRegis`.`prospStudent` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `name` VARCHAR(64) NOT NULL ,  
    `address` VARCHAR(255) NOT NULL ,  
    `gender` VARCHAR(16) NOT NULL ,  
    `religion` VARCHAR(16) NOT NULL ,  
    `schoolOrigin` VARCHAR(64) NOT NULL ,    
    PRIMARY KEY  (`id`)
)