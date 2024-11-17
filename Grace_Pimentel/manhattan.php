<?php
 $visitor  = $_POST['visitor'];
 $groupNum = $_POST['groupNum'];
 $vdate    = $_POST['vdate'];
 $place    = $_POST['fplace'];
 $rating   = $_POST['rating'];
 $choose   = $_POST['choose'];
 //RITISTprofessor@gmail.com
$destination_email = "gracegpimental23@gmail.com, RITISTprofessor@gmail.com";
$email_subject = "Manhattan, NY  -> visitor $visitor";
$email_body = "Visitor name -> $visitor\n";
$email_body .= "Group Size -> $groupNum\n";
$email_body .= "Date Visited -> $vdate\n";
$email_body .= "Favorite Place -> $place ";
$email_body .= "\nThings to do -> $choose\n ";
$email_body .= "Rating -> $rating\n";

$email_body .= "\n Updated March 2024 \n";
mail($destination_email, $email_subject, $email_body);
echo "Data Sent\n";

?>

<?php include 'header.php'; ?>
    
    
    <div class="thank-you-container">
        <h1>Thank You for Your Feedback!</h1>
        <p>We appreciate you taking the time to provide us with your feedback.</p>
        <p>Your input helps us improve our services.</p>
        
    </div>


<?php include 'footer.php'; ?>