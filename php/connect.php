<?php
    $name = $_POST['name'];
    $number = $_POST['number'];
    $oder = $_POST['oder'];
    $Additional = $_POST['Additional'];
    $howmuch = $_POST['howmuch'];
    $datetime = $_POST['datetime'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    //datebase connection

    $conn = new mysqli('localhost','root','','resto');
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }
    else{

        $stmt = $conn->prepare("insert into ordernow(name, number, order, Additional, howmuch, datetime, address, message)value(? ,? ,? ,? ,? ,? ,? ,? ,?)");
        $stmt->bind_param("sssssii",$name , $oder , $Additional , $address , $message , $number , $howmuch);
        $stmt->execute();
        echo "order successfully....";
        $stmt->close();
        $conn->close();
    }

    $name = $_POST['name'];
    $number = $_POST['number'];
    $oder = $_POST['oder'];
    $Additional = $_POST['Additional'];
    $howmuch = $_POST['howmuch'];
    $datetime = $_POST['datetime'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    //datebase connection

    $conn = new mysqli('localhost','root','','resto');
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }
    else{

        $stmt = $conn->prepare("insert into ordernow(name, number, order, Additional, howmuch, datetime, address, message)value(? ,? ,? ,? ,? ,? ,? ,? ,?)");
        $stmt->bind_param("sssssii",$name , $oder , $Additional , $address , $message , $number , $howmuch);
        $stmt->execute();
        echo "order successfully....";
        $stmt->close();
        $conn->close();
    }
    $name = $_POST['name'];
    $number = $_POST['number'];
    $oder = $_POST['oder'];
    $Additional = $_POST['Additional'];
    $howmuch = $_POST['howmuch'];
    $datetime = $_POST['datetime'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    //datebase connection

    $conn = new mysqli('localhost','root','','resto');
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }
    else{

        $stmt = $conn->prepare("insert into ordernow(name, number, order, Additional, howmuch, datetime, address, message)value(? ,? ,? ,? ,? ,? ,? ,? ,?)");
        $stmt->bind_param("sssssii",$name , $oder , $Additional , $address , $message , $number , $howmuch);
        $stmt->execute();
        echo "order successfully....";
        $stmt->close();
        $conn->close();
    }$name = $_POST['name'];
    $number = $_POST['number'];
    $oder = $_POST['oder'];
    $Additional = $_POST['Additional'];
    $howmuch = $_POST['howmuch'];
    $datetime = $_POST['datetime'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    //datebase connection

    $conn = new mysqli('localhost','root','','resto');
    if($conn->connect_error){
        die('connection failed'.$conn->connect_error);
    }
    else{

        $stmt = $conn->prepare("insert into ordernow(name, number, order, Additional, howmuch, datetime, address, message)value(? ,? ,? ,? ,? ,? ,? ,? ,?)");
        $stmt->bind_param("sssssii",$name , $oder , $Additional , $address , $message , $number , $howmuch);
        $stmt->execute();
        echo "order successfully....";
        $stmt->close();
        $conn->close();
    }
?>