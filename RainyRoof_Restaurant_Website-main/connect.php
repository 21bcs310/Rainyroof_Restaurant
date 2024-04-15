<?php
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Howdidyoufindus = $_POST['find-us'];
    $Newsletter = $_POST['news'];
    $Dropusaline = $_POST['message'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error)
    {
        die('connection failed : '-$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into feedback(name,email,howdoyoufindus,newsletter,dropusaline) values(?,?,?,?,?)");
        $stmt->bind_param("sssssi",$Name,$Email,$Howdidyoufindus,$Newsletter,$Dropusaline);
        $stmt->execute();
        echo "feedback succesful......";
        $stmt->close();
        $conn->close();
    }
?>