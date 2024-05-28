<?php 
    if(isset($_POST['submit'])){
        echo "<br>" . $_POST['name'];
        echo "<br>" . $_POST['password'];
    } 
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div>
        <input type="submit" value="Submit" name="submit">
    </div>
</form>