<?php include 'admin.header.php' ?>


<?php
if (isset($_POST['updatehome'])) {
    # code...

$hero1 = $_POST['Hero1'];
$hero2 = $_POST['Hero2'];
$heroc = $_POST['heroC'];
$heros = $_POST['heroS'];
$joinfightimgnew = $_FILES['joinfightimg']['name'];
$joinfightheader = $_POST['joinfightheader'];
$joinfightdetail = $_POST['joinfightdetail'];
$joinfightbtn = $_POST['joinfightbtn'];
$ourteamimgnew = $_FILES['ourteamimg']['name'];
$ourteamheader = $_POST['ourteamheader'];
$ourteamdetails = $_POST['ourteamdetails'];
$ourteambtn = $_POST['ourteambtn'];
$emailheader = $_POST['emailheader'];
$emailp1 = $_POST['emailp1'];
$emailp2 = $_POST['emailp2'];
$emailbtn = $_POST['emailbtn'];
$ourteamimgold = $_POST['ourteamimgold'];
$joinfightimgold = $_POST['joinfightimgold'];

$ourteamimgxt = pathinfo($ourteamimgnew, PATHINFO_EXTENSION);
$joinfightimgxt = pathinfo($joinfightimgnew, PATHINFO_EXTENSION);
$ourteamimgmain;
$joinfightimgmain;

if ($ourteamimgnew == null) {
  $ourteamimgmain = $ourteamimgold;
} else {
   $ourteamimgmain = time().'.'.$ourteamimgxt;
   move_uploaded_file($_FILES['ourteamimgnew']['tmp_name'], 'img/'.$ourteamimgmain);
};

if ($joinfightimgnew == null) {
    # code...
    $joinfightimgmain = $joinfightimgold;
} else {
    # code...
    $joinfightimgmain = time().'.'.$joinfightimgxt;
    move_uploaded_file($_FILES['joinfightimgnew']['tmp_name'], 'img/'.$joinfightimgmain);
};


$mysql = "UPDATE home SET Hero1='$hero1', Hero2='$hero2',
 Heroc='$heroc', Heros='$heros', joinfightimg='$joinfightimgmain',
joinfightheader='$joinfightheader', joinfightdetail='$joinfightdetail',
joinfightbtn='$joinfightbtn', ourteamimg='$ourteamimgmain', ourteamheader='$ourteamheader',
ourteam='$ourteamdetails', ourteambtn='$ourteambtn', emailheader='$emailheader', emailp1='$emailp1',
emailp2='$emailp2', emailbtn='$emailbtn'";
$checkUpdate = mysqli_query($conn, $mysql);

if ($checkUpdate) {
    # code...
    header('Location: /admin1.php');
};



};

?>

<?php

$sql = "SELECT * FROM home";
$check = mysqli_query($conn, $sql);

foreach ($check as $checked) {
  

?>

<div class='px-[30px]  '>
<form class='md:ml-[150px] flex flex-col gap-[40px]' action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class='md:ml-[150px]'>
    <textarea name="Hero1" id=""  class='h-[200px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[90%]'> <?= $checked['Hero1'] ?></textarea>
</div>
<div class='md:ml-[150px]'>
    <textarea name="Hero2" id="" class='h-[150px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[90%]'> <?= $checked['Hero2'] ?></textarea>
</div>
<div class='flex md:flex-row flex-col  gap-5 text-center md:ml-[150px]' gap-[10px]'>
    <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl text-slate-900 font-[500] outline-0' name="heroC" value='<?= $checked['Heroc'] ?>' id="">
    <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="heroS" value='<?= $checked['Heros'] ?>' id="">
</div>
<hr>
<div class=' flex flex-col md:ml-[80px] gap-[20px] md:flex-row justify-center'>
    <div class='flex flex-col'>
    <input type="file"  value="" class='outline-none p-[10px] bg-white file:bg-white file:border-0 file: rounded text-[20px]' name="joinfightimg" id=""/> <input type='hidden' name='joinfightimgold' class='text-slate-200' value='<?= $checked['joinfightimg'] ?>' />
    <img src="" alt="" class='' srcset="./img/<?= $checked['joinfightimg'] ?>">
    </div>
    <div class='flex flex-col gap-5'>
    <textarea name="joinfightheader" id="" class='h-[100px] md:w-[500px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]'> <?= $checked['joinfightheader'] ?></textarea>
    <textarea name="joinfightdetail" id="" class='h-[200px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'><?= $checked['joinfightdetail'] ?></textarea>
     <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="joinfightbtn" value='<?= $checked['joinfightbtn'] ?>' id="">

</div>
</div>
<hr>
<div class=' flex flex-col md:ml-[80px]  gap-[20px] md:flex-row justify-center'>
    <div class='flex flex-col'>
    <input type="file" name="ourteamimg"  value="" class='outline-none p-[10px] bg-white file:bg-white file:border-0 file: rounded text-[20px]'  id=""/> <input type='hidden' name='ourteamimgold' class='text-slate-200' value='<?= $checked['ourteamimg'] ?>' />
    <img src="" alt="" class='' srcset="./img/<?= $checked['ourteamimg'] ?>">
    </div>
    <div class='flex flex-col gap-5'>
    <textarea name="ourteamheader" id="" class='h-[70px] md:w-[500px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]'> <?= $checked['ourteamheader'] ?></textarea>
    <textarea name="ourteamdetails" id="" class='h-[100px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'> <?= $checked['ourteamdetails'] ?> </textarea>
   <!-- <textarea name="" id="" class='h-[150px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'>We’re data-driven and on a mission to end the horrors of human trafficking.</textarea>-->


     <input type="text" name='ourteambtn' class='text-[20px]  w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0'  value='<?= $checked['ourteambtn'] ?>' id="">

</div>
</div>
<hr>
<div class='md:ml-[130px] justify-center flex flex-col  gap-5'>
    <div class=' flex flex-col md:flex-row gap-5'>
        <input type="text"  class='h-[70px] md:w-[500px] font-[700] p-[20px] flex uppercase text-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]' name="emailheader" value='<?= $checked['emailheader'] ?>' id="">
        <input type="text"  class='h-[70px] md:w-[500px] font-[500] p-[20px] flex border text-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]' name="emailp1" value='<?= $checked['emailp1'] ?>' id="">
    </div>
    <div class='flex flex-col md:flex-row gap-5'>
        <textarea type="text"  class='h-[120px] md:w-[500px] font-[500] p-[20px] flex  text-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[18px] w-[100%]' name="emailp2"  id=""><?= $checked['emailp2'] ?></textarea>
        <input type="text" class='text-[20px]  w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="emailbtn" value='<?= $checked['emailbtn'] ?>' id="">

    </div>
</div>
<div class='md:ml-[130px] justify-center flex'>
<input type="submit" class='text-[20px]  w-fit text-center p-[10px] rounded shadow-xl bg-green-500 text-slate-50 font-[500] outline-0' name="updatehome" value='Update Change' id="">
</div>
</form>
</div>


<?php
}



?>


<?php include 'admin.footer.php' ?>