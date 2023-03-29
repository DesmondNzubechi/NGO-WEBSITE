<?php
include 'include.header.php'
?>
<?php

$sql = "SELECT * FROM home";
$check = mysqli_query($conn, $sql);
//$checkr = mysqli_nums_row($check);

if ($check) {
    # code...
    foreach ($check as $checker) {
        # code...
    ?>
    <main>
    <div class="pt-[200px] rounded-b-[50px] after:rounded-b-[50px] flex justify-center md:text-center text-start  items-center px-[20px] bg-cover relative after:absolute   h-[100vh] after:opacity-[70%] after:top-0 after:left-0 after:right-0 after:h-[100%] after:bg-slate-900 bg-[url('./admin/img/ng.jpg')] pb-[100px]">
        <div class='flex flex-col max-w-[700px] gap-[40px] '>
        <div class=''>
        <h1 class='relative text-white text-[25px] md:text-[40px] uppercase font-[700] z-[1]'><!--Donor-funded tech to take down human traffickers.--> <?=$checker['Hero1']; ?> </h1>
    </div>
    <div>
        <p class='relative text-slate-200 text-[17px] md:text-[20px] font-[500]  z-[1] '><?=$checker['Hero2']; ?> </p>
    </div>
    <div class='flex flex-row justify-center gap-[20px]'>
        <a href="" class='relative bg-slate-50 px-[10px] py-[5px] rounded text-slate-900 md:text-[30px] text-[20px] shadow-2xl  z-[1]'><?=$checker['Heroc']; ?> </a>
        <a href="" class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white md:text-[30px] text-[20px] shadow-2xl z-[1]'><?=$checker['Heros']; ?> </a>
    </div>
        </div>
    
    </div>

<div class='py-[20px] px-[20px] min-h-[100vh] flex flex-col gap-[30px] md:flex-row justify-around items-center '>
   
        <img class='rounded' src="./admin/img/<?=$checker['joinfightimg']; ?> " alt="" srcset="">
   
    <div class='flex flex-col  gap-[30px] max-w-[600px]'>
        <h1 class='font-[600] leading-[140%] uppercase text-[25px] md:text-[30px]'><?=$checker['joinfightheader']; ?> </h1>
        <p class='font-[400] text-[17px]  md:text-[20px]'><?=$checker['joinfightdetail']; ?> </p>
        <a href="" class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white w-fit text-[25px] md:text-[30px] shadow-2xl z-[1]'><?=$checker['joinfightbtn']; ?> </a>
    </div>
</div>


<div class='py-[50px] px-[20px] bg-slate-800 min-h-[100vh] flex flex-col gap-[30px] md:flex-row justify-around items-center '>
   
        <img class='rounded' src="./admin/img/<?=$checker['ourteamimg']; ?> " alt="" srcset="">
   
    <div class='flex flex-col  gap-[30px] max-w-[600px]'>
        <h1 class='font-[600] text-slate-300 leading-[140%] uppercase text-[25px] md:text-[30px]'><?=$checker['ourteamheader']; ?></h1>
        <p class='font-[400] text-slate-400 text-[17px] md:text-[20px]'>We’re a team of special ops veterans, former intelligence professionals, former law enforcement, analysts and engineers.</p>
        <p class='font-[400]  text-slate-400 text-[17px] md:text-[20px]'>We’re data-driven and on a mission to end the horrors of human trafficking.</p>
        <a href="" class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white w-fit text-[25px] md:text-[30px] shadow-xl z-[1]'>About Us</a>
    </div>
</div>

<div class=' px-[20px] py-[100px] gap-[30px] flex flex-col md:flex-row justify-around items-start '>
    <div class='flex flex-col  gap-[20px] '>
        <h1 class='md:text-[30px] text-[25px] font-[600] uppercase'>Receive updates from Us</h1>
        <p class='md:text-[25px] text-[20px] font-[400] '>Subscribe to our monthly newsletter.</p>
       <p class='md:text-[25px] text-[20px] font-[400]'>We'll help you stay informed on our fight against human trafficking. </p>
    </div>
    
    <form class='flex  flex-col   gap-[10px] items-start' action="" method="post">
        
        <label class='text-[30px] font-[300] mb-[-15px] flex flex-row gap-[10px] items-center '  for="email"><i class="fa-solid fa-envelope"></i> <span> Email</span></label>
        <input class=' py-[10px] max-w-[400px] md:w-[600px]  px-[20px] outline-0 rounded text-[20px] bg-transparent border shadow-2xl ' type="email" name="email" id="email" placeholder='Input Your Email '>
   
    <input class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white w-full  text-[30px] shadow-xl z-[1]' type="button" value="Subscribe">
</form>     
</div>
<div class=' bg-[url("./admin/img/lanter.avif")] relative after:bg-slate-900 after:absolute after:top-0 after:bottom-0 after:opacity-[80%] after:w-full flex flex-col text-center justify-center gap-[30px] items-center text-white px-[30px] py-[100px] shadow-2xl after:rounded-b-[20px] rounded-b-[20px] my-[20px] after:rounded-t-[50px] rounded-t-[50px]'>
    <div class='flex relative z-[1] flex-col  gap-2 my-5'>
        <h1 class='  text-[25px]  md:text-[30px] font-[600] leading-[120%] uppercase'>You can combat human trafficking</h1>
        <p class=' text-[17px] md:text-[20px] font-[300] text-slate-200'>Explore three simple ways to show your support and join a community committed to change.</p>
    </div>
    <div class='flex relative z-[1] flex-col md:flex-row justify-around gap-[25px]'>
<div class='bg-[transparent] backdrop-blur-2xl shadow-2xl h-fit rounded-lg shadow-2xl flex flex-col gap-[15px] py-[25px] px-[10px]'>
    <span>
    <i class="fa-sharp fa-solid fa-dollar-sign text-[70px] rounded-full py-[8px] px-[24px] bg-white text-slate-900 border"></i>
    </span>
<h3 class='text-[30px] uppercase '>donate</h3>
<p class=' text-[20px] font-[300] text-slate-300'>Your donation will equip law enforcement with the tools they need to take down criminals.</p>
<p>
<a href="" class=' bg-slate-300 font-[700] rounded-lg uppercase shadow-2xl text-slate-900 py-[10px] px-[20px] '>Donate</a>
</p>
</div>
<div class='bg-[transparent] backdrop-blur-2xl shadow-2xl h-fit rounded-lg shadow-2xl flex flex-col gap-[15px] py-[25px] px-[10px]'>
    <span>
   
    <i class="fa-duotone fa-volume-high text-[70px] rounded-full py-[8px] px-[24px] bg-white text-slate-900 border"></i>
    </span>
<h3 class='text-[30px] uppercase '>ADVOCATE</h3>
<p class=' text-[20px] font-[300] text-slate-300'>Rally your friends and family around the solution to ending human trafficking in our lifetime.</p>
<p>
<a href="" class=' bg-slate-300 font-[700] rounded-lg uppercase shadow-2xl text-slate-900 py-[10px] px-[20px] '>ADVOCATE</a>
</p>
</div>
<div class='bg-[transparent] backdrop-blur-2xl shadow-2xl h-fit rounded-lg shadow-2xl flex flex-col gap-[15px] py-[25px] px-[10px]'>
    <span>
   
    <i class="fa-sharp fa-solid fa-cart-shopping text-[60px] rounded-full py-[10px] px-[10px] bg-white text-slate-900 border"></i>
    </span>
<h3 class='text-[30px] uppercase '>SHOP</h3>
<p class=' text-[20px] font-[300] text-slate-300'>You’ll look sharp and show support for a great cause. All proceeds directly fund the fight to end human trafficking.</p>
<p>
<a href="" class=' bg-slate-300 font-[700] rounded-lg uppercase shadow-2xl text-slate-900 py-[10px] px-[20px] '>SHOP</a>
</p>
</div>

    </div>
</div>

</main>

<?php
   }
}

?>
<!--
<main>
    <div class="pt-[200px] rounded-b-[50px] after:rounded-b-[50px] flex justify-center md:text-center text-start  items-center px-[20px] bg-cover relative after:absolute   h-[100vh] after:opacity-[70%] after:top-0 after:left-0 after:right-0 after:h-[100%] after:bg-slate-900 bg-[url('./admin/img/ng.jpg')] pb-[100px]">
        <div class='flex flex-col max-w-[700px] gap-[40px] '>
        <div class=''>
        <h1 class='relative text-white text-[25px] md:text-[40px] uppercase font-[700] z-[1]'>Donor-funded tech to take down human traffickers.</h1>
    </div>
    <div>
        <p class='relative text-slate-200 text-[17px] md:text-[20px] font-[500]  z-[1] '>DeliverFund equips law enforcement with breakthrough technology to fight injustice at scale.</p>
    </div>
    <div class='flex flex-row justify-center gap-[20px]'>
        <a href="" class='relative bg-slate-50 px-[10px] py-[5px] rounded text-slate-900 md:text-[30px] text-[20px] shadow-2xl  z-[1]'>Contact Us</a>
        <a href="" class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white md:text-[30px] text-[20px] shadow-2xl z-[1]'>Support Us</a>
    </div>
        </div>
    
    </div>

<div class='py-[20px] px-[20px] min-h-[100vh] flex flex-col gap-[30px] md:flex-row justify-around items-center '>
   
        <img class='rounded' src="./admin/img/ngpics.jpg" alt="" srcset="">
   
    <div class='flex flex-col  gap-[30px] max-w-[600px]'>
        <h1 class='font-[600] leading-[140%] uppercase text-[25px] md:text-[30px]'>Join our community to protect women and children</h1>
        <p class='font-[400] text-[17px]  md:text-[20px]'>Human traffickers hijack human dignity. We fight to protect women and children from predators, but we can’t do it without your support. If you are passionate about supporting real-world solutions to this complex crisis, we’re honored to have you join this fight.</p>
        <a href="" class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white w-fit text-[25px] md:text-[30px] shadow-2xl z-[1]'>Join The Fight</a>
    </div>
</div>


<div class='py-[50px] px-[20px] bg-slate-800 min-h-[100vh] flex flex-col gap-[30px] md:flex-row justify-around items-center '>
   
        <img class='rounded' src="./admin/img/ngpics.jpg" alt="" srcset="">
   
    <div class='flex flex-col  gap-[30px] max-w-[600px]'>
        <h1 class='font-[600] text-slate-300 leading-[140%] uppercase text-[25px] md:text-[30px]'>Our team has special ops chops</h1>
        <p class='font-[400] text-slate-400 text-[17px] md:text-[20px]'>We’re a team of special ops veterans, former intelligence professionals, former law enforcement, analysts and engineers.</p>
        <p class='font-[400]  text-slate-400 text-[17px] md:text-[20px]'>We’re data-driven and on a mission to end the horrors of human trafficking.</p>
        <a href="" class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white w-fit text-[25px] md:text-[30px] shadow-xl z-[1]'>About Us</a>
    </div>
</div>

<div class=' px-[20px] py-[100px] gap-[30px] flex flex-col md:flex-row justify-around items-start '>
    <div class='flex flex-col  gap-[20px] '>
        <h1 class='md:text-[30px] text-[25px] font-[600] uppercase'>Receive updates from Us</h1>
        <p class='md:text-[25px] text-[20px] font-[400] '>Subscribe to our monthly newsletter.</p>
       <p class='md:text-[25px] text-[20px] font-[400]'>We'll help you stay informed on our fight against human trafficking. </p>
    </div>
    
    <form class='flex  flex-col   gap-[10px] items-start' action="" method="post">
        
        <label class='text-[30px] font-[300] mb-[-15px] flex flex-row gap-[10px] items-center '  for="email"><i class="fa-solid fa-envelope"></i> <span> Email</span></label>
        <input class=' py-[10px] max-w-[400px] md:w-[600px]  px-[20px] outline-0 rounded text-[20px] bg-transparent border shadow-2xl ' type="email" name="email" id="email" placeholder='Input Your Email '>
   
    <input class='relative bg-slate-900 px-[10px] py-[5px] rounded text-white w-full  text-[30px] shadow-xl z-[1]' type="button" value="Subscribe">
</form>     
</div>

<div class=' bg-[url("./admin/img/lanter.avif")] relative after:bg-slate-900 after:absolute after:top-0 after:bottom-0 after:opacity-[80%] after:w-full flex flex-col text-center justify-center gap-[30px] items-center text-white px-[30px] py-[100px] shadow-2xl after:rounded-b-[20px] rounded-b-[20px] my-[20px] after:rounded-t-[50px] rounded-t-[50px]'>
    <div class='flex relative z-[1] flex-col  gap-2 my-5'>
        <h1 class='  text-[25px]  md:text-[30px] font-[600] leading-[120%] uppercase'>You can combat human trafficking</h1>
        <p class=' text-[17px] md:text-[20px] font-[300] text-slate-200'>Explore three simple ways to show your support and join a community committed to change.</p>
    </div>
    <div class='flex relative z-[1] flex-col md:flex-row justify-around gap-[25px]'>
<div class='bg-[transparent] backdrop-blur-2xl shadow-2xl h-fit rounded-lg shadow-2xl flex flex-col gap-[15px] py-[25px] px-[10px]'>
    <span>
    <i class="fa-sharp fa-solid fa-dollar-sign text-[70px] rounded-full py-[8px] px-[24px] bg-white text-slate-900 border"></i>
    </span>
<h3 class='text-[30px] uppercase '>donate</h3>
<p class=' text-[20px] font-[300] text-slate-300'>Your donation will equip law enforcement with the tools they need to take down criminals.</p>
<p>
<a href="" class=' bg-slate-300 font-[700] rounded-lg uppercase shadow-2xl text-slate-900 py-[10px] px-[20px] '>Donate</a>
</p>
</div>
<div class='bg-[transparent] backdrop-blur-2xl shadow-2xl h-fit rounded-lg shadow-2xl flex flex-col gap-[15px] py-[25px] px-[10px]'>
    <span>
   
    <i class="fa-duotone fa-volume-high text-[70px] rounded-full py-[8px] px-[24px] bg-white text-slate-900 border"></i>
    </span>
<h3 class='text-[30px] uppercase '>ADVOCATE</h3>
<p class=' text-[20px] font-[300] text-slate-300'>Rally your friends and family around the solution to ending human trafficking in our lifetime.</p>
<p>
<a href="" class=' bg-slate-300 font-[700] rounded-lg uppercase shadow-2xl text-slate-900 py-[10px] px-[20px] '>ADVOCATE</a>
</p>
</div>
<div class='bg-[transparent] backdrop-blur-2xl shadow-2xl h-fit rounded-lg shadow-2xl flex flex-col gap-[15px] py-[25px] px-[10px]'>
    <span>
   
    <i class="fa-sharp fa-solid fa-cart-shopping text-[60px] rounded-full py-[10px] px-[10px] bg-white text-slate-900 border"></i>
    </span>
<h3 class='text-[30px] uppercase '>SHOP</h3>
<p class=' text-[20px] font-[300] text-slate-300'>You’ll look sharp and show support for a great cause. All proceeds directly fund the fight to end human trafficking.</p>
<p>
<a href="" class=' bg-slate-300 font-[700] rounded-lg uppercase shadow-2xl text-slate-900 py-[10px] px-[20px] '>SHOP</a>
</p>
</div>

    </div>
</div>

</main>
-->

<?php
include 'include.footer.php'
?>