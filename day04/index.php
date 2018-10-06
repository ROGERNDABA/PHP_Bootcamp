<?php
    session_start();
    if (isset($_GET['login']) && isset($_GET['passwd']) && isset($_GET['submit']))
    {
        if ($_GET['submit'] && empty($_SESSION))
        {
            $_SESSION['login'] = $_GET['login'];
            $_SESSION['passwd'] = $_GET['passwd'];
        }
    }
?>
<form id='index.php' action='index.php' method='get' accept-charset='UTF-8'>
        <input type='hidden' name='submitted' id='submitted' value='1'/>
        <label for='login' >UserName: </label>
        <input type='text' name='login' id='login'  maxlength="50" /><br>
        <label for='passwd' >Password :</label>
        <input type='passwd' name='passwd' id='passwd' maxlength="50" /><br>
        <input type='submit' name='submit' value='OK' />

</form>

