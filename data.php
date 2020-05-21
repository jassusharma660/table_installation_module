<?php
/*

Add records to $option and $tablename array
Also add record in switch case in create_userdata.php

*/
$option = array(
    
    "1" => array(
        "1" => array(
            "name" => "userid",
            "type" => "varchar(255)"
        ),
        "2" => array(
            "name" => "email",
            "type" => "varchar(50)"
        ),
        "3" => array(
            "name" => "password",
            "type" => "varchar(50)"
        ),
        "4" => array(
            "name" => "firstname",
            "type" => "varchar(100)"
        ),
        "5" => array(
            "name" => "lastname",
            "type" => "int(11)"
        ),
        "6" => array(
            "name" => "dob",
            "type" => "int(11)"
        ),
        "7" => array(
            "name" => "gender",
            "type" => "int(11)"
        ),
        "8" => array(
            "name" => "accesslevel",
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
            "name" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to create masterdatatable table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=masterdatatable\',\'sent\')')\">Install</div>",
				
            "type" => "<div href=\"\" class=\"button\" onclick=\"confirm_show_popup('Confirm!','Do you really want to DROP masterdatatable table in userData Database?','javascript:send_data(\'./create_userdata.php\',\'data=dropmasterdatatable\',\'sent\')')\" style=\"background-color:#f44336;\">Drop</div>"
            )
		)
    );

$tablename = array("masterdatatable");