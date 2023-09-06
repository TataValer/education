<?php
header('Content-Type: text/html; charset=utf-8')

$mysqli = mysqli_connect("localhost", "ucntyptx_thefirst", "2006", "ucntyptx_thefirst");
if ($mysqli == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}else{
    print("Соединение установлено успешно");
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
    // var_dump($result->num_rows);
    if ($result->num_rows != 0) {
        print("This user is already registered")
    } else {
     $mysqli->query("INSERT INTO `users`(`namea, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass'");
     print("Successfull registered")
    }

    // $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");

//     $mysqli->query("INSERT INTO `users`(`namea, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass'")
// 

// echo "Name: $name<br>
// Фамилия: $lastname<br>
// E-mail: $email<br>
// Password: $pass<hr>
// <!-- ucntyptx_thefirst 2006--> -->
}