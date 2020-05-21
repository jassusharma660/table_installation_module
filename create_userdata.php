 <?php
session_start();
if(!isset($_POST['data']))
    die("Error in request");
try
{
    $hash = "$2y$10\$pwkK.36uhYjHIA6EuUZ3oOCizJvpWBJKL2UAtAYMDMUu4ab73.eaC";
    
    if(isset($_SESSION['auth']) && $_SESSION['auth']== password_verify($_SESSION['auth'],$hash))
    {
        $servername = "localhost";
        $username = "jassusharma660";
        $password = "*#YPLAP14jt";
        $dbname = "beatsniff_schema";
        $cmd = $_POST['data'];
        $cmd = filter_var($cmd, FILTER_SANITIZE_STRING);

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        switch($cmd)
        {
            case "masterdatatable" :
                                        $sql = "CREATE TABLE `masterdatatable` (
												  `userid` varchar(20) NOT NULL,
												  `email` varchar(255) NOT NULL,
												  `password` varchar(255) NOT NULL,
												  `firstname` varchar(50) NOT NULL,
												  `lastname` varchar(50) NOT NULL,
												  `dob` date NOT NULL,
												  `gender` tinyint(4) NOT NULL DEFAULT '0',
												  `accesslevel` tinyint(4) NOT NULL DEFAULT '0'
												) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table masterdatatable created successfully";
                                        } else {
                                            echo "Error creating table masterdatatable: " . $conn->error;
                                        }
                                        break;  
            case "dropmasterdatatable" :
                                        $sql = "DROP TABLE masterdatatable";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table masterdatatable Dropped successfully";
                                        } else {
                                            echo "Error dropping table masterdatatable: " . $conn->error;
                                        }
                                        break;
            default: die("Wrong selection");
        }
    }
}
catch(Exception $e)
{
    echo "Error: Contact Admin";
}
?>