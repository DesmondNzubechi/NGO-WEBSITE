<?php
    $postId = $_GET['id'];
require_once 'database.php';

if (isset($_POST['update'])) {
    # code...
$headline = $_POST['headline'];
$imgs = $_FILES['img']['name'];
$descriptiont = $_POST['descrip'];
$imgXt = pathinfo($imgs, PATHINFO_EXTENSION);
$oldimg = $_POST['old'];
$imgname ;//= time().'.'.$imgXt;
if($imgs == null) {
    # code...
    $imgname = $oldimg;
} else {
    # code...
    $imgname = time().'.'.$imgXt;
    move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$imgname);
};

if ($conn) {
    # code...
    $sqlC = "UPDATE post SET   postimg1='$imgname', headline='$headline', description='$descriptiont' WHERE postid='$postId'";
    $sqlQ = mysqli_query($conn, $sqlC);

    if ($sqlQ) {
        # code...
        header('Location: /ngo/admin/post.php');
    }
}

}
?>

<?php

if (isset($_GET['id'])) {
    # code...

$sql = "SELECT * FROM `post` WHERE postid='$postId' ";
$check = mysqli_query($conn, $sql);
$numb = mysqli_num_rows($check);
if ($check) {
    # code...
    if ($numb) {
        # code...
        foreach($check as $datas) {

?>
        <?php include 'header.php'; ?>
<div class='p-[20px]'>
    <div>
        <h1 class='text-[25px]  border-b-slate-900 my-[10px] uppercase text-center font-bold'>Edit Post</h1>
    </div>
<form action="" method="post" class='grid gap-[20px]  grid-cols-1 md:grid-cols-2 ' enctype="multipart/form-data">
<div class='flex flex-col'>
    <label class='text-[25px] uppercase font-bold' for="">Headline</label>
    <input type="text" required value="<?= $datas['headline'] ?>" class='outline-none p-[10px] rounded text-[20px]' name="headline" id="">
</div>
<div class='flex flex-col'>
    <label class='text-[25px] uppercase font-bold' for="">Image</label>
  
    <input type="file"  value="" class='outline-none p-[10px] bg-white file:bg-white file:border-0 file: rounded text-[20px]' name="img" id=""/> <input type='hidden' name='old' class='text-slate-200' value='<?=$datas['postimg1'];?>' />
    
</div>
<div class=' md:col-span-2 flex flex-col'>
    <label class='text-[25px] uppercase font-bold' for="">Full Description</label>
    <textarea name="descrip" required  class='outline-none p-[10px] rounded text-[20px]' id="" cols="30" rows="10"><?= $datas['description'] ?></textarea>
</div>
<div>
    <input type="submit" name='update' class='bg-green-500 shadow-2xl rounded text-slate-900 text-[20px] p-[10px] font-[500] uppercase' value="Update Change">
</div>
</form>
</div>
<?php
        }
    } 
    

} 


}



?>



<?php include 'footer.php'; ?>