<html>
    <head>


        <link rel='stylesheet' type='text/css' href='styles.css' />
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script type='text/javascript' src='menu_jquery.js'></script>
        <meta charset=utf-8 />
        <script type="text/javascript" src="http://areen.dc7.us/New%20folder/ajax.js"></script>

        <style  type="text/css">
            .art-image
            {
                width: 10px;
                height: 10px;
                right:0px;
                top:0px;
                z-index:-1;
            }
            .art-img
            {
                width: 10px;
                height: 10px;


                z-index:0;
                margin-left:140px;

                top:166px;
                right:580px;
            }
            .zzzz
            {

                text-align:left;
                font-size:13pt;
                font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;

            }
            .styled-select {
                width: 240px;
                height: 34px;
                overflow: hidden;
                background: url(new_arrow.png) no-repeat right #ddd;
                border: 1px solid #ccc;
            }
        </style>

        <script language="JavaScript">

            function select_Option(varItem)
            {
                $("#cssmenu").val = varItem;
            }
        </script>
    </head>


    <body>


        <form id="myform2" action="http://areen.dc7.us/New%20folder/lol.php" method="post">
            <?php
            include_once('confg.php');

            $ID_i = mysql_real_escape_string($_POST["ID"]);
            $Password_i = mysql_real_escape_string($_POST["Password"]);

            $sql_txt = "SELECT DISTINCT student_id, student_name,dept FROM stdinfo WHERE student_id = " . $ID_i . " AND student_password ='" . $Password_i . "' ";
            $result = mysql_query($sql_txt);
            if ($result == FALSE) {
                die(mysql_error());
            }

            while ($row = mysql_fetch_array($result)) {
                ///// retreiving image from mysql :

                echo" <img class='art-image' src='http://areen.dc7.us/New%20folder/Capture.jpg'>";
                echo"  <img  class='art-img' src='http://areen.dc7.us/New%20folder/imag.php?SN1=" . $row["student_id"] . "'  />";

                echo" </br>";
                echo "<div   class='zzzz'>Student Name: " . $row["student_name"] . "</br></div>";
                echo "<div   class='zzzz'>Academic Dept: " . $row["dept"] . "</br></div>";
                echo "<div   class='zzzz'>ID : " . $row["student_id"] . "</br></div>";

                echo "<input style='display:none' id='my_id'  name='areen' size='13' hight='10' value=" . $row["student_id"] . " />";
                ECHO "</br>";
            }
            ?>
            <select id="myList" class="styled-select" name="soso" >
                 <option>Select..</option>
                <option>first_2013</option>
                <option>second_2013</option>  
                <option>summer_2013</option>  
            </select>
            
             <button type="submit" id="s" class="login-button">GO</button>
         
        </form>
      
        <div id="output2">
        </div>


    </body>


</html>

