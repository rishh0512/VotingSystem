<?php
include("connect.php");

// Enable error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$name = isset($_POST['name']) ? $_POST['name'] : '';
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$Cpassword = isset($_POST['Cpassword']) ? $_POST['Cpassword'] : '';
$role = isset($_POST['role']) ? $_POST['role'] : '';

// File Upload Handling
$photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : '';
$tmp_name = isset($_FILES['photo']['tmp_name']) ? $_FILES['photo']['tmp_name'] : '';


if ($password == $Cpassword) {
    echo "yess";
    move_uploaded_file($tmp_name, "../uploads/$photo");

    $query = "INSERT INTO user (name, mobile, password, address, photo, role, status, votes) VALUES ('$name', '$mobile', '$password', '$address', '$photo', '$role', 0, 0)";
    
    echo "Query: $query"; // Debugging: Print the query
    
    $insert = mysqli_query($conn, $query);

    if ($insert) {
        echo '
        <script>
        alert("Registration successful");
        window.location="../"
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Error Occurred: '. mysqli_error($conn) .'"); // Display MySQL error message
        window.location="../routes/register.php"
        </script>
        ';
    }
} else {
    echo '
    <script>
    alert("Password and confirm password do not match");
    window.location="../routes/register.php"
    </script>
    ';
}
?>
