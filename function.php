<?php

$conn = mysqli_connect("localhost","root","","praktikum_11");

function get_data($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $address = $data["address"];
    $gender = $data["gender"];
    $position = $data["position"];
    $status = $data["status"];
    $query = "INSERT INTO karyawan VALUES
                ('','$name','$email','$address','$gender','$position','$status')";
    mysqli_query($conn,$query);
}

function hapus($data){
    global $conn;
    $query = "DELETE FROM karyawan WHERE id=$data";
    mysqli_query($conn,$query);
}