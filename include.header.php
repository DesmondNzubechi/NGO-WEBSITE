<?php 
require_once './admin/database.php';
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
<body class='bg-slate-50 overflow-x-hidden '>
 <header class='bg-slate-900 z-[10] fixed left-0 right-0 top-0  flex flex-row items-center justify-around px-[20px] py-[30px]'>
 <!--<div><h1 class='text-[25px] text-[white] font-bold'>NGO WEBSITE</h1></div>

        <button><i class="fa-solid fa-user bg-gray-500 p-[6px] rounded-full text-[35px] "></i></button>
  
-->
<div class='relative z-[1] '>
<h1 class='md:text-[30px] text-[20px] ml-[-20px] text-white font-[700]'>NGO WEBSITE</h1>
</div>

<ul class=' md:static fixed sideNav md:left-0 left-[-1000px] ease-out duration-500 top-0 bottom-0 w-[70%] md:pt-[0] pt-[200px]  text-center items-start px-[30px] bg-slate-900 flex-col gap-[10px] flex md:flex-row gap-[20px]'>
    <li><a href="index.php" class='text-white text-[18] md:text-[25px] uppercase text-[20px] font-[500] hover:underline'>Home</a></li>
<li class=' showDropDown text-start bg-slate-900'>
        <button class='text-white text-[18] md:text-[25px] uppercase text-[20px] font-[500] hover:underline'>The Problem
        <i class="fa-solid fa-angle-down"></i>
             <i class="fa-solid hidden  fa-angle-up"></i>
        </button>
        <ul class=' md:absolute hidden ease-out duration-500 dropDown bg-white z-[1] flex flex-col w-fit items-start rounded shadow-2xl p-[20px] text-start gap-[20px]'>
            <li><a href="" class='text-[16px] md:text-[20px] font-[400]'>Know the Sign</a></li>
         
            <li><a href="" class='text-[16px] md:text-[20px] font-[400]'>Story from Survivors</a></li>
           
            <li><a href="" class='text-[16px] md:text-[20px] font-[400]'>Key Facts, Statics and Resources</a></li>
        </ul>
    </li>
    <li class=' showDropDown text-start bg-slate-900'>
        <button class='text-white text-[18] md:text-[25px] uppercase text-[20px] font-[500] hover:underline'>About
        <i class="fa-solid fa-angle-down"></i>
             <i class="fa-solid hidden  fa-angle-up"></i>
        </button>
        <ul class=' md:absolute hidden ease-out duration-500 dropDown bg-white z-[1] flex flex-col w-fit items-start rounded shadow-2xl p-[20px] text-start gap-[20px]'>
            <li><a href="about.php" class='text-[16px] md:text-[20px] font-[400]'>What we do</a></li>
         
            <li><a href="contact.php" class='text-[16px] md:text-[20px] font-[400]'>Contact Us</a></li>
           
            <li><a href="" class='text-[16px] md:text-[20px] font-[400]'>Key Facts, Statics and Resources</a></li>
        </ul>
    </li>
    <li class=' showDropDown text-start bg-slate-900'>
        <button class='text-white text-[18] md:text-[25px] uppercase text-[20px] font-[500] hover:underline'>Join the fight
        <i class="fa-solid fa-angle-down"></i>
             <i class="fa-solid hidden  fa-angle-up"></i>
        </button>
             <ul class=' md:absolute hidden ease-out duration-500 dropDown bg-white z-[1] flex flex-col w-fit items-start rounded shadow-2xl p-[20px] text-start gap-[20px]'>
            <li><a href="" class=' text-[16px] md:text-[20px] font-[400]'>Know the Sign</a></li>
         
            <li><a href="" class='text-[16px] md:text-[20px] font-[400]'>Story from Survivors</a></li>
           
            <li><a href="" class='text-[16px] md:text-[20px] font-[400]'>Key Facts, Statics and Resources</a></li>
        </ul>
    </li>
</ul>
<div class='flex gap-[20px] flex-row items-center'>

    <a href="" class='bg-white px-[10px] py-[5px] md:px-[20px] shadow-2xl rounded md:py-[10px] text-[18px] relative z-[1] md:text-[22px] font-[600] '>Donate</a>
   
<div class=' flex flex-row  md:hidden'>

<i class="fa-solid fa-bars text-white open  text-[30px]"></i>
<i class="fa-solid fa-xmark text-white close hidden text-[30px]"></i>
</div>
</div>
 </header>
