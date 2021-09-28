
<!DOCTYPE html>

<html>
  
    <body>
	

  
     <div id="wrapper">
	 
	  
	  

<?php

/**
 * This php uses an HTML form to create a new entry in the
 * users table.
 *



if (isset($_POST['submit'])) {
    require "configuration.php";
    require "commons.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);
        
        $new_user = array(
            "from" => $_POST['From'],
               "to"  => $_POST['To'],
        "amount" => $_POST['Amount'],
                
        );

    $sql = "INSERT INTO `currency` (`From`, `To`, `Amount`) VALUES ('200', '300', '500')";



        
        $statement = $connection->prepare($sql);
        $statement->execute($new_user);

    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

 */


<?php

$host       = "sql5.jnb3.host-h.net";
$username   = "mukenrtrcb_3";
$password   = "MqqunsRsh8YLsW7M9TY8";
$dbname     = "mukenrtrcb_db3";
$dsn        = "mysql:host=$host;dbname=$dbname";



session_start();
$con = mysqli_connect($host,$username,$password,$dbname);

if(isset($_POST['submit']))
{
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO currency (`From Rate`, `To Rate`, `To Amount`) VALUES ('$name','$to', '$amount')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: index.php");
    }
}
?>



<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote><?php echo $_POST['name']; ?> Currency Successfully Saved </blockquote>
	
<?php } ?>


////////////////////////////// Add Form //////////////////////////


    
    </body>
</html>