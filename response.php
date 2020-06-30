<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
<style>
    .container {
    padding: 16px;
    background-color: white;
}
h1{
    color:#4CAF50;
}
em{
    color:#FB3F5C;
}

</style>
</head>
<body>
<div class="container">
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Full Name:</em> <?php echo $_POST["fname"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>password:</em> <?php echo $_POST["psw"]?></li>
    </ol>
</div>
</body>
</html>