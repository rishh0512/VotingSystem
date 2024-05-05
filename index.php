<html>

<head>
    <title>Online Voting System</title>
    <link rel="stylesheet" href="./CSS/styles.css">
</head>

<body>
    <center>
        <div class="headerSection">
            <h1>Online Voting System</h1>

        </div>
        <hr>
        <div class="bodySection">
            <form action="api/login.php" method="POST">
                <h2>Login</h2>
                <input type="number" name="mobile" placeholder="Enter your registered mobile number">
                <br>
                <br>
                <input type="password" name="password" placeholder="Enter your password">
                <br>
                <br>
                <select name="role">
                    <option value="1">Voter</option>
                    <option value="2">Candidate</option>
                </select>
                <br>
                <br>
                <button>LOGIN</button>
                <br>
                <br>
                New User ? <a href="./routes/register.php">Register here</a>
            </form>
        </div>
    </center>


</body>

</html>