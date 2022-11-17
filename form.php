<?php 
session_start();
$name = $emai= $password = "";
$name_error = $email_error = $password_error = "";

//cleanup function
function cleanup(string $data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkEmpty($data, &$error_str){
    if (empty($data)){
        $error_str = "this input is required";
    }

}

function displayError($error){
    echo "<br><span style='color:red; font-size: 12px'>$error</span>";
}
// Assign post data to variable after cleanup
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = cleanup($_POST['name']);
    $email = cleanup($_POST['email']);
    $password = cleanup($_POST['password']);

    checkEmpty($name, $name_error);
    checkEmpty($email, $email_error);
    checkEmpty($password, $password_error);

    if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = "Enter a valid email address";
}
if (!empty($password) && strlen($password) <6){
    $password_error = "Password cannot be less than 6 characters";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="<?php echo $name ?>">
        <?php echo isset($name_error) && !empty($name_error) ? displayError($name_error): ''; ?>
        <br>
        <br>
        <label for="email">Email</label><br>
        <input type="text" name="email" id="email" value="<?php echo $email ?>">
        <?php echo isset($email_error) && !empty($email_error) ? displayError($email_error): ''; ?>
        <br>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password">
        <?php echo isset($password_error) && !empty($password_error) ? displayError($password_error): ''; ?>
        <br>
        <br>
        <input type="submit" value="Register">
    </form>
    
</body>
</html>