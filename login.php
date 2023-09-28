<?php 
require_once('includes/connection.php');
?>
    <main>
        <div class="login">
            <form action="index.php" method="post">
                <fieldset>
                    <legend><h1>Login</h1></legend>
                    <p>
                        <label for="">Email: </label> 
                        <input type="text" name="email" id="" placeholder="example@g4g.com">
                    </p>
                    <p>
                        <label for="">Password: </label> 
                        <input type="password" name="password" id="" placeholder="password">
                    </p>
                    <p>
                        <button type="submit" name="submit">Login</button>
                    </p>                   
        </div>
    </main>
<?php  
mysqli_close($connection); 
?>