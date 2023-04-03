<?php include 'admin.header.php' ?>


<?php




$sql = "SELECT * FROM home";
$check = mysqli_query($conn, $sql);

foreach ($check as $checked) {
  

?>

<div class='px-[30px]  '>
<form class='md:ml-[150px] flex flex-col gap-[40px]' action="\index.php" method="post">

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
    <input type="file"  value="" class='outline-none p-[10px] bg-white file:bg-white file:border-0 file: rounded text-[20px]' name="joinfightimgnew" id=""/> <input type='hidden' name='joinfightimgold' class='text-slate-200' value='<?= $checked['joinfightimg'] ?>' />
    <img src="" alt="" class='' srcset="./img/<?= $checked['joinfightimg'] ?>">
    </div>
    <div class='flex flex-col gap-5'>
    <textarea name="joinfightheader" id="" class='h-[100px] md:w-[500px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]'> <?= $checked['joinfightheader'] ?></textarea>
    <textarea name="" id="" class='h-[200px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'><?= $checked['joinfightdetail'] ?></textarea>
     <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="headerC" value='<?= $checked['joinfightbtn'] ?>' id="">

</div>
</div>
<hr>
<div class=' flex flex-col md:ml-[80px]  gap-[20px] md:flex-row justify-center'>
    <div class='flex flex-col'>
    <input type="file"  value="" class='outline-none p-[10px] bg-white file:bg-white file:border-0 file: rounded text-[20px]' name="img" id=""/> <input type='hidden' name='old' class='text-slate-200' value='<?= $checked['ourteamimg'] ?>' />
    <img src="" alt="" class='' srcset="./img/<?= $checked['ourteamimg'] ?>">
    </div>
    <div class='flex flex-col gap-5'>
    <textarea name="" id="" class='h-[70px] md:w-[500px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]'> <?= $checked['ourteamheader'] ?></textarea>
    <textarea name="" id="" class='h-[100px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'> <?= $checked['ourteamdetails'] ?> </textarea>
   <!-- <textarea name="" id="" class='h-[150px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'>We’re data-driven and on a mission to end the horrors of human trafficking.</textarea>-->


     <input type="text" class='text-[20px]  w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="headerC" value='<?= $checked['ourteambtn'] ?>' id="">

</div>
</div>
<hr>
<div class='md:ml-[130px] justify-center flex flex-col  gap-5'>
    <div class=' flex flex-col md:flex-row gap-5'>
        <input type="text"  class='h-[70px] md:w-[500px] font-[700] p-[20px] flex uppercase text-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]' name="" value='<?= $checked['emailheader'] ?>' id="">
        <input type="text"  class='h-[70px] md:w-[500px] font-[500] p-[20px] flex border text-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]' name="" value='<?= $checked['emailp1'] ?>' id="">
    </div>
    <div class='flex flex-col md:flex-row gap-5'>
        <textarea type="text" name=""  class='h-[120px] md:w-[500px] font-[500] p-[20px] flex  text-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[18px] w-[100%]'  id=""><?= $checked['emailp2'] ?></textarea>
        <input type="text" class='text-[20px]  w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="headerC" value='<?= $checked['emailbtn'] ?>' id="">

    </div>
</div>
</form>
</div>


<?php
}



?>


<?php include 'admin.footer.php' ?>