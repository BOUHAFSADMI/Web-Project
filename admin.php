<html>
<link type="text/css" href="assets/css/style.css" rel="stylesheet"/>
</html>
<body>
<div id="connexion">
    <h2>Connexion Admin</h2>
    <form method="POST" action="controller/adminLogin.php">
        <input name="username" class="input" type="text" placeholder="  UserName" required="required" pattern="[a-zA-Z_]+[0-9]*"><br>
        <input name="password" class="input" type="password" placeholder="  Password" required="required"><br>
        <input name="signin" class="input validation" type="submit" value="Connexion"><br>
    </form>
</div>
</body>
