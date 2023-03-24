

<?php
require_once 'database.php';

if (isset($_GET['id'])) {
    # code...
$getId = $_GET['id'];

if ($conn) {
    # code...
$sql = "DELETE FROM post WHERE postid='$getId'";
$check = mysqli_query($conn, $sql);

if ($check) {
    # code...
    header('Location:  /ngo/admin/post.php');
}

}


}