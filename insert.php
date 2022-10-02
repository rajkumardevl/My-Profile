<?php

$conn = new mysqli('localhost', 'root', '', 'raj');
if ($conn == TRUE) {
    // echo 'Connection Successfull';
}

else {
    // echo 'Connection failed';
}



    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $massage = $_POST['massage'];

    $qry = "INSERT INTO insert_massage(name,mobile,email,subject,massage) VALUES ('$name','$mobile','$email','$subject','$massage')";
    $res = mysqli_query($conn, $qry);

    if ($res) {
        echo "<script>
                alert('Data Inserted Successfull');
                window.location.href='Raj_developer.html';  
              </script>";
    }
    else {
        echo "<script>
                alert('Data Inserted Failed Please Try Again');
                window.location.href='Raj_developer.html';  
              </script>";
    }

    ?>