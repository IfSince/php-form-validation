<?php
$username = $email = null;
$usernameErrors = $emailErrors = null;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (empty($_POST["username"])) {
        $usernameErrors = "Username is required";
    } else {
        $username = formInput($_POST["username"]);
        //Validations take place here
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $usernameErrors = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErrors = "Email is required";
    } else {
        $email = formInput($_POST["email"]);
        //Validations take place here
    }
}

function formInput($data): string {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Form Validation</title>

    <link rel="stylesheet" href="https://use.typekit.net/hbp1ubp.css"> <!-- Adobe Font-->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2>Login</h2>
        <div class="input">
            <div class="input__box">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" id="username" value="<?php echo $username;?>">
                <span class="error"><?php echo $usernameErrors?></span>
            </div>

            <div class="input__box">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email" id="email" value="<?php echo $email;?>">
                <span class="error"><?php echo $emailErrors?></span>
            </div>

            <div class="input__box">
                <button type="submit" name="submit">Submit</button>
            </div>
        </div>

        <!-- Just for testing purposes -->
        <div class="result">
            <h2>Your Input</h2>
            <div class="result__list">
                <?php
                echo "Username: {$username}";
                echo "<br>";
                echo "Email: {$email}";
                ?>
            </div>
        </div>
    </form>

</body>
</html>