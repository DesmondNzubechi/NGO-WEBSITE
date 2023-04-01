


<?php include 'admin.header.php'; ?>

<?php

$checkSub = "SELECT * FROM subscribers";
$confirmSub = mysqli_query($conn, $checkSub);
$totalSub = mysqli_num_rows($confirmSub);


$checkMsg = "SELECT * FROM messages";
$confirmMsg = mysqli_query($conn, $checkMsg);
$totalMsg = mysqli_num_rows($confirmMsg);
?>

 <div class='w-full md:ml-[150px]'>
    <div class='flex justify-around items-center'>
  <div class="text-center m-[20px] gap-5 flex flex-col items-center px-[20px] md:px-[200px]  py-[50px] rounded-lg h-full after:bg-slate-900 after:rounded-lg after:opacity-[30%] after:left-0 after:right-0 after:w-full after:top-0 after:bottom-0 relative after:absolute bg-cover bg-[url('./img/bg.avif')]">
    <h1 class='text-[30px] font-[600] text-white relative z-[10] uppercase'>Welcome To Admin Dashboard</h1>
   
   <a href="" class=' px-3 py-2 shadow-2xl relative z-[1] bg-gradient-to-r from-sky-900 to-blue-700 px-[5px] hover:bg-gradient-to-r hover:from-slate-900 hover:to-blue-900 transition ease-in duration-500 px-[5px] py-1 text-[20px] text-slate-100 rounded shadow-lg font-[500]    '><span> Visit Site</span> <i class="fa-solid fa-link"></i></a>
                        
</div>
  </div>
  <div class='flex flex-col md:flex-row text-white  justify-center gap-[40px]  justify-self-auto   p-[30px] gap-[40px] item-start '>
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