<html>
<body style="background:RGB(221, 160, 221);">
</body>
<link rel="stylesheet" href="../style/style.css">
<?php
    $login=$_POST['login'];
    $password=$_POST['password'];


        if ($password ==  "12345678"){
            session_start();
            $_SESSION['id']=$login;
            setcookie('id', $_SESSION['id'], time() +365*24*3600, null, null, false, true);
            header('Location: http://localhost/ISCC/MyDevBlog/BackOffice/ajout-article.php?');
            exit();
        }
            

        else{
            echo '<h2>L\'accès est réservé aux admins</h2>';
            echo '<A HREF="utilisateurs.php">Vous n\'êtes pas admin ?</A>';
        }
        
?>
<center>
    <img src="style/pain.gif">
</center>

<h3><p><a href="connexion-admin.php"><img class="retour" src="style/retour.png" height="10%" width="10%" alt="Retour"></p> 


</html>
