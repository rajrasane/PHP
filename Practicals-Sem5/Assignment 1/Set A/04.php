<!-- Build a form to accept name and email from the user. On submission, validate the inputs and display a
confirmation message. -->
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Name: $name<br>";
    echo "Email: $email<br>";
}
?>