
<?php 
require_once 'database.php';
$passwordErr = $emailErr = $passwordInput = $emailInput = '';
session_start();

/*if (isset($_POST['submit'])) {
    # code...
    $email = $_POST['email'];
    $password = $_POST['password'];

$passwordInput = $password;
$emailInput = $emailInput;

    if (empty($email)) {
       $emailErr = 'Please enter email';
    } //elseif(filter_var($email, FILTER_SANITIZE_EMAIL)) {
       // $emailErr = 'Invalid Email'; }
     elseif(empty($password)) {
        $passwordErr = 'Please Input Password';
    } else {
        $sql = "SELECT * FROM `users` WHERE useremail='$email' AND userpassword='$password'";
        $result = mysqli_query($conn, $sql);
      if ($result) {
        # code...
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            # code...
            header('Location: /OOP_PHP/index.php');
        } else{
            $passwordErr = 'Make Sure Your Password Is Correct';
            $emailErr = 'Make Sure Your Email Is Correct ';
            }
      }
    }
    



}*/


if (isset($_POST['submit'])) {
    # code...
    $email = $_POST['email'];
    $password = $_POST['password'];

    $passwordInput = $password;
$emailInput = $email;


$sql = "SELECT * FROM addt";
$sqlcheck = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$adminP = $sqlcheck['adpw'];
$adminE = $sqlcheck['ademail'];
$_SESSION['id'] = $sqlcheck['adid'];

if (empty($email)) {
   $emailErr = 'Please input email';
} elseif (empty($password)) {
    $passwordErr = 'Please input password';
} elseif (empty($email) && empty($password)) {
    # code...
    $emailErr = 'Please input email';
    $passwordErr = 'Please input password';
} elseif ($adminP !== $password) {
  $passwordErr = 'Wrong Password';
} elseif ($adminE !== $email) {
    $emailErr = 'Wrong email address';

} elseif ($adminE !== $email  && $adminP !== $password ) {
    $passwordErr = 'Wrong Password';
    $emailErr = 'Wrong email address';
} elseif ($adminE == $email  && $adminP == $password ) {
    # code...

    if (isset($_SESSION['id'])) {
        # code...
        header('Location: admin1.php');
    }
    
}


}

?>


<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class='bg-slate-200 overflow-x-hidden'>
 <!--<header class='bg-slate-900 flex flex-row items-center justify-between px-[20px] py-[30px]'>
 <div><h1 class='text-[25px] text-[white] font-bold'>NGO WEBSITE</h1></div>

        <button><i class="fa-solid fa-user bg-gray-500 p-[6px] rounded-full text-[35px] "></i></button>
  

 </header>-->
<div class='flex items-center flex-row justify-center'>

<form  class="shadow-2xl bg-[#fff] rounded-xl py-[20px] px-[20px] my-[50px]" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

<h1 class="text-[23px] uppercase font-[700] text-center my-[10px]">Login Here</h1>

<div class='w-full'>
<input type="email" value="<?php $emailInput; ?>" class='border w-full border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="email" placeholder='Email Address' id="">
<br><pan class=" text-[red] text-[20px] font-[500] "><?php echo $emailErr  ?></span>
</div>
<div>
<div class='w-full'>
<input type="password" value="<?php $passwordInput; ?>" class='border w-full border-sky-500 text-center my-[10px] text-[20px] outline-none rounded-[5px] p-[5px]' name="password" placeholder='Password' id="">
<br><pan class=' text-[red] text-[20px] font-[500] '><?php echo $passwordErr  ?></span>
</div>
<div class='w-full'>
<input type="submit" name='submit' class='bg-sky-500 w-full    text-[#fff] text-center focus:border-gray-700 border text-center my-[10px] text-[25px] outline-none rounded-[5px] p-[5px]' value="Login">

</div>
</form>
</div>
<?php include_once('footer.php') ?>




