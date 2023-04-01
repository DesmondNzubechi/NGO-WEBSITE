
<?php
require_once 'database.php';
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
<body class='bg-slate-50 overflow-x-hidden'>
<header class=' flex shadow-lg px-[20px]  fixed top-0 w-full z-[20]  bg-slate-900 p-0 flex-row  items-center justify-between '>
<div class=' flex flex-row  md:hidden'>

<i class="fa-solid fa-bars text-white open  text-[30px]"></i>
<i class="fa-solid fa-xmark text-white close hidden text-[30px]"></i>
</div>
 <h1 class='text-[25px]  rounded z-[12] relative bg-slate-900   py-[10px] text-white font-bold'>NGO WEBSITE</h1>
 <!--<div>
    <h1 class='italic font-[500] text-[20px]'>Welcome Back</h1>
 </div>-->

        <button class='px-[20px] btnAdmin flex flex-row gap-2 items-center py-[10px]'><i class="fa-solid fa-user bg-slate-900 
        py-[8px] px-[10px] border border-slate-200 text-slate-50 shadow-2xl rounded-full text-[35px] "></i> <span class='italic text-slate-200 font-[500] text-[20px]'>Admin</span></button>

        <div class='fixed top-0'>
          <a href="">View Profile</a>
          <a href="">Log out</a>
        </div>
  

 </header>
 <div class='bg-slate-900 h-[100%] hidden md:flex  top-0 pt-[100px] bottom-0 left-0  overflow-auto py-[40px] fixed  flex flex-col gap-[40px] px-[40px] '>
    <h2 class='my-[20px]'><a href="admin1.php" class='text-slate-100 uppercase  text-[25px] flex flex-row gap-2  items-center'><i class="fa-solid fa-gauge"></i> Dashboard</a></h2>
    <div>
        <ul class='flex flex-col gap-[35px] '>
              <li><a href="subscribe.php" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-solid fa-users-rectangle text-[25px] text-gray-400"></i><span> Subscriber</span> </a></li>
                <!--<li><a href="" class='text-[20px] text-slate-50  items-center flex flex-row gap-2'><i class="fa-solid fa-users text-gray-400"></i>  <span> Supporter</span></a></li>-->
                <li><a href="message.php" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-sharp fa-solid fa-gear text-gray-400"></i> <span> Messages </span></a></li>
            <li class=' pageview  flex relative flex-col justify-center gap-[20px]'><button class='text-[20px] text-slate-50 items-center  flex flex-row gap-2'><i class="fa-solid fa-radio text-gray-400"></i><span>  Pages </span><i class="fa-solid fa-angle-down"></i>
             <i class="fa-solid hidden  fa-angle-up"></i> </button>
            <ul class='hidden pages bg-slate-200 w-full top-[30px] rounded shadow-2xl absolute flex flex-col px-[15px] py-[6px] gap-2'>
              <li class='flex flex-col gap-2 viewOPtion'>
                <a href="" class='font-[600]  text-[20px]'>Home <i class="fa-solid fa-angle-down"></i>
             <i class="fa-solid hidden  fa-angle-up"></i></a>
              <ul class=' hidden flex flex-row gap-2 '>
                <li><a href="" class='bg-gradient-to-r from-sky-500 to-blue-500 px-[5px] hover:bg-gradient-to-r hover:from-slate-900 hover:to-blue-900 transition ease-in duration-500 px-[5px] py-1 text-[15px] text-slate-100 rounded shadow-lg font-[500]    '><span> View</span> <i class="fa-solid fa-eye"></i></a></li>
                <li><a href="" class='bg-gradient-to-r from-sky-500 px-[5px] py-1 text-[15px] text-slate-100 rounded shadow-lg font-[500] to-blue-500    hover:bg-gradient-to-r hover:from-slate-900 hover:to-blue-900 transition ease-in duration-500'>Edit <i class="fa-solid fa-pen-to-square"></i></a></li>
              </ul>
            </li>
         
              <span class='bg-slate-900 h-[1px] w-full'></span>
              <li class='flex flex-col gap-2 viewOPtion'>
                <a href="" class='font-[600] text-[20px]'>About<i class="fa-solid fa-angle-down"></i>
             <i class="fa-solid hidden  fa-angle-up"></i></a>
              <ul class='  hidden flex flex-row gap-2 '>
                <li><a href="" class='bg-gradient-to-r from-sky-500 to-blue-500 px-[5px] hover:bg-gradient-to-r hover:from-slate-900 hover:to-blue-900 transition ease-in duration-500 px-[5px] py-1 text-[15px] text-slate-100 rounded shadow-lg font-[500]    '><span> View</span> <i class="fa-solid fa-eye"></i></a></li>
                <li><a href="" class='bg-gradient-to-r from-sky-500 px-[5px] py-1 text-[15px] text-slate-100 rounded shadow-lg font-[500] to-blue-500    hover:bg-gradient-to-r hover:from-slate-900 hover:to-blue-900 transition ease-in duration-500'>Edit <i class="fa-solid fa-pen-to-square"></i></a></li>
              </ul>
            </li>
             
              
            </ul>
          </li>
              <li><a href="post.php" class='text-[20px] text-slate-50 items-center  flex flex-row gap-2'><i class="fa-sharp fa-solid fa-newspaper text-gray-400"></i> <span> Post </span></a></li>
                <li><a href="" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-sharp fa-solid fa-gear text-gray-400"></i> <span> Setting </span></a></li>

        </ul>
    </div>
</div>
</div>
 <main class='mt-[120px]'>


