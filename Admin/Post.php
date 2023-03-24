
<?php require_once 'database.php'; ?>
<?php include 'header.php' ?>

<div class='py-[30px] flex flex-row justify-around gap-[20px] px-[20px]'>
    <h1 class='text-[30px] font-[700] uppercase '>Post</h1>
    <a href="addpost.php" target="_blank" class=' bg-sky-500 p-[10px] text-[20px] font-[600] rounded-lg shadow-2xl '>Add Post</a>
</div>
<div class='flex justify-center'>
<div class='my-[20px] grid  grid-cols-1 md:grid-cols-2 px-[20px] gap-[20px] overflow-auto'>
<!--<table class='table-auto  border-separate border-spacing-[20px] border border-slate-400'>
    <thead>
        <tr>
            <th class='text-[20px] uppercase font-[700]'>Post ID</th>
            <th class='text-[20px] uppercase font-[700]'>Headline</th>
            <th class='text-[20px] uppercase font-[700]'>Description</th>
            <th class='text-[20px] uppercase font-[700]'>Post Image</th>
        </tr>
    </thead>
    <tbody>-->
<?php
$sql = "SELECT * FROM post";
$check = mysqli_query($conn, $sql);
$fina = mysqli_num_rows($check);
if ($fina > 0) {
    # code...
    foreach ($check as $acc) {
        # code...
        ?>

       <div class='flex px-[20px] h-fit w-fit flex-col gap-[15px] py-[20px] justify-center shadow-2xl border-slate-300 border'>
        <div class='flex flex-row items-center justify-start gap-[20px]'>
            <h1 class='text-[20px] font-[700]'><?= $acc['headline'] ;?></h1>
        </div>
        <div class=' flex flex-col gap-[20px] py-[10px]'>
            <p class=''>
                <?= $acc['description']; ?>
            </p>
            <p class='text-[20px] font-bold '><?= $acc['postdate'] ?>  </p>
            <p><?= $fina ?></p>
        <?php  
        
        if($acc['postimg1'] !== '') {
            # code...
            ?>
            <img src="img/<?= $acc['postimg1']?>" class='h-[400px] w-[400px] ' alt="" srcset="">
        
            <?php

        } else {
            # code...
            ?>
            <p></p>
            <?php
        }
?>
           </div>
        <div class='flex flex-row gap-[20px] justify-start'>
            <a href="mycode.php?id=<?= $acc['postid']?>"  class='bg-[green] px-[10px] py-[5px] shadow-2xl text-[20px] rounded text-[#fff] font-[500] '>Publish</a>
            <a href="postedit.php?id=<?=$acc['postid']?>"  class='bg-yellow-500  px-[10px] py-[5px] shadow-2xl text-[20px] rounded text-[black] font-[500] '>Edit</a>
            <a href="mycode.php?id=<?= $acc['postid']?>"   class='bg-red-600 px-[10px] py-[5px] shadow-2xl text-[20px] rounded text-slate-50 font-[500] '>Delete</a>
          
         <!-- <form action="" method="post"><button type="submit">Publish</button></form>
          <form action="postedit.php" method="post"><button type="submit" class='bg-yellow-500  px-[10px] py-[5px] shadow-2xl text-[20px] rounded text-[black] font-[500] '>Edit</button></form>
          <form action="" method="post"><button type="submit" class='bg-red-600 px-[10px] py-[5px] shadow-2xl text-[20px] rounded text-slate-50 font-[500] '>Delete</button></form>
    --> </div>
       </div>
      <?php
    }
} else {
    # code...
}
 ?>
  <!--
    </tbody>
    
</table>
-->
</div>
</div>

<?php include 'footer.php' ?>