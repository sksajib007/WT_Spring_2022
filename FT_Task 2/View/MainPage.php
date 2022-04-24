<!DOCTYPE html>
<html lang="en">

<head>
    <title>JS Validations</title>
    <link rel="stylesheet" href="../CSS/mainpage.css">
</head>

<body>
    <div class="container">
        <h1>20-42161-1</h1>
        <h2>Validation Using JS :: Lab Task 02 :: Final Term</h2>
        <div class="card">
            <input type="text" onkeyup="checkName()" required name="name" id="nameid" placeholder="Name:">
            <p class="error_paragraph" id="name_error"></p>
            <input type="email" name="email" id="emailid" placeholder="Email:" required onkeyup="checkEmail()">
            <p class="error_paragraph" id="email_error"></p>
            <input type="password" onkeyup="checkPassword()" required name="pass" id="passid" placeholder="Password:">
            <p class="error_paragraph" id="pass_error"></p>
            <button>Sign Up</button>
            
        </div>
    </div>


    <script src="../JS/validate.js"></script>
</body>

</html>