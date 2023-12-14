<?php
    include("../db/conexao.php"); 
    switch ($_REQUEST["action"]) {
        case 'create':
            $name = $_POST["name"];

            $sql = "INSERT INTO setor (name) VALUES ('{$name}')";
            $res = $conn->query($sql);
            break;

        case 'edit':

            break;

        case 'excluir':

            break;
    }