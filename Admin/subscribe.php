

<?php include 'admin.header.php'; ?>

<div class='px-[20px]'>

<div class='flex  my-[50px] justify-center'>
<?php 
        
        $sql = "SELECT * FROM subscribers";
        $check = mysqli_query($conn, $sql);
        $checkrow = mysqli_num_rows($check);


        if ($checkrow > 0) {
            # code...
        
        
            # code...
            ?>
            <table class="border-separate border border-slate-400 ...">
            <thead>
               <tr class='bg-slate-200'>
              <!--  <th  class="border border-slate-300 ... uppercase text-[20px] p-[20px] font-[600]">Serial/No</th>-->
                <th  class="border border-slate-300 ... uppercase text-[20px] px-[10px] py-[20px] font-[700]">Email Address</th>
                <th  class="border border-slate-300 ... uppercase text-[20px]  px-[10px] py-[20px] font-[700]">Subscription Date</th>
               </tr>
            </thead>
            <tbody>    
<?php

foreach($check as $checked) {

    ?>

                <tr>
                 
                    <td  class="border border-slate-300 ... py-[15px] px-[10px] font-[500] text-[20px]"><?= $checked['subEmail']?></td>
                    <td  class="border border-slate-300 ... py-[15px] px-[10px] text-[15px]"><?= $checked['subdate']?></td>
                </tr>
                <?php
}
?>
            </tbody>
        </table>
        <?php

} else {
   ?>
<h1 class='uppercase text-[30px] text-slate-600 font-[500] '>No Subscriber Yet</h1>
   <?php


}
    ?>    
    
</div>

</div>

<?php include 'admin.footer.php' ?>

