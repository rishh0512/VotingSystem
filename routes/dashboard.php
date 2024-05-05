<?php
session_start();
if (!isset($_SESSION['userdata'])) {
    header("location:../");
}

$userdata = $_SESSION['userdata'];
$groupsData = $_SESSION['groupsData'];
if ($_SESSION['userdata']['status'] == 0) {
    $status = '<b style="color:red">Not Voted</b>';
} else {
    $status = '<b style="color:green">Voted</b>';
}
?>

<html>

<head>
    <title>Online Voting System- Registration</title>
    <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>
    <style>
        .votebtn {
            padding: 5px;
            font-size: 15px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
        }

        .voted {
            padding: 5px;
            font-size: 15px;
            background-color: green;
            color: white;
            border-radius: 5px;
        }
    </style>
    <div class="mainSection">
        <a href="logout.php"><button style="float: right;">LOGOUT</button></a>
        <h1 style="text-align: center;">Online Voting System</h1>
    </div>
    <hr>
    <div class="mainPanel" style="padding:10px">
        <div class="Profile" style="background-color: white; color:black; width:30%; padding:20px; float:left">
            <center>
                <img src="../uploads/<?php echo $userdata['photo'] ?>" height="100" width="100">
            </center>
            <br><br>
            <b>Name:<?php echo $userdata['name'] ?> </b><br><br>
            <b>Mobile:<?php echo $userdata['mobile'] ?> </b><br><br>
            <b>Address: <?php echo $userdata['address'] ?></b><br><br>
            <b>Status: <?php echo  $status ?></b><br><br>
        </div>
        <div class="Group" style="background-color: white; color:black; width:60%; padding:20px; float:right">
            <?php if ($_SESSION['groupsData']) {
                for ($i = 0; $i < count($groupsData); $i++) {
            ?>
                    <div>
                        <img style="float: right;" src="../uploads/<?php echo $groupsData[$i]['photo'] ?>" height="80" width="80">
                        <b>Group Name: </b><?php echo $groupsData[$i]['name'] ?><br>
                        <b>Votes: </b><?php echo $groupsData[$i]['votes'] ?><br>
                        <form action="../api/vote.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsData[$i]['votes'] ?>">
                            <input type="hidden" name="gid" value="<?php echo $groupsData[$i]['id'] ?>">
                            <?php
                            if ($_SESSION['userdata']['status'] == 0) { ?>
                                <input type="submit" name="votebtn" value="vote" class="votebtn">
                            <?php
                            } else {
                            ?>
                                <button disabled type="button" name="votebtn" value="vote" class="voted">Voted</button>
                            <?php
                            }
                            ?>


                        </form>
                    </div>
            <?php

                }
            } else {
            }
            ?>
        </div>
    </div>

    </div>


</body>

</html>