<?php
/*

Add records to $option and $tablename array
Also add record in switch case in create_userdata.php

*/
$option = array(
    
    "1" => array(
        "1" => array(
            "name" => "user_id",
            "type" => "varchar(255)"
        ),
        "2" => array(
            "name" => "fname",
            "type" => "varchar(50)"
        ),
        "3" => array(
            "name" => "lname",
            "type" => "varchar(50)"
        ),
        "4" => array(
            "name" => "email",
            "type" => "varchar(100)"
        ),
        "5" => array(
            "name" => "day",
            "type" => "int(11)"
        ),
        "6" => array(
            "name" => "month",
            "type" => "int(11)"
        ),
        "7" => array(
            "name" => "year",
            "type" => "int(11)"
        ),
        "8" => array(
            "name" => "reg_date",
            "type" => "varchar(100)"
        ),
        "9" => array(
            "name" => "ip",
            "type" => "varchar(45)"
        ),
        "10" => array(
            "name" => "string",
            "type" => "varchar(25)"
        ),
        "11" => array(
            "name" => "otp",
            "type" => "int(4)"
        ),
        "12" => array(
            "name" => "attempts",
            "type" => "int(4)"
        ),
        "link" => array(
            "name" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to create accountLoginPrimary table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=confirmationdata\',\'sent\')')\">Install</div>",
            
            "type" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to DROP accountLoginPrimary table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=dropconfirmationdata\',\'sent\')')\" style=\"background-color:#f44336;\">Drop</div>"
            )
    ),
    "2" => array(
        "1" => array(
            "name" => "user_id",
            "type" => "varchar(255)"
        ),
        "2" => array(
            "name" => "fname",
            "type" => "varchar(50)"
        ),
        "3" => array(
            "name" => "lname",
            "type" => "varchar(50)"
        ),
        "4" => array(
            "name" => "email",
            "type" => "varchar(100)"
        ),
        "5" => array(
            "name" => "day",
            "type" => "int(11)"
        ),
        "6" => array(
            "name" => "month",
            "type" => "int(11)"
        ),
        "7" => array(
            "name" => "year",
            "type" => "int(11)"
        ),
        "8" => array(
            "name" => "reg_date",
            "type" => "varchar(100)"
        ),
        "9" => array(
            "name" => "ip",
            "type" => "varchar(45)"
        ),
        "10" => array(
            "name" => "string",
            "type" => "varchar(25)"
        ),
        "11" => array(
            "name" => "otp",
            "type" => "int(4)"
        ),
        "12" => array(
            "name" => "blockpriority",
            "type" => "int(4)"
        ), 
        "13" => array(
            "name" => "useragent",
            "type" => "varchar(255)"
        ),
        "14" => array(
            "name" => "password",
            "type" => "varchar(255)"
        ),
        "link" => array(
            "name" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to create userrootdata table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=userrootdata\',\'sent\')')\">Install</div>",
            
            "type" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to DROP userrootdata table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=dropuserrootdata\',\'sent\')')\" style=\"background-color:#f44336;\">Drop</div>"
        )
    ),
    "3" => array(
       "1" => array(
            "name" => "user_id",
            "type" => "varchar(255)"
        ),
        "2" => array(
            "name" => "email",
            "type" => "varchar(100)"
        ),
        "3" => array(
            "name" => "expire",
            "type" => "varchar(100)"
        ),
        "4" => array(
            "name" => "ip",
            "type" => "varchar(45)"
        ),
        "5" => array(
            "name" => "useragent",
            "type" => "varchar(255)"
        ),
        "6" => array(
            "name" => "cookie",
            "type" => "varchar(255)"
        ),
        "7" => array(
            "name" => "user",
            "type" => "varchar(255)"
        ),
        "link" => array(
            "name" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to create usersessiondata table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=usersessiondata\',\'sent\')')\">Install</div>",
            
            "type" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to DROP usersessiondata table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=dropusersessiondata\',\'sent\')')\" style=\"background-color:#f44336;\">Drop</div>"
            )
    ),
    "4" => array(
       "1" => array(
            "name" => "user_id",
            "type" => "varchar(255)"
        ),
        "2" => array(
            "name" => "email",
            "type" => "varchar(100)"
        ),
        "3" => array(
            "name" => "country",
            "type" => "char(100)"
        ),
        "4" => array(
            "name" => "mobile",
            "type" => "BIGINT(15)"
        ),
        "5" => array(
            "name" => "gender",
            "type" => "char(10)"
        ),
        "6" => array(
            "name" => "about",
            "type" => "varchar(2000)"
        ), 
        "7" => array(
            "name" => "quotes",
            "type" => "char(255)"
        ), 
        "8" => array(
            "name" => "profile_pic",
            "type" => "char(255)"
        ),
        "9" => array(
            "name" => "wall_pic",
            "type" => "char(255)"
        ),
        "link" => array(
            "name" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to create userprofiledata table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=userprofiledata\',\'sent\')')\">Install</div>",
            
            "type" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to DROP userprofiledata table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=dropuserprofiledata\',\'sent\')')\" style=\"background-color:#f44336;\">Drop</div>"
            )
    )
);

$tablename = array("confirmationdata",
                   "userrootdata",
                   "usersessiondata",
                   "userprofiledata"
                  );