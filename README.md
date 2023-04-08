# Form-Assignment-php-rest-api


DataBase Schema ->>mysql

CREATE DATABASE form;

USE form;

CREATE TABLE user (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  gender ENUM('male','female','other') NOT NULL,
  language SET('English','Hindi') NOT NULL
);



![Screenshot 2023-04-07 at 7 05 32 PM](https://user-images.githubusercontent.com/67068290/230703338-0d984108-98cd-4935-b2f3-b5bd8a9c7e5c.png)
![Screenshot 2023-04-07 at 7 07 05 PM](https://user-images.githubusercontent.com/67068290/230703340-cdfdc24c-c4db-404f-8bb9-b297b8c76e8a.png)
![Screenshot 2023-04-07 at 7 07 10 PM](https://user-images.githubusercontent.com/67068290/230703341-aefb860c-243a-462d-9e14-399ecce33bde.png)
![Screenshot 2023-04-07 at 7 07 17 PM](https://user-images.githubusercontent.com/67068290/230703342-4f94ec8e-f447-43d8-95d9-ac960fc5d293.png)
![Screenshot 2023-04-07 at 7 07 23 PM](https://user-images.githubusercontent.com/67068290/230703344-21ed31e7-5502-486b-b4bc-39ca7514d35d.png)
![Screenshot 2023-04-07 at 7 07 32 PM](https://user-images.githubusercontent.com/67068290/230703346-698c5477-4893-4018-9428-68d57869c9e1.png)
