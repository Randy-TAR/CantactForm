<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        .form1{
            background-color: ;
            border: 2px solid grey;
            width: 570px;
            min-height: 350px;
            font-size: 30px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-top: 10px;
            border-radius: 10px;
        }
        .php{
            text-align: left;
            /* border: 2px solid  black; */
            font-size: 20px;
            width: 520px;
            min-height: 120px;
            /* background-color: white; */
            word-wrap: break-word;
        }
        input[type="text"]{
            padding: 10px;
            border: 1px solid gray;
            width: 90%;
        }
        textarea[type="text"]{
            padding: 10px;
            border: 1px solid gray;
            width: 90%;
        }
        button[type="submit"]{
            padding: 10px;
            border: 2px solid black;
            width: 93%;
            color: white;
        }

        .contact {
            padding: 2%;
            margin: 5px;
            background-color: white;
            border-radius: 5px;
            border: 2px solid gray;
        }
    </style>
</head>
<body>
 <center>
    <div class="form1">
    <p class="intro"><b>Contact Us</b></p>
        <form class="form" method="POST" action="cantactform.php">
            <input class="name" type="text" name="name" placeholder="Your Name" required><br><br>
            <input class="email" type="text" name="email" placeholder="Your Email" required><br><br>
            <textarea class="message" type="text" name="message" cols="30" rows="5" placeholder="Your Message" required></textarea><br>
            <button class="submit" type="submit" value="Send Message" style="background-color: rgb(100, 244, 100); ">Send Message</button><br>
        </form><br>
        <div class="php">
            <?php
            session_start();
            $input1=$_POST['name'];
            $input2=$_POST['email'];
            $input3=$_POST['message'];
            $input1b = "<b> $input1 </b>";
            $input2b = "<b>Email:</b> $input2";
            $input3b = "<b>Message:</b> $input3";
            $inputs = array($input1b, $input2b, $input3b);
            $_SESSION['storage'][] = $inputs;
            $alldata = $_SESSION['storage'];
        foreach($_SESSION['storage'] as $input){
            echo "<div class='contact'>";
            foreach($input as $key){
                echo $key,'<br>';
            }
        echo '</div>';
        }
        $inputs= [];
        // session_destroy();
            die();
            ?>
        </div>
    </div>
</center>
</body>
</html>