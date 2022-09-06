<?php

//Checking if button is clicked or not...
    if (isset($_POST['contact-us'])) {

    //Getting Values From Form...
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $date = date("Y-m-d");

   //Stablishing Connection...
   include 'Admin/connection.php';     
    //Checking if fields are not empty..
      //Insert Query for Mysql...
        $query = "INSERT INTO `contact`(`name`,`email`,`phone`,`subject`,`message`,`date`) VALUES ('{$name}','{$email}','{$phone}','{$subject}','{$message}','{$date}')";
        $res = mysqli_query($con, $query);

      //Redirection To Another Page...
      
        header("Location: contact-us.php?message=success&name=$name");
        
}
?>