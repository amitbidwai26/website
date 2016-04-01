<?php 
    if(isset($_POST['submit'])){
        $to = "amit@bidwai.in"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address

        $name = $_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];

        $company_name = $_POST['company_name'];
        $location=$_POST['location'];
        
        $house_keeping=$_POST['house_keeping'];
        $delivery=$_POST['delivery'];
        $sales=$_POST['sales'];
        $marketing=$_POST['marketing'];
        $hotel_staff=$_POST['hotel_staff'];
        $customer_support=$_POST['cook'];
        
        $totalPeople=$_POST['total_people'];
        
        $message=$_POST['message'];

        $subject = "Requirement Submitted";
        $subject2 = "Copy of your form submission";



       $messagetosend = "Name:". $name . "\n\nEmail : ". $email ."\n\nPhone Number: ". $phone . "\n Company Name:" . $company_name ."\nFor Location".$location."\n\nHas requirement for the following:\n\n". $house_keeping ."\n". $delivery . "\n" . $sales . "\n" . $marketing . "\n" . $hotel_staff . "\n" . $cook."\n\nTotal People Required:". $totalPeople . "\n" . $message . " \n\n Regards Team\nKickstart Jobs";





       $messagetocopy = "Copy of details submitted\n\nName:". $name . "\n\nEmail : ".$email ."\n\nPhone Number: ". $phone . "\n Company Name:" . $company_name ."\nFor Location".$location."\n\nHas requirement for the following:\n\n". $house_keeping ."\n". $delivery . "\n" . $sales . "\n" . $marketing . "\n" . $hotel_staff . "\n" . $cook."\n\nTotal People Required:". $totalPeople . "\n" . $message . " \n\n Regards Team\nKickstart Jobs";


        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        if(isset($_POST['phone'])){
                mail($to,$subject,$messagetosend,$headers);
               mail($from,$subject2,$messagetocopy,$headers2); // sends a copy of the message to the sender
        }
        echo "<center><br>Copy of information is sent via Mail. <br><br> Thank you " . $name . ", <br><br>Our Sales Executive will contact you shortly.</center>";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
?>
<!-- Footer Start-->
<?php include 'thank.php';?>
<!-- Footer End-->