<html>
    <body>
        <form action="" method="POST">
            user name:<input type="text" name="username" placeholder="enter your name" required>
            E-mail:<input type="text" name="email" placeholder="write your email" required>
            Pssword:<input type="password" name="password" placeholder="enter your password" value="password" required>
            <input type="submit" name="button" value="submit">
        </form>
        <?php
        $username=$_POST['username'];
        $Email=$_POST['email'];
        print "welcome" . $username ."<br>";
        print "your email" .$email . "<br>";
    </body>
</html>