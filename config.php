<?php

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASSWORD = "root";
$DB_DBNAME = "shop";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DBNAME);

if ($conn->connect_error) {
	die("Połączenie nieudane. Bład: " . $conn->connect_error);
}

$exercise_1 = "CREATE TABLE Categories (
id int NOT NULL AUTO_INCREMENT,
category_name varchar(255) NOT NULL,
PRIMARY KEY(id)
)";

$exercise_2 = "CREATE TABLE Products (
id int NOT NULL AUTO_INCREMENT,
id_category int NOT NULL,
product_name varchar(255) NOT NULL,
product_price decimal(13,2) NOT NULL,
product_description varchar(255) NOT NULL,
quantity int NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_category) REFERENCES Categories(id)
)";

$exercise_3 = "CREATE TABLE Pictures (
id int NOT NULL AUTO_INCREMENT,
id_product int NOT NULL,
picture_path varchar(255) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_product) REFERENCES Products(id)
)";

$exercise_4 = "CREATE TABLE Users (
id int NOT NULL AUTO_INCREMENT,
name varchar(255) NOT NULL,
surname varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
PRIMARY KEY(id)
)";

$exercise_5 = "CREATE TABLE Orders (
id int NOT NULL AUTO_INCREMENT,
id_state int NOT NULL,
id_user int NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_state) REFERENCES States(id),
FOREIGN KEY(id_user) REFERENCES Users(id)
)";

$exercise_6 = "CREATE TABLE Products_Orders (
id int NOT NULL AUTO_INCREMENT,
id_order int NOT NULL,
id_product int NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_product) REFERENCES Products(id) ON DELETE CASCADE,
FOREIGN KEY(id_order) REFERENCES Orders(id) ON DELETE CASCADE
)";

$exercise_7 = "CREATE TABLE States (
id int NOT NULL AUTO_INCREMENT,
name_state varchar(255) NOT NULL,
PRIMARY KEY(id)
)";

//$result = $conn->query($exercise_6);


//if ($result === TRUE) {
//	echo("Tabela produktu została stworzona poprawnie <br />");
//} else {
//	echo("Błąd podczas tworzenia tabeli: " . $conn->error);
//}

?>