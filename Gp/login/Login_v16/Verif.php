<?php

set_time_limit(0);

function valida_ldap($srv, $usr, $pwd)
{

    $ldap_server = $srv;
    $auth_user = $usr;
    $auth_pass = $pwd;

    // Tenta se conectar com o servidor
    if (!($connect = @ldap_connect($ldap_server))){
       return FALSE;
    }

    // Tenta autenticar no servidor
    if (!($bind = @ldap_bind($connect, $auth_user, $auth_pass))) {
        // se nao validar retorna false
        return FALSE;
    } else {
        // se validar retorna true
        return TRUE;
    }

} // fim funcao conectar ldap

$dominio = "@seudominio.com.br";
$usu = $_REQUEST['usu'].$dominio;
$senha = $_REQUEST['senha'];
$ip_server = "XXX.XXX.XXX.XXX";

if (valida_ldap($ip_server, $usu, $senha)) {
    echo "usuario autenticado<br>";

    session_start();
    $_SESSION['usu'] = $usu;

    header("Location: pagina_que_voce_quer_chamar.php");

}else {
    echo "Usuario ou Senha Invalidos";
    echo "<br><input type='button' value='voltar' onclick='location.href=\"index.php\";'>";
}

?>

funcs.js
function valida() {

    if (form['usu'].value == "") {
        alert("O campo USUARIO e obrigatorio");
        form['usu'].focus();
        return false
    }

    if (form['senha'].value == "") {
        alert("O campo SENHA e obrigatorio");
        form['senha'].focus();
        return false
    }
}

