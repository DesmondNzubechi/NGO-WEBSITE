<?php
require_once 'database.php';
$succesMsg = $failMsg = '';
if (isset($_POST['submit'])) {
    # code...
$headline = $_POST['headline'];
$description = $_POST['description'];
$img = $_FILES['img']['name'];
$imgxtension = pathinfo($img, PATHINFO_EXTENSION);
$imgnme = time().'.'.$imgxtension;


if ($conn) {
    # code...
$sql = "INSERT INTO `post`(postimg1, Headline, description) 
VALUES( '$imgnme', '$headline', '$description')";
 $check = mysqli_query($conn, $sql);

 if ($check) {
    # code...
    move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$imgnme);
    $succesMsg = 'Uploaded Successfully';

 } else {
    $failMsg = 'Failed to upload. Something went wrong';
 }

} else {
mysqli_connect_error('Failed To Connect', mysqli_error());
die();
}

}

?>
















<?php include 'header.php' ?>


<div class=''>


<div class='py-[30px] flex flex-row relative justify-center items-center gap-[20px] px-[20px]'>
<a href="post.php" target="_blank" class=' bg-sky-500 py-[5px] px-[10px] left-[20px] absolute justify-self-start text-[20px] font-[600] rounded shadow-2xl '><i class="fa-solid fa-arrow-left"></i></a>
    <h1 class='text-[30px] font-[700] uppercase '>Post</h1>
   </div>
<div class='flex flex-row justify-around'>
<form class='text-center gap-[20px] grid grid-cols-1 md:grid-cols-3' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
<div class=' flex flex-col items-start gap-[2px]'>
    <label for="headline" class='text-[30px] uppercase font-[700]'> Headline:</label>
    <input type="text" class='px-[20px] py-[10px] w-full outline-0 rounded shadow-2xl' name="headline" id="headline">
    <div class=' flex flex-col items-start gap-[2px]'>
    <label for="headline" class='text-[30px] uppercase font-[700]'> Description:</label>
    <textarea name="description" id="" class='px-[20px] py-[10px] w-full outline-0  rounded shadow-2xl' cols="30" rows="10"></textarea>
</div>
</div>

<div class=' flex flex-col items-start  gap-[2px]'>
    <label for="headline" class='text-[30px] uppercase font-[700]'>Image:</label>
    <input type="file" class='bg-[#fff] py-[5px] px-[2px] rounded shadow-2xl' name="img" id="headline">
    <button type="submit" name='submit' class='py-[5px] px-[5px] text-slate-50 text-[20px] font-bold w-full  uppercase my-[15px] shadow-2xl rounded bg-sky-700'>Submit Post</button>

</div>

</form>

</div>
</div>
<?php include 'footer.php' ?>