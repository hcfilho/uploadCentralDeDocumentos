<?php


    session_start('sessao');

?>

<html>
<head>
<script language="JavaScript" type="text/javascript" src="funcs.js"></script>
</head>
<body>

    <form method="post" action="verif.php" name="form" AUTOCOMPLETE='ON' onSubmit="return valida()">
        usuario:<br>
        <input type="text" name="usu" size="50" maxlength="50" >
        <br>
        Senha:<br>
        <input type="password" name="senha" size="50" maxlength="9" >
        <br><br>
        <input type="submit" value="Entrar">
    </form>

</body>
</html>

