<!DOCTYPE html>
<html>
<head>
    <title>ES RUKIRA</title>

    <style>
        body {
            background-color: #f0f8ff; 
            color:white; 
            font-size: 12px;
        }

        h3 {
            color:gold;
        
        }
          h4{
                color:aqua;
            } 
            h1{
                color:green;
                
            }

        p {
            color:green; 
        }

        table {
            background-color: rgba(56, 243, 9, 1); 
            radius: 100px;
        }
       input[type="submit"] {
            background-color: hsla(207, 88%, 45%, 1.00); 
            color: white; 
        }
    </style>

</head>

<body>

    <h1><b>ES RUKIRA</b></h3>
    <p><b>Created by  Auberte!</b></p>

    <table cellpadding="30%">
        <tr>
            <td>

                <form action="" method="POST">
                    Username:<input type="text" name="name" placeholder="Enter your name" required><br><br>
                    E-mail:<input type="email" name="email" placeholder="Write your email" required><br><br>
                    Password:<input type="password" name="password" placeholder="Enter your password" required><br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
                 <?php
                if (isset($_POST["submit"])) {
                    $name =($_POST["name"]);
                    $email =($_POST["email"]);
                    print "<h3>Welcome, $name</h3>";
                    print "<h4>Your email: $email</p>";
                }
                ?>

            </td>
        </tr>
    </table>

</body>
</html>