<form action="" method="post">

Email address:<br />
<input type="text" name="email" size="20" maxlength="50" value="" /><br>

Password:<br />
<input type="password" name="pswd" size="20" maxlength="15" value="" /><br>

<input type="submit" name="subscribe" value="subscribe!" /><br>

</form>

<a href="get_post.php?name=MASUD&email=masud@gmail.com&address=Mirpur">Click here</a>
<?php
    if((isset($_POST['subscribe']))){
        echo "<pre>";
        // print_r($_GET);
        print_r($_POST);
        echo $_POST['email'];
        echo "</pre>";
    }
?>
