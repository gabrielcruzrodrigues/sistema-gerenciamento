<?php
    include("../db/conexao.php"); 
    switch ($_REQUEST["action"]) {
        case 'create':
            $name = $_POST["name"];
            $cargo = $_POST["cargo"];

            $sql = "INSERT INTO turno (name, cargo_id) VALUES ('{$name}', '{$cargo}')";
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('turno criado com suceso');</script>";
                print "<script>location.href='../pages/setores.php';</script>";
            } else {
                print "<script>alert('Erro ao tentar criar novo turno');</script>";
                print "<script>location.href='../pages/cadastroSetor.php';</script>";
            }

            break;
}