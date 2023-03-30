
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
<body class='bg-slate-50'>
<header class=' flex shadow-lg fixed top-0 w-full z-[20]  bg-slate-900 p-0 flex-row  items-center justify-between '>
 <h1 class='text-[25px] px-[20px] mx-[20px] rounded z-[12] relative bg-slate-900   py-[10px] text-white font-bold'>NGO WEBSITE</h1>
 <!--<div>
    <h1 class='italic font-[500] text-[20px]'>Welcome Back</h1>
 </div>-->

        <button class='px-[20px] flex flex-row gap-2 items-center py-[10px]'><i class="fa-solid fa-user bg-slate-900 
        py-[8px] px-[10px] border border-slate-200 text-slate-50 shadow-2xl rounded-full text-[35px] "></i> <span class='italic text-slate-200 font-[500] text-[20px]'>Admin</span></button>
  

 </header>
 <div class='bg-slate-900 h-[100%] hidden md:block  top-0 pt-[100px] bottom-0 left-0  py-[40px] fixed  flex flex-col gap-[40px] px-[40px] '>
    <h2 class='my-[20px]'><a href="" class='text-slate-100 uppercase text-[25px] flex flex-row gap-2  items-center'><i class="fa-solid fa-gauge"></i> Dashboard</a></h2>
    <div>
        <ul class='flex flex-col gap-[35px] '>
              <li><a href="" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-solid fa-users-rectangle text-[25px] text-gray-400"></i><span> Subscriber</span> </a></li>
                <!--<li><a href="" class='text-[20px] text-slate-50  items-center flex flex-row gap-2'><i class="fa-solid fa-users text-gray-400"></i>  <span> Supporter</span></a></li>-->
                <li><a href="message.php" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-sharp fa-solid fa-gear text-gray-400"></i> <span> Messages </span></a></li>
            <li><a href="" class='text-[20px] text-slate-50 items-center  flex flex-row gap-2'><i class="fa-solid fa-radio text-gray-400"></i><span>  Pages </span></a></li>
              <li><a href="post.php" class='text-[20px] text-slate-50 items-center  flex flex-row gap-2'><i class="fa-sharp fa-solid fa-newspaper text-gray-400"></i> <span> Post </span></a></li>
                <li><a href="" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-sharp fa-solid fa-gear text-gray-400"></i> <span> Setting </span></a></li>

        </ul>
    </div>
</div>
</div>
 <main class='mt-[120px]'>


