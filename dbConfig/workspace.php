<?php 
$con = mysqli_connect("localhost", "root", "", "managementportal")or die ("connection was not established");;
?>

<?php 
session_start();

if (!isset($_SESSION['username'])){
    header("location: ../login.php");
}
?>
<aside>
<?php 
session_start();

$id = $_SESSION["id"];
$topic = $_SESSION["topic"];
$post_body = $_SESSION["post_body"];
$mark = $_SESSION["mark"];
$post_date = $_SESSION["post_date"];

<aside>
require 'db.php';
$query = $conn->query("select * from assignment where id ='$session_id'");
while($row = $query->fetch()){

?>
        
</aside>