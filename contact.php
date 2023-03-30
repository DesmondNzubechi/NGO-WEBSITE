
<?php

require_once 'admin/database.php';

$messagestat = '';

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


}
 
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









<?php
include 'include.footer.php'
?>