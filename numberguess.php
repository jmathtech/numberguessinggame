<!DOCTYPE HTML>
<html>
<head>
    <title>Number Guessing Game</title>

    <!--Style sheet-->
    <style>
        body {
            background-color: #fafafa;
            font-family: Verdana;
            color: #80ab8b;
            margin: auto;   
            margin-top: 50px; 
        }

        table {
            background-image: linear-gradient(180deg, rgb(60, 16, 110) , rgb(173, 147, 245));
            border-radius: 10px;
            box-shadow: 0 3px 6px 0 #9c9c9c;
            padding: 20px;
            color: #fff;
            margin: auto;
            margin-top: 50px;
            
        }
        
        h2 {
            color: #74cf8d;
            font-family: Verdana, Helvetica;
    
        }

        td {
            font-family: Verdana, Helvetica;
            border: 0px;
            
        }
        input {
            border-radius: 5px;
            padding-left: 10px;
        }

        input[type=submit] {
            background-color: #74cf8d;
            font-family: Verdana;
            border: 1px;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
            margin-left: 80%;
        }

        input:hover[type=submit] {
            
            background: #409156;
            
        }
    </style>
</head>

    <body>
        <table border="1px">
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <tr>
                <td><h2>Number Guessing Game</h2><br/>
                </td>
            </tr>
            <tr>
                <td colspan="2">Guess the number between 1 - 10: <input type="number" name="num" value="" />
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" value="Submit" />
                </td>
            </tr> 
            <tr>
                <td colspan="2">
                     <!-- PHP Scripts -->
                        <?php 

                        // data from form being stored in variable
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            $number = $_REQUEST['num'];
                            $randomnum = mt_rand(1, 10);

                            if(($number > 0) && ($number < 11)) 
                                {
                                    if ($number != $randomnum)
                                    {
                                        echo "That is incorrect. The correct number is: $randomnum. Please try again.";
                                    }
                                    else
                                    {
                                        echo "That is correct! $randomnum is the correct answer!";
                                    }
                                }
                            
                        }
                        ?>  
                </td>
            </tr>
        </form>
        </table>

       
    </body>

</html>
