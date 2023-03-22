


<?php include 'header.php' ?>

 <div class='flex flex-row items-start justify-between '>

<div class='bg-slate-900 min-h-[140vh] py-[40px]  flex flex-col gap-[40px] px-[20px] '>
    <h2><a href="" class='text-slate-100 text-[25px] flex flex-row gap-2  items-center'><i class="fa-solid fa-gauge"></i> Dashboard</a></h2>
    <div>
        <ul class='flex flex-col gap-[25px] '>
              <li><a href="" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-solid fa-users-rectangle text-[25px] text-gray-400"></i><span> Subscriber</span> </a></li>
                <li><a href="" class='text-[20px] text-slate-50  items-center flex flex-row gap-2'><i class="fa-solid fa-users text-gray-400"></i>  <span> Supporter</span></a></li>
            <li><a href="" class='text-[20px] text-slate-50 items-center  flex flex-row gap-2'><i class="fa-solid fa-radio text-gray-400"></i><span>  Pages </span></a></li>
              <li><a href="post.php" class='text-[20px] text-slate-50 items-center  flex flex-row gap-2'><i class="fa-sharp fa-solid fa-newspaper text-gray-400"></i> <span> Post </span></a></li>
                <li><a href="" class='text-[20px] text-slate-50 items-center flex flex-row gap-2 '><i class="fa-sharp fa-solid fa-gear text-gray-400"></i> <span> Setting </span></a></li>

        </ul>
    </div>
</div>
<div class='w-full'>
  <div class='text-center m-[20px]'><h1 class='text-[30px] font-[700]  '>ADMIN DASHBOARD</h1></div>
<div class='grid md:grid-cols-3 grid-cols-1 h-full justify-self-auto   p-[30px] gap-[40px] item-start '>
<div class='p-[20px] rounded-xl border-[10px]   border-l-slate-900  py-[50px]  text-center  h-fit bg-sky-500 '>
    <div class=''>
    <h1 class='text-[30px] font-bold  py-[7px] px-[20px]  rounded-full'>1</h1>
    
    </div>
    <p class='text-[30px] uppercase font-[700]'>Subscribers</p>
</div> 
<div class='p-[20px] rounded-lg  py-[50px]  border-[10px]   border-l-slate-900 text-center  h-fit bg-sky-500 '>
    <div class=''>
    <h1 class='text-[30px] font-bold  py-[7px] px-[20px]  rounded-full'>3</h1>
    
    </div>
    <p class='text-[30px] uppercase font-[700]'>Post</p>
</div> 
<div class='p-[20px] rounded-lg py-[50px]  border-[10px]   border-l-slate-900  text-center  h-fit bg-sky-500 '>
    <div class=''>
    <h1 class='text-[30px] font-bold  py-[7px] px-[20px]  rounded-full'>5</h1>
    
    </div>
    <p class='text-[30px] uppercase font-[700]'>supporters</p>
</div> 
</div>
</div>
</div>

<?php include 'footer.php' ?>