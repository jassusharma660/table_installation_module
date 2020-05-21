<?php
session_start();
if(!isset($_POST['data']))
    die("Error in request");
try
{
    $hash = "_________";//hash generated using php password hash function.
    
    if(isset($_SESSION['auth']) && $_SESSION['auth']== password_verify($_SESSION['auth'],$hash))
    {
        $servername = "localhost";
        $username = "_YourUserid_";
        $password = "_YourPassword_";
        $dbname = "userwebdata";
        $cmd = $_POST['data'];
        $cmd = filter_var($cmd, FILTER_SANITIZE_STRING);

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        switch($cmd)
        {
            case "confirmationdata" :
                                        $sql = "CREATE TABLE confirmationdata(
                                                user_id VARCHAR(255) NOT NULL UNIQUE,
                                                fname VARCHAR(50) NOT NULL,
                                                lname VARCHAR(50),
                                                email varchar(100) NOT NULL UNIQUE,
                                                day INT(11) NOT NULL,
                                                month INT(11) NOT NULL,
                                                year INT(11) NOT NULL,
                                                reg_date VARCHAR(100) NOT NULL,
                                                ip VARCHAR(45) NOT NULL,
                                                string VARCHAR(25) NOT NULL,
                                                otp INT(4) NOT NULL,
                                                attempts INT(4) DEFAULT 0
                                        )";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table confirmationdata created successfully";
                                        } else {
                                            echo "Error creating table confirmationdata: " . $conn->error;
                                        }
                                        break;  
            case "dropconfirmationdata" :
                                        $sql = "DROP TABLE confirmationdata";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table confirmationdata Dropped successfully";
                                        } else {
                                            echo "Error dropping table confirmationdata: " . $conn->error;
                                        }
                                        break;
            case "userrootdata" :
                                        $sql = "CREATE TABLE userrootdata(
                                                user_id VARCHAR(255) NOT NULL UNIQUE,
                                                fname VARCHAR(50) NOT NULL,
                                                lname VARCHAR(50),
                                                email varchar(100) NOT NULL UNIQUE,
                                                day INT(11) NOT NULL,
                                                month INT(11) NOT NULL,
                                                year INT(11) NOT NULL,
                                                reg_date VARCHAR(100) NOT NULL,
                                                ip VARCHAR(45) NOT NULL,
                                                string VARCHAR(25) NOT NULL DEFAULT 0,
                                                otp INT(4) NOT NULL DEFAULT 0,
                                                blockpriority INT(4) NOT NULL DEFAULT 0,
                                                useragent varchar(255) NOT NULL DEFAULT 0,
                                                password varchar(255) NOT NULL DEFAULT 0
                                        )";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table userrootdata created successfully";
                                        } else {
                                            echo "Error creating table userrootdata: " . $conn->error;
                                        }
                                        break;
            case "dropuserrootdata" :
                                        $sql = "DROP TABLE userrootdata";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table userrootdata Dropped successfully";
                                        } else {
                                            echo "Error dropping table userrootdata: " . $conn->error;
                                        }
                                        break;
            case "usersessiondata" :
                                        $sql = "CREATE TABLE usersessiondata(
                                                user_id VARCHAR(255) NOT NULL UNIQUE,
                                                email varchar(100) NOT NULL UNIQUE,
                                                expire VARCHAR(100) NOT NULL,
                                                ip VARCHAR(45) NOT NULL,
                                                useragent varchar(255) NOT NULL DEFAULT 0,
                                                cookie varchar(255) NOT NULL DEFAULT 0,
                                                user varchar(255) NOT NULL DEFAULT 0
                                                )";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table userrootdata created successfully";
                                        } else {
                                            echo "Error creating table userrootdata: " . $conn->error;
                                        }
                                        break;
            case "dropusersessiondata" :
                                        $sql = "DROP TABLE usersessiondata";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table usersessiondata Dropped successfully";
                                        } else {
                                            echo "Error dropping table usersessiondata: " . $conn->error;
                                        }
                                        break;
            case "userprofiledata" :
                                        $sql = "CREATE TABLE userprofiledata(
                                                user_id varchar(255) NOT NULL UNIQUE,
                                                email varchar(100) NOT NULL UNIQUE,
                                                country char(100),
                                                mobile BIGINT(15),
                                                gender char(10),
                                                about varchar(2000),
                                                quotes char(255),
                                                profile_pic char(255),
                                                wall_pic char(255)
                                                )";
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table userprofiledata created successfully";
                                        } else {
                                            echo "Error creating table userprofiledata: " . $conn->error;
                                        }
                                        break;
            case "dropuserprofiledata" :
                                        $sql = "DROP TABLE userprofiledata";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Table userprofiledata Dropped successfully";
                                        } else {
                                            echo "Error dropping table userprofiledata: " . $conn->error;
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