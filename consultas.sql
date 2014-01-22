SELECT  `user_name`, max(`file_size`) AS maximo
FROM  `files` JOIN `users` ON `files`.`file_root_id` = `users`.`user_id` 
GROUP BY `files`.`file_root_id`
ORDER BY maximo