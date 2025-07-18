<?php
session_start();
echo "Sessão: " . ($_SESSION['teste'] ?? 'Nada');