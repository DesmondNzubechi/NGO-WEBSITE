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
    
$oldpwdErr = $confirmpwdErr = $emptynewpwd = $emptyoldpwd = $emptyconfirmpwd = '';

    if (isset($_POST['update'])) {
        # code...
$oldpwd = $_POST['oldpwd'];
$newpwd = $_POST['newpwd'];
$confirmnewpwd = $_POST['confirmnewpwd'];



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
    <input  placeholder='Input Old Password' class='bg-slate-900 p-2 text-[20px] text-white outline-none rounded border-b w-full' type="text" name="oldpwd" id="">
</div>
<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="newpwd">New Password</label>
    <input  placeholder='Input New Password' class='bg-slate-900 p-2 text-[15px] text-white outline-none rounded border-b w-full' type="text" name="newpwd" id="">
</div>
<div class='flex flex-col items-start gap-0'>
    <label class='text-[20px]  text-white font-[400]' for="oldpwd">Confirm Password</label>
    <input  placeholder='Confirm New Email' class='bg-slate-900  p-2 text-[15px] text-white outline-none rounded border-b w-full' type="text" name="confirmoldpwd" id="">
</div>

<button type="submit" name='update' class='bg-green-700 text-[20px]  w-full text-white font-[700]  py-[5px] rounded shadow-2xl '>Update Change</button>


</form>
       
</div>
</div>





<?php include 'admin.footer.php' ?>




