<?php include 'admin.header.php' ?>

   <?php


$sql = "SELECT * FROM addt";
$sqlcheck = mysqli_query($conn, $sql);




if ($sqlcheck) {
    # code...
    foreach ($sqlcheck as $checker) {

        $adminame = $checker['adname'];
        $adminemail= $checker['ademail'];
        $adminpwd = $checker['adpw'];
        }
    }
    
$totalErr = $confirmpwdErr = $oldpwd = $newpwd = $confirmnewpwd =  $oldpwdErr = $emptynewpwd = $emptyoldpwd = $emptyconfirmpwd = '';

    if (isset($_POST['update'])) {
        # code...
$oldpwd = $_POST['oldpwd'];
$newpwd = $_POST['newpwd'];
$confirmnewpwd = $_POST['confirmnewpwd'];


if(empty($oldpwd)) {
    # code...
    $emptyoldpwd = 'Please input old password';
} elseif ($oldpwd !== $adminpwd) {
    # code...
    $oldpwdErr = 'Password does\'nt match with old one';
} elseif (empty($newpwd)) {
    # code...
    $emptyoldpwd = 'Please input new password';
} elseif (empty($confirmnewpwd)) {
    # code...
    $emptyoldpwd = 'Please confirm new password';
} elseif ($newpwd !== $confirmnewpwd) {
    # code...
    $confirmpwdErr = 'Password does not match';

} else {
    //$hashedp = password_hash($newpwd, PASSWORD_DEFAULT);
    $sqlup = "UPDATE addt SET `adpw`='$$newpwd' WHERE `adid`=1";
    $checkup = mysqli_query($conn, $sqlup);

    if ($checkup) {
        # code...
        header('Location: admin/adminprofile.php');
    } else {
        # code...

        $totalErr = 'Something went wrong please try again';
    };
    

}

    }


    ?>
    

<div class='px-[20px] md:ml-[150px] flex flex-row justify-center gap-5'>
    <div>

<div class='flex flex-row justify-center uppercase'>
    <h1 class='text-slate-600  font-[700] text-[30px] uppercase'>Edit Admin Profile</h1>
</div>
<form class=' gap-[30px] w-full my-[20px] rounded-lg shadow-2xl  px-[20px] py-[10px] bg-gradient-to-r from-slate-900 to-slate-600 grid grid-cols-1 md:grid-cols-2 gap-5 ' action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="username">Username:</label>
    <input disabled value='<?= $adminame ?>' type="text" placeholder='Input Username' class='bg-slate-400 uppercase font-[700]  p-2 text-[15px] text-white outline-none rounded w-full border-b' name="username" id="">
</div>
<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="email">Email Address</label>
    <input disabled value='<?= $adminemail ?>'  placeholder='Input Email' class='bg-slate-400 uppercase font-[700] p-2 text-[15px] text-white outline-none rounded border-b w-full' type="email" name="email" id="">
</div>

<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="oldpwd">Old Password</label>
    <input  placeholder='Input Old Password' value='<?php echo $oldpwd ?>' class='bg-slate-900 p-2 text-[20px] text-white outline-none rounded border-b w-full' type="password" name="oldpwd" id="">
    <span class='text-red-500 font-[500] text-[20px]'><?php echo $emptyoldpwd ?></span>
    <span class='text-red-500 font-[500] text-[20px]'><?php echo $oldpwdErr ?></span>
</div>
<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="newpwd">New Password</label>
    <input value='<?php echo $newpwd ?>'  placeholder='Input New Password' class='bg-slate-900 p-2 text-[15px] text-white outline-none rounded border-b w-full' type="password" name="newpwd" id="">
    <span class='text-red-500 font-[500] text-[20px]'><?php echo $emptynewpwd ?></span>
   
</div>
<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="oldpwd">Confirm Password</label>
    <input  value='<?php echo $confirmnewpwd ?>' placeholder='Confirm New Email' class='bg-slate-900  p-2 text-[15px] text-white outline-none rounded border-b w-full' type="password" name="confirmnewpwd" id="">
    <span class='text-red-500 font-[500] text-[20px]'><?php echo $emptyconfirmpwd ?></span>
    <span class='text-red-500 font-[500] text-[20px]'><?php echo $confirmpwdErr ?></span>
</div>

<button type="submit" name='update' class='bg-green-700 text-[20px]  w-full text-white font-[700]  py-[5px] rounded shadow-2xl '>Update Change</button>


</form>
       
</div>
</div>





<?php include 'admin.footer.php' ?>




