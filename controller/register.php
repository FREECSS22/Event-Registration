<?php

require_once 'config.php';

if (isset($_POST['submit'])) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    $pass = filter_var(md5($_POST['pass']), FILTER_SANITIZE_STRING);
    $cpass = filter_var(md5($_POST['cpass']), FILTER_SANITIZE_STRING);

    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_folder = '../db/uploaded_image/' . $image;

        if ($image_size > 2000000) {
            $message[] = 'Image size is too large!';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $image = 'default.jpg';
    }

    $select = $conn->prepare("SELECT * FROM `youth` WHERE email = ?");
    $select->execute([$email]);

    if ($select->rowCount() > 0) {
        $message[] = 'This user already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password does not match!';
        } else {
            $insert = $conn->prepare("INSERT INTO `youth`(name, email, address, password, image) VALUES(?,?,?,?,?)");
            $insert->execute([$name, $email, $address, $pass, $image]);

            if ($insert) {
                if (isset($image_tmp_name)) {
                    move_uploaded_file($image_tmp_name, $image_folder);
                }
                $message[] = 'Registered successfully!';
                header('location: ../view/login_form.php');
                exit();
            } else {
                $message[] = 'Registration failed!';
            }
        }
    }
}
?>
