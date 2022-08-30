<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Update</title>
</head>

<body>
    <?php
    if (isset($_GET['id']) && !isset($_POST['update'])) {
        $con = mysqli_connect('localhost', 'root', '', 'classicmodels') or die('Connection is not established' . mysqli_connect_error());
        $id = (int) mysqli_real_escape_string($con, $_GET['id']);
        $id = is_numeric($id) ? $id : NULL;
        $query = 'SELECT `first_name`,  `email`, `pass` , `registration_date`, `last_name`, `user_id` FROM `users` 
        WHERE `user_id` = ' . $id;
        $result = mysqli_query($con, $query) or die('There is an error in your query' . mysqli_error($con));
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_BOTH);
            printForm($row['first_name'], $row['last_name'], $row['email']);
        } else {
            echo 'There is no data to display!';
        }
        @mysqli_free_result($result);
        @mysqli_close($con);
    } elseif (isset($_POST['update'])) {
        $con = mysqli_connect('localhost', 'root', '', 'classicmodels') or die('Connection is not established' . mysqli_connect_error());
        $id = (int) mysqli_real_escape_string($con, $_GET['id']);
        $id = is_numeric($id) ? $id : NULL;
        $errors = array();
        $fn = '';
        $ln = '';
        $e = '';

        if (empty($_POST['first_name'])) {
            $errors[] = 'You forgot to enter your first name.';
        } else {
            $fn = mysqli_real_escape_string($con, trim($_POST['first_name']));
        }
        if (empty($_POST['last_name'])) {
            $errors[] = 'You forgot to enter your last name.';
        } else {
            $ln = mysqli_real_escape_string($con, trim($_POST['last_name']));
        }
        if (empty($_POST['email'])) {
            $errors[] = 'You forgot to enter your email address.';
        } else {
            $e = mysqli_real_escape_string($con, trim($_POST['email']));
        }
        if (!empty($_POST['pass1'])) {
            if ($_POST['pass1'] != $_POST['pass2']) {
                $errors[] = 'Your password did not match the confirmed password.';
            } else {
                $p = mysqli_real_escape_string($con, trim($_POST['pass1']));
            }
        } else {
            $errors[] = 'You forgot to enter your password';
        }
        if (empty($errors)) {
            $query = "UPDATE `users` SET `first_name` = '$fn', `last_name` = '$ln', `email` = '$e', `pass` = SHA1('$p') WHERE `user_id` = $id";
            $r = mysqli_query($con, $query);
            if ($r) {
                echo '<h1>Thank you!</h1>';
                echo '<p>User were updated!</p>
                      <p><br /></p>';
                echo 'You will be redirect back within 5 seconds &#128516;';
                header("refresh:5;url=users.php");
            } else {
                echo '<h2>System Error</h2>';
                echo '<p class="error">You could not update due to a system error. We apologize for any inconvenience.</p>';
                echo '<p>' . mysqli_error($con) . '<br /><br />Query: ' . $query . '</p>';
            }
            mysqli_close($con);
            exit();
        } else {
            echo '<h2>Error!</h2>';
            echo '<p class="error">The following error(s) occurred:<br />';
            foreach ($errors as $msg) {
                echo " - $msg<br />\n";
            }
            echo '</p><p>Please try again.</p><p><br /></p>';
            printForm($fn, $ln, $e);
        }
    } else {
        echo 'There is no data to display!';
    }

    function printForm($first_name = "", $last_name = "", $email = "")
    {
    ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <h1>Update</h1>
            <p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?= $first_name ?>" /></p>
            <p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?= $last_name ?>" /></p>
            <p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="<?= $email ?>" /></p>
            <p>Password: <input type="password" name="pass1" size="10" maxlength="20" value="" /></p>
            <p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="" /></p>
            <p><input type="submit" name="update" value="update" /></p>
		<p><input type="file" name="image" value="" /></p>
        </form>

    <?php
    }
    ?>

</body>

</html>