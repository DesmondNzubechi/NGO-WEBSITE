<?php include 'admin.header.php'; ?>

<div >
    <div class='md:pl-[300px]  px-[20px] gap-5 grid grid-cols-1 md:grid-cols-2'>

    <?php

    $sql = "SELECT * from messages";
    $checkQuery = mysqli_query($conn, $sql);
    $checkRow = mysqli_num_rows($checkQuery);

    if ($checkRow > 0) {
        # code...

        foreach ($checkQuery as $check) {
            # code...
?>
            <div class=' bg-white  rounded fro shadow-2xl p-5 flex flex-col gap-[10px]'>
            <p><span class=' text-[17px] font-[500] '>Sender's Name: </span> <span class='text-[20px] font-[400] '><?= $check['sendername'] ?></span></p>
            <p ><span class=' text-[17px] font-[500]'> Sender's Email: </span><a href="mailto:<?= $check['senderemail'] ?>" class='text-[20px] font-[400]'><?= $check['senderemail'] ?></a></p>
            <p class=' text-[17px] font-[500] '>Message: </p>
            <p><!--The presidential campaign councils of the All Progressives Congress and the Peoples Democratic Party have challenged the Department of State Services to get tough with plotters of the interim national government.

The councils, in separate interviews with The PUNCH on Wednesday in Abuja, said the push for the ING was unconstitutional, adding that the plotters should be arrested.

They spoke against the backdrop of a statement issued by the security agency that some people were plotting the ING.

The DSS had earlier on Wednesday raised the alarm over a plot by some Nigerians to thwart the  May 29 inauguration of the President-elect, Asiwaju Bola Tinubu.--><?= $check['messagebody'] ?></p>
<p><span class=' text-[20px] font-[500] uppercase'>Date/Time: </span> <span class='text-[20px] font-[400] '><?= $check['sentdate'] ?></span></p>
            
        </div>
        <?php

        }


    } else {
        # code...
    }
    

    ?>
        
       
    </div>
 </div>