<?php
include 'include.header.php'
?>





<main class='bg-white'>
    <div class='px-[20px] py-[70px]  pt-[150px]'>
        
            <h1 class='font-[700] text-center text-[30px] mb-[40px] uppercase'>Contact Us</h1>
        
        <form action="" class='grid block gap-[20px] grid-cols-1 md:grid-cols-2 '>
            <div class='flex flex-col '>
                <label for="fullName" class='font-[400] text-slate-600 flex flex-row items-center gap-2  text-[25px]'><i class="fa-solid fa-user"></i>Full Name:</label>
                <input type="text" placeholder='Input Full Name' class='outline-none  bg-slate-700 shadow-lg p-[10px] rounded text-[20px]' name="fullName" id="">
            </div>
            <div class='flex flex-col '>
                <label for="fullName" class='font-[400] text-slate-600 flex flex-row items-center gap-2 text-[25px]'><i class="fa-solid fa-envelope"></i>Email:</label>
                <input type="email" placeholder='Input Your Email' class='outline-none shadow-lg p-[10px]  bg-slate-700 rounded text-[20px]' name="email" id="">
            </div>
            <div class='flex flex-col md:col-span-2'>
                <label for="message" class='font-[400] text-slate-600 flex flex-row items-center gap-2 text-[25px]'><i class="fa-solid fa-message"></i><span>Message:</span> </label>
                <textarea name="message" placeholder='Write Your Message'  class='outline-none  bg-slate-700 shadow-lg h-[200px] p-[10px] rounded text-[20px]' id="message" cols="30" rows="10"></textarea>
            </div>
            <div>
                <button type="submit" class='bg-gradient-to-r from-slate-900 to-sky-900 px-[20px] rounded text-slate-100 text-[30px] font-[500]'>Send Message</button>
            </div>
        </form>
        
    </div>
</main>









<?php
include 'include.footer.php'
?>