<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
<?php 
        $link = mysqli_connect("localhost", "root", "", "cinema_db");
?>
    <header></header><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.545143651392!2d36.818214414756694!3d-1.2602985990806782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17171a85a659%3A0xf457e5d6a2a53513!2sParklands%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1647035964405!5m2!1sen!2ske" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    
    <div class="contact-us-container">
        <div class="contact-us-section contact-us-section1">
            <h1>Contact</h1>
            <p>Contact us here </p>
            <form action="" method="POST">
                <input placeholder="First Name" name="fName" required><br>
                <input placeholder="Last Name" name="lName" ><br>
                <input placeholder="E-mail Address" name="eMail" required><br>
                <textarea placeholder="Enter your message !" name="feedback" rows="10" cols="30" required></textarea><br>
                <button type="submit" name="submit" value="submit">Send your Message</button>
                <?php
                    if(isset($_POST['submit'])){
                        $insert_query = "INSERT INTO 
                        feedbackTable ( senderfName,
                                        senderlName,
                                        sendereMail,
                                        senderfeedback)
                        VALUES (        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["eMail"]."',
                                        '".$_POST["feedback"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
            </form>
            
        </div>
        <div class="contact-us-section contact-us-section2">
            <h1>Address & Info</h1>
            <h3>Phone Numbers</h3>
            <p><a href="tel:01011391148">+254 796 712 716</a><br>
                <a href="tel:01011391148">+254 798 675 453</a></p>
            <h3>Address</h3>
            <p>Diamond Plaza , Parklands , Nairobi - P.O. Box 0505</p>
            <h3>E-mail</h3>
            <p><a href="mailto:cinemareservation@bue.edu.eg">info@bookmyshows.co.ke</a></p>
        </div>
    </div>
    <footer></footer>
    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>