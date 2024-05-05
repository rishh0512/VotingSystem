<html>

<head>
  <title>Online Voting System- Registration</title>
  <link rel="stylesheet" href="../CSS/styles.css">
</head>

<body>
<center>
  <h1>Online Voting System</h1>
  <hr />
  <form action="../api/register.php" method="POST" enctype="multipart/form-data" >
    <h2>Registration</h2>
    <input type="text" name="name" placeholder="Enter your Name" />
    <br />
    <br />
    <input type="text" name="mobile" placeholder="Enter your registered mobile number" />
    <br />
    <br />
    <input type="text" name="address" placeholder="Enter your permanent address" />
    <br />
    <br />
    <input type="password" name="password" placeholder="Enter your password" />
    <br />
    <br />
    <input type="password" name="Cpassword" placeholder="Enter your password to confirm" />
    <br />
    <br />
 
      <div class="uploadImage">
        Upload Image:<input type="file" name="photo">
      </div>

      <br />
      <br />
      <div class="role">
        Select Your Role: <select name="role">
          <option value="1">Voter</option>
          <option value="2">Candidate</option>
        </select>
      </div>



    <br />
    <br />
    <button>Register</button>
    <br />
    <br />
    Already a User ? <a href="#">Login here</a>
  </form>
  </center>
</body>

</html>