<?php

echo "Jurusan yang anda pilih adalah :";
if (isset($_POST['lanjut'])) {

    $jurusan=$_POST['jurusan'];
    echo "<br>".$jurusan;
}

if($_POST["lanjut"]) {
    $recipient="febrylianiasli@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $jurusan=$_POST["jurusan"];
    $mailBody="Name: Anonim\nEmail Address: hayoo\n\nMessage: $jurusan";
    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("www.google.com"); // Set here redirect page or destination page
}



?>
