
<?php
include("connect.php");
  if(isset($_POST["submit"]))
    {
        $response=array("success"=>0,"error"=>0);
        //order details
        $orderId            = $_POST['orderId'];
        $paperSubject       = $_POST['paperSubject'];
        $paperTopic         = $_POST['paperTopic'];
        $paperStyle         = $_POST['paperStyle'];
        $languageStyle      = $_POST['languageStyle'];
        $typeOfWork         = $_POST['typeOfWork'];
        $deadline           = $_POST['deadline'];
        $level              = $_POST['level'];
        $numberOfPages      = $_POST['numberOfPages'];
        $numberOfSources    = $_POST['numberOfSources'];
        $total              = $_POST['total'];
        $instructions       = $_POST['instructions'];
        $datePosted         = date("Y/m/d H:I:s");
        //Contact Details
        $regId              =$_POST['regId'];
        $firstName          = $_POST['firstName'];
        $lastName           = $_POST['lastName'];
        $email              = $_POST['email'];
        $nationality        = $_POST['nationality'];
        $telephoneNumber    = $_POST['telephoneNumber'];
        $mobileNumber       = $_POST['mobileNumber'];
    
        $password       = sha1($email);
        
 mysqli_autocommit($Con,false);

        $sql2 = ("INSERT INTO `customwriting`.`order` (`orderId`, `clientId`, `writerId`, `paperSubject`, `paperTopic`, `paperStyle`, `languageStyle`, `typeOfWork`, `deadline`, `level`, `numberOfPages`, `numberOfsources`, `total`, `instructions`, `datePosted`, `dateCompleted`, `orderStatus`, `fileLocation`) 
        VALUES ('$orderId', '$regId', 'writerId', '$paperSubject', '$paperTopic', '$paperStyle', '$languageStyle', '$typeOfWork', '$deadline', '$level', '$numberOfPages', '$numberOfSources', '$total', '$instructions', '$datePosted', 'dateCompleted', 'not taken', 'fileLocation')");

        $query2=mysqli_query($Con,$sql2) or mysql_error();  
    
        $sql = ("INSERT INTO `customwriting`.`registration` (`regId`, `firstName`, `middleName`, `lastName`, `email`, `nationality`, `dateOfBirth`, `gender`, `nationalId`, `telephoneNumber`, `mobileNumber`, `onlineStatus`, `activationStatus`, `accountStatus`, `userType`, `password`) 
        VALUES ('$regId', '$firstName', '', '$lastName', '$email', '$nationality', '', '', '', '$telephoneNumber', '$mobileNumber', 'offline', 'not active', 'inactive', 'client', '$password')");

        $query=mysqli_query($Con,$sql) or mysql_error();  
     
        $sql3 = ("INSERT INTO `customwriting`.`writerFiles` (`orderId`) 
        VALUES ('$orderId')");

        $query3=mysqli_query($Con,$sql3) or mysql_error();  
     
        $sql4 = ("INSERT INTO `customwriting`.`request` (`orderId`) 
        VALUES ('$orderId')");

        $query4=mysqli_query($Con,$sql4) or mysql_error();  
 


 if (!mysqli_commit($Con)) {
            
             $response["error"]= 1;

            echo json_encode($response);
             exit();
    }else{

        // print("transaction Successfully\n");
            $response["success"]= 1;

            echo json_encode($response);
        }

        /* close connection */
        mysqli_close($Con);

                    }
   
                ?>


<?php
/*include("connect.php");
  if(isset($_POST["submit"]))
    {
        $response=array("success"=>0,"error"=>0);
        //order details
        $orderId            = $_POST['orderId'];
        $paperSubject       = $_POST['paperSubject'];
        $paperTopic         = $_POST['paperTopic'];
        $paperStyle         = $_POST['paperStyle'];
        $languageStyle      = $_POST['languageStyle'];
        $typeOfWork         = $_POST['typeOfWork'];
        $deadline           = $_POST['deadline'];
        $level              = $_POST['level'];
        $numberOfPages      = $_POST['numberOfPages'];
        $numberOfSources    = $_POST['numberOfSources'];
        $total              = $_POST['total'];
        $instructions       = $_POST['instructions'];
        $datePosted         = date("Y/m/d H:I:s");
        //Contact Details
        $regId              =$_POST['regId'];
        $firstName          = $_POST['firstName'];
        $lastName           = $_POST['lastName'];
        $email              = $_POST['email'];
        $nationality        = $_POST['nationality'];
        $telephoneNumber    = $_POST['telephoneNumber'];
        $mobileNumber       = $_POST['mobileNumber'];
    
        $password       = sha1($email);
        

        $sql2 = ("INSERT INTO `customwriting`.`order` (`orderId`, `clientId`, `writerId`, `paperSubject`, `paperTopic`, `paperStyle`, `languageStyle`, `typeOfWork`, `deadline`, `level`, `numberOfPages`, `numberOfsources`, `total`, `instructions`, `datePosted`, `dateCompleted`, `orderStatus`, `fileLocation`) 
        VALUES ('$orderId', '$regId', 'writerId', '$paperSubject', '$paperTopic', '$paperStyle', '$languageStyle', '$typeOfWork', '$deadline', '$level', '$numberOfPages', '$numberOfSources', '$total', '$instructions', '$datePosted', 'dateCompleted', 'not taken', 'fileLocation')");

        $query2=mysql_query($sql2) or mysql_error();  
        if (!$query2) {

            $response["error"]= mysql_error();

            echo json_encode($response);
        }
        $sql = ("INSERT INTO `customwriting`.`registration` (`regId`, `firstName`, `middleName`, `lastName`, `email`, `nationality`, `dateOfBirth`, `gender`, `nationalId`, `telephoneNumber`, `mobileNumber`, `onlineStatus`, `activationStatus`, `accountStatus`, `userType`, `password`) 
        VALUES ('$regId', '$firstName', '', '$lastName', '$email', '$nationality', '', '', '', '$telephoneNumber', '$mobileNumber', 'offline', 'not active', 'inactive', 'client', '$password')");

        $query=mysql_query($sql) or mysql_error();  
        if (!$query) {
          
            $response["error"]= mysql_error();

            echo json_encode($response);
        }
        $sql3 = ("INSERT INTO `customwriting`.`writerFiles` (`orderId`) 
        VALUES ('$orderId')");

        $query3=mysql_query($sql3) or mysql_error();  
        if (!$query3) {
           
            $response["error"]= mysql_error();

            echo json_encode($response);
        }
        $sql4 = ("INSERT INTO `customwriting`.`request` (`orderId`) 
        VALUES ('$orderId')");

        $query4=mysql_query($sql4) or mysql_error();  
        if (!$query4) {
          
            $response["error"]= mysql_error();
            echo json_encode($response);
        }  
        else {

            $response["success"]= 1;

            echo json_encode($response);
                    // echo "<script> alert('Order Successfully Posted !'); </script>";        
                    }
                    }*/
                ?>