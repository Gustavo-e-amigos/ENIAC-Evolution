<?php
session_start();
$_SESSION['teste'] = "Sessão funcionando!";
echo "Sessão gravada. <a href='ver_sessao.php'>Ver sessão</a>";