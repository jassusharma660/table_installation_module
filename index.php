<?php
require './data.php';
session_start();

$dbname = "userwebdata";

$hash = "$2y$10\$pwkK.36uhYjHIA6EuUZ3oOCizJvpWBJKL2UAtAYMDMUu4ab73.eaC";

if(isset($_POST['password']) && password_verify($_POST['password'],$hash))
{
    $_SESSION['auth'] = $_POST['password'];
}
if(!isset($_SESSION['auth']) || $_SESSION['auth']!= password_verify($_SESSION['auth'],$hash))
{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>IM | Login</title>
        <link rel="stylesheet" type="text/css" href="./data/jquery.material.form.css">
        <link rel="icon" href="./data/im.png"/>
        <style>
            @font-face 
            {
                font-family: 'ProductSans-Regular';
                src: url('./data/ProductSans-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            body
            {
                background: #eee;
                font-family: 'ProductSans-Regular';
            }
            #login
            {
                width: 300px;
                background: #fff;
                padding: 30px;
                text-align: center;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            

            button
            {
                background: #444;
                border: none;
                color: #fff;
                margin-top: 20px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 40px;
                padding-right: 40px;
                border-radius: 2px;
                box-shadow: 0 0 2px 2px rgba(0,0,0,0.1);
                width: 100%;
                cursor: pointer;
                }
            button:hover
            {
                background: #333;
            }
            button:focus
            {
                background: #aaa;
            }

        </style>
	</head>
	<body>
       <div id="login">
           <img src="data/logo_main.svg" style="padding-bottom:20px;"/>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="material" id="material">
                <input type="password" name="password" placeholder="Password" autocomplete="off" required/>  
                <button>Access</button>
            </form>
        </div>
        
        <script type="text/javascript" src="./data/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="./data/jquery.material.form.min.js"></script>
        
        <script type="text/javascript">
            $(function(){
                $('form.material').materialForm();
            });
        </script>
	</body>
</html>
<?php
}
else
{
?>

<!DOCTYPE html>
<html>
    <head>
        <title>INSTALLATION MODULE</title>
        <link rel="icon" href="./data/im.png"/>
    </head>
    <style>
        @font-face 
        {
            font-family: 'ProductSans-Regular';
            src: url('./data/ProductSans-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body
        {
            color:#444;
            background:#fdfdfd;
            font-family: "ProductSans-Regular";
            margin:0;
            padding:0;
            border:0;
        }
        a
        {
            color: #444;
            text-decoration: none;
        }
        #logo
        {   
            background: #1976D2;
            padding: 5px;
            position: fixed;    
            width: 100%;
            box-shadow: rgba(0,0,0,0.2) 0px 0px 14px 0px;
        }
        .head
        {
            background: #2196F3;
            color: #fff;
            padding: 20px;
            padding-bottom: 100px;
            padding-top: 150px;
        }
        .sub_head
        {
            font-size: 15px;
            color: #BBDEFB;
        }
        .tile
        {
            margin: -70px 40px;
            width: 250px;
            background: #fff;
            box-shadow: rgba(0,0,0,0.2) 0px 0px 4px 0px;
            color: #fff;
            padding-bottom: 10px;
            display: inline-block;
        }
        .tile_head
        {
            height: 100px;
            width: 100%;
            background: #455A64;
        }
        .tile_head_span
        {
            display: block;
            clear: both;
            padding-top: 50px;
            padding-left: 10px;
        }
        .button
        {
            margin-left: auto;
            margin-right: auto;
            background: #455A64;
            padding: 5px;
            border-radius: 2px;
            box-shadow: rgba(0,0,0,0.2) 0px 0px 4px 0px;
            margin: 10px;
            font-size: 10px; 
            display: block;
            width: 40%;
            color: #fff;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .button:hover
        {
            box-shadow: rgba(0,0,0,0.7) 0px 0px 4px 0px;
            cursor: pointer;
        }
        .logout
        {
            background: #455A64;
            border-radius: 2px;
            box-shadow: rgba(0,0,0,0.2) 0px 5px 14px 1px;
            font-size: 13px; 
            width: 50px;
            height: 50px;
            color: #fff;
            text-align: center;
            display: inline-block;
            border-radius: 50%;
            position: fixed;
            bottom: 30px;
            right: 30px;
        }
        .logout img
        {
            margin: 4px;
        }
        .logout:hover
        {
            box-shadow: rgba(0,0,0,0.7) 0px 0px 4px 0px;
            cursor: pointer;
        }
        #table_content
        {
            border-collapse: collapse;
            border: none;
            padding: none;
            outline: none;
        }
        #table_content th
        {
            width: 250px;
            background: #607D8B;
            height: 30px;
            border: none;
            color: #fff;
            text-align: center;
            vertical-align: middle;
        }
        #table_content td
        {
            color: #727272;
            text-align: center;
            font-size: 13px;
            vertical-align: middle;
            padding: 10px;
        }
       
        .popup
        {
            background: #fff;
            width: 400px;
            height: 200px;
            top: 30%;
            left: 35%;
            position: fixed;
            border-radius: 10px;
            padding: 30px;
            box-shadow: rgba(0,0,0,0.5) 0px 0px 50px 0px;
        }
        .title
        {
            color: #444;
            font-size: 30px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        .message
        {
            color: #888;
            font-size: 15px;
            margin-top: 40px;
        }
        .confirm
        {
            display: inline-block;
            background: #fff;
            box-shadow: rgba(0,0,0,0.1) 0px 0px 10px 0px;
            width: 40%;
            padding: 10px;
            text-align: center;
            position: relative; 
            bottom: -60px;
            margin-right: 15px;
        }
        .confirm:hover
        {
            background: #eee;
            cursor: pointer;
        }
        .close_confirm_show_popup
        {
            display: inline-block;
            background: #fff;
            box-shadow: rgba(0,0,0,0.1) 0px 0px 10px 0px;
            width: 40%;
            padding: 10px;
            text-align: center;
            position: relative; 
            bottom: -60px;
            margin-left: 15px;
        }
        .close_confirm_show_popup:hover
        {
            background: #eee;
            cursor: pointer;
        }
        .popup_bg
        {
            background: rgba(0,0,0,0);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }
        .loading
        {
            background: #fff;
            width: 100px;
            box-shadow: rgba(0,0,0,0.1) 0px 0px 10px 0px;
            position: fixed;
            bottom: 100px;
            right: 20px;
            padding: 10px;
            text-align: center;
            border-radius: 2px;
        }
        
        .loading img
        {
            padding-top: 4px;
        }
        .loading span
        {
            position: relative;
            top: -6px;
        }
        .alert
        {
            background: #1976D2;
            color: #fff;
            box-shadow: rgba(0,0,0,0.2) 0px 0px 10px 0px;
            position: fixed;
            bottom: 100px;
            right: 20px;
            padding: 10px;
            text-align: center;
            border-radius: 2px;
            direction: rtl;
            cursor: pointer;
        }
    </style>
<body>
    <div id="logo"><img src="./data/logo.svg" height="60px"/>
        <div href="./data/logout.php" class="logout" onclick="confirm_show_popup('Logout','Do you really want to log out?',' ./data/logout.php')"><img src="data/lock.svg" height="40px"/></div></div>
    <div class="head"><?php echo $dbname;?> database
        <br/>
        <span class="sub_head">"Please rembember to create a database named as <?php echo $dbname;?> in your mysql server"</span>
    </div>
    
   
    <?php
    $i = 0;
    foreach($option as $opt)
    {
        
?>
    <div class="tile">
        <div class="tile_head">
            <span class="tile_head_span"><?php echo $tablename[$i];?></span>
        </div>
        <table id="table_content">
            <tr>
                <th>Name</th>
                <th>Type</th>
            </tr>
        
            <?php foreach($opt as $o){ ?>
            <tr>
            
                <td><?php echo $o['name'];?></td>
                <td><?php echo $o['type'];?></td>
            </tr>
            <?php } ?>
            
        </table>
    </div>
<?php
        $i++;
    }
?>
    <div class="loading">
        <img src="./data/loading.gif"/>
        <span>
            Loading
        </span>
    </div>
    
    <div class="alert"></div>
    
    <div class="popup_bg"></div>
    <div class="popup">
        <div class="title">
        </div>
        <div class="message">
        </div>
        <a href="" class="confirm">Confirm</a>
        <div class="close_confirm_show_popup">close</div>
    </div>
</body>
    <script type="text/javascript" src="./data/jquery-2.1.4.min.js"></script>
      
    <script>
        $(document).ready(function(){            
            $('.popup').hide();
            $('.popup_bg').hide();
            $('.loading').hide();
            $('.alert').hide();
            $('.close_confirm_show_popup').click(function(){
                hide_popup();
            });        
            $('.alert').click(function(){
                $('.alert').fadeOut();
            });
        });
            
        function confirm_show_popup(title,message,link)
        {
            $('*').css({'-moz-filter':'grayscale(100%)','-webkit-filter':'grayscale(100%)','filter':'gray','filter':'grayscale(100%)'});
            $('.title').html(title);
            $('.message').html(message);
            $('.confirm').attr("href",link);
            $('.popup').fadeIn();
        }
        
        function send_data(url,data,afterSend)
        {
            $.ajax({
                type:"POST",
                url: url,
                data: data,
                encode: "true",
                beforeSend: function(){
                    $('.loading').show();
                    hide_popup();
                },
                success: function(html){
                    sent(html);
                }
            });
        }
        function hide_popup(){
            $('.popup').fadeOut(); 
            $('.popup_bg').hide(); 
            $('*').css({'-moz-filter':'','-webkit-filter':'','filter':'','filter':''});
        }
        function sent(msg)
        {
            $('.loading').hide();
            $('.alert').fadeIn();
            $('.alert').html(msg);
        }
    </script>
    
</html>
<?php
}
?>