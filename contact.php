
<?php
//require_once 'sendmail.php';
require_once 'admin/database.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';



$messagestat = '';
$messagec = '';

if (isset($_POST['submit'])) {
  $fullName = $_POST['FullName'];
  $email = $_POST['email'];
  $message = $_POST['message'];

$sql = "INSERT INTO `messages`(sendername, senderemail, messagebody) VALUES('$fullName', '$email', '$message')";
$queryCheck = mysqli_query($conn, $sql);

if ($queryCheck) {
    # code...
 $messagestat = '<p class="text-[30px] flex justify-between flex-row gap-4 block my-[20px] bg-gradient-to-r from-green-500 to-blue-500 text-white text-center px-[20px] rounded  shadow-xl py-[5px]"> <span>Message Succesfully Sent</span> <button class="text-red-500  bg-white hidemessageStat rounded px-2 cursor">X </button> </p>'  ;
} else {
    $messagestat = '<p class="text-[30px] block my-[20px] bg-gradient-to-r from-red-500 to-blue-500 text-white text-center px-[20px] rounded shadow-xl py-[5px]">Message Succesfully Sent</p>'  ;
};



// Initialize PHPMailer object
$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->username = "nzubestdesmond@gmail.com";
    $mail->password = "uhdmsqjsecxygism";
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port = 587;             

    // Set up email properties
    $mail->setFrom('nzubestdesmond@gmail.com', 'Desmond Nzubechukwu');
    $mail->addAddress($email, $fullName);
   
    $mail->isHTML(true);
    $mail->Subject = 'Message Received from ' . $email;
    $mail->Body = 'abugf ' . $email;

    // Send the email
    $mail->send();
    $messagec = "<span> Message successfully sent </span>";
} catch (Exception $e) {
    // Handle any errors that occur during sending
    $messagec = "<span> Message unsuccessfully sent: " . $mail->ErrorInfo . "</span>";
}
}
 /*


try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmailcom';
    $mail->SMTPAuth = true;
    $mail->username = 'nzubestdesmond@gmail.com';
    $mail->password = 'zzphaqntykwmsqmg';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 587;

    $mail->setFrom('nzubestdesmond@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->subject = 'Message Received from' . $email;
    $mail->body = "Name: $fullName <br> Email Address: $email  <br> Subject: $message";
    
    
    $mail->send();
    $messagec = "<span> Message unsuccessfully sent </span>";
 } catch (Exception $e) {
      //throw $th;
      $messagec = "<span> Message successfully sent </span>";
  }

*/

?>

<?php
include 'include.header.php'
?>

<main class='bg-white'>
    <div class='px-[20px] py-[70px]  pt-[150px]'>
        <div class='flex mm justify-center'>
        <?php echo  $messagestat; ?>
         
        </div>
          <h1 class='font-[700] text-center text-[30px] mb-[40px] uppercase'>Contact Us</h1>
          <div><?php echo $messagec ?></div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class='grid block gap-[20px] grid-cols-1 md:grid-cols-2 '>
            <div class='flex flex-col '>
                <label for="fullName" class='font-[400] text-slate-600 flex flex-row items-center gap-2  text-[25px]'><i class="fa-solid fa-user"></i>Full Name:</label>
                <input type="text" required placeholder='Input Full Name' class='outline-none  bg-slate-700 shadow-lg p-[10px] rounded text-[20px]' name="FullName" id="">
            </div>
            <div class='flex flex-col '>
                <label for="fullName" class='font-[400] text-slate-600 flex flex-row items-center gap-2 text-[25px]'><i class="fa-solid fa-envelope"></i>Email:</label>
                <input type="email" required placeholder='Input Your Email' class='outline-none shadow-lg p-[10px]  bg-slate-700 rounded text-[20px]' name="email" id="">
            </div>
            <div class='flex flex-col md:col-span-2'>
                <label for="message" class='font-[400] text-slate-600 flex flex-row items-center gap-2 text-[25px]'><i class="fa-solid fa-message"></i><span>Message:</span> </label>
                <textarea name="message" required placeholder='Write Your Message'  class='outline-none  bg-slate-700 shadow-lg h-[200px] p-[10px] rounded text-[20px]' id="message" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit" name='submit' class='bg-gradient-to-r from-slate-900 to-sky-900 px-[20px] rounded text-slate-100 text-[30px] font-[500]'>Send Message</button>
            </div>
        </form>
        
    </div>
</main>








<script src="javascript/index.js"></script>
<?php
include 'include.footer.php';
?>