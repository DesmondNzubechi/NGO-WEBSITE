


<?php include 'admin.header.php'; ?>

<?php

$checkSub = "SELECT * FROM subscribers";
$confirmSub = mysqli_query($conn, $checkSub);
$totalSub = mysqli_num_rows($confirmSub);


$checkMsg = "SELECT * FROM messages";
$confirmMsg = mysqli_query($conn, $checkMsg);
$totalMsg = mysqli_num_rows($confirmMsg);
?>

 <div class='w-full'>
  <div class='text-center m-[20px]'><h1 class='text-[30px] font-[700] md:ml-[150px] '>Welcome To Admin Dashboard</h1></div>
<div class='flex flex-col md:flex-row text-white md:ml-[150px] justify-center gap-[40px]  justify-self-auto   p-[30px] gap-[40px] item-start '>
    <div class='flex justify-center'>
<div class='p-[20px] rounded-lg  min-w-[300px]  bg-gradient-to-r from-slate-900 to-sky-900 shadow-2xl  py-[30px]  text-center  h-fit  '>
 
  <h1 class='text-[30px] font-bold  py-[7px] px-[20px] '><?php echo $totalSub ?></h1>
    <p class='text-[30px]  uppercase my-[20px] font-[700]'>Subscribers</p>
    <!--<a href="" class=" bg-gradient-to-r from-purple-500 to-blue-500 font-[500] rounded px-[20px] py-[5px] text-[30px]">View</a>-->
</div> 
</div>
<div class='flex justify-center'>
<div class='p-[20px] rounded-lg min-w-[300px]   text-white  bg-gradient-to-r from-slate-900 to-sky-900   py-[50px]  text-center  h-fit  '>
    <div class=''>
    <h1 class='text-[30px] font-bold  py-[7px] px-[20px]  rounded-full'>3</h1>
    
    </div>
    <p class='text-[30px] uppercase font-[700]'>Post</p>
</div> 
</div>
<div class='flex justify-center'>
<div class='p-[20px] rounded-lg min-w-[300px]   bg-gradient-to-r from-slate-900 to-sky-900 shadow-2xl  py-[50px]  text-center  h-fit  '>
    <div class=''>
    <h1 class='text-[30px] font-bold  py-[7px] px-[20px]  rounded-full'><?php echo $totalMsg ?></h1>
    
    </div>
    <p class='text-[30px] uppercase font-[700]'>Messages</p>
</div> 
</div>
</div>
<?php include 'admin.footer.php' ?>