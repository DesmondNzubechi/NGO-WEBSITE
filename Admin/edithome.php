<?php include 'admin.header.php' ?>



<div class='px-[30px]  '>
<form class='md:ml-[150px] flex flex-col gap-[40px]' action="\index.php" method="post">

<div class='md:ml-[150px]'>
    <textarea name="" id="" class='h-[200px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[90%]'> DONOR-FUNDED TECH TO TAKE DOWN HUMAN TRAFFICKER.</textarea>
</div>
<div class='md:ml-[150px]'>
    <textarea name="" id="" class='h-[150px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[90%]'> DeliverFund equips law enforcement with breakthrough technology to fight injustice at scale.</textarea>
</div>
<div class='flex flex-row text-center md:ml-[150px]' gap-[10px]'>
    <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl text-slate-900 font-[500] outline-0' name="headerC" value='Contact Us' id="">
    <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="headerC" value='Support Us' id="">
</div>
<div class=' flex flex-col gap-[20px] md:flex-row justify-center'>
    <div class='flex flex-col'>
    <input type="file"  value="" class='outline-none p-[10px] bg-white file:bg-white file:border-0 file: rounded text-[20px]' name="img" id=""/> <input type='hidden' name='old' class='text-slate-200' value='<?=$datas['postimg1'];?>' />
    <img src="" alt="" class='' srcset="./img/ngpics.jpg">
    </div>
    <div class='flex flex-col gap-5'>
    <textarea name="" id="" class='h-[100px] md:w-[500px] font-[700] p-[20px] flex uppercase text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[20px] w-[100%]'> JOIN OUR COMMUNITY TO PROTECT WOMEN AND CHILDREN.</textarea>
    <textarea name="" id="" class='h-[200px]  md:w-[500px] font-[500] p-[20px] flex  text-white bg-slate-700 items-center rounded-lg shadow-lg  overflow-x-auto text-[15px] w-[100%]'>Human traffickers hijack human dignity. We fight to protect women and children from predators, but we can’t do it without your support. If you are passionate about supporting real-world solutions to this complex crisis, we’re honored to have you join this fight.</textarea>
     <input type="text" class='text-[20px] w-fit text-center p-[10px] rounded shadow-xl bg-slate-900 text-slate-50 font-[500] outline-0' name="headerC" value='Support Us' id="">

</div>
</div>
</form>
</div>






<?php include 'admin.footer.php' ?>