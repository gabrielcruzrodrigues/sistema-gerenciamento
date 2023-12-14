<?php
    include("../db/conexao.php");
    switch ($_REQUEST["action"]) {
        case 'create':
            $name = $_POST["name"];
            $setor = $_POST["setor"];
            echo $setors;
            $sql = "INSERT INTO cargo (name, setor_id) VALUES ('{$name}', '{$setor}')";
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='../pages/setores.php';</script>";
            } else {
                print "<script>alert('Erro ao tentar cadastrar novo setor');</script>";
                print "<script>location.href='../pages/setores.php';</script>";
            }
            break;
    }