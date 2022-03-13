<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include_once("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>

    <form action="add_contacts.php" method="post">

            <div class="incon">
                <input type="text" name="name" id="name" placeholder="Name">
            </div>
            <div class="incon">
                <input type="tel" name="phone" id="phone" placeholder="Phone">
            </div>
            <div class="incon">
                <input type="email" name="email" id="email" placeholder="Email">
            </div>
            <div class="sbtn">
                <input type="submit" value="submit">
            </div>
        </form>


        <?php
        $result = mysqli_query($conn,"SELECT * FROM contacts");
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>name</td>
    <td>phone</td>
    <td>email</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>