<?php include 'admin.header.php' ?>

    <?php
    
$sql = "SELECT *  FROM addt";
$check = mysqli_query($conn, $sql);
 

foreach($check as $checker){

  ?>
  <div class='flex flex-row justify-center items-center'>
  <div class="bg-slate-100 flex py-[50px] flex-col justify-center items-start gap-[20px] px-[50px] rounded-lg shadow-2xl ">
    <div  class='flex flex-row gap-4 justify-center'>
     <h1 class="uppercase font-[700] text-[20px] ">Username:</h1>
   <p class='text-[20px] font-[400] ' disabled><?= $checker['adname'] ?></p>
    </div>
    <div class='flex flex-row gap-4 justify-center'>
     <h1 class="uppercase font-[700] text-[20px] ">Email Address:</h1>
   <p class='text-[20px] font-[400] '><?= $checker['ademail'] ?></p>
    </div>

    <a href="editadminprofile.php" class='self-center bg-gradient-to-r from-slate-500 to-blue-900 px-[20px] hover:text-[26px] hover:transition hover:ease-out hover:duration-500 hover:text-slate-200 text-white py-1 text-[25px] rounded shadow-2xl font-[400]'>Edit Profile</a>
  </div>
</div>
<?php

}

    ?>









<?php include 'admin.footer.php' ?>




