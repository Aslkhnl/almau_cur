
<?php
    
    //ENTER YOUR DATABASE CONNECTION INFO BELOW:
   // $hostname="138.197.187.70:22";
    //$database="almau_curriculum";
    //$username="ayauly";
    //$password="1q2w3e4R";
    
    //DO NOT EDIT BELOW THIS LINE
    //$link = mysqli_connect($hostname, $username, $password);
    //if (!$link) {
     //   die('Connection failed: ' . mysqli_error());
    //}
    //else{
      //  echo "Connection to MySQL server " .$hostname . " successful!
        //" . PHP_EOL;
    //}
    
   // $db_selected = mysqli_select_db($database, $link);
    //if (!$db_selected) {
     //   die ('Can\'t select database: ' . mysqli_error());
    //}
    //else {
      //  echo 'Database ' . $database . ' successfully selected!';
    //}
    
    //mysqli_close($link);
    
   // ?
$connection = ssh2_connect('138.197.187.70', 22);
$user = "ayauly";
$password = "1q2w3e4R";
ssh2_auth_password($connection, $user, $password);

$tunnel = ssh2_tunnel($connection, '192.168.1.234', 3307);

$db = mysqli_connect('127.0.0.1', 'ayauly', '1q2w3e4R',
                     'almau_curriculum', 3307, $tunnel)
or die ('Fail: '.mysql_error());
?>
