<?php
session_start();

include("connect.php");
$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];

$update_votes=mysqli_query($conn,"UPDATE user SET votes='$total_votes' WHERE id='$gid'");
$update_user_status=mysqli_query($conn,"UPDATE user SET status=1 WHERE id='$uid'");

if($update_votes and $update_user_status){

$groups=mysqli_query($conn,"SELECT * FROM user WHERE role=2");
$groupsData=mysqli_fetch_all($groups,MYSQLI_ASSOC);
$_SESSION['userdata']['status']=1;
$_SESSION['groupsData']=$groupsData;
echo '
<script>
alert("Voting Successfull");
window.location="../routes/dashboard.php"
</script>
';
}
else{
    echo '
    <script>
    alert("Unable to vote..please try again");
    window.location="../routes/dashboard.php"
    </script>
    ';
}
?>