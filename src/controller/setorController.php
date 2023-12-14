<?php
    include("../db/conexao.php"); 
    switch ($_REQUEST["action"]) {
        case 'create':
            $name = $_POST["name"];

            $sql = "INSERT INTO setor (name) VALUES ('{$name}')";
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Cadastro com suceso');</script>";
                print "<script>location.href='../pages/setores.php';</script>";
            } else {
                print "<script>alert('Erro ao tentar cadastrar novo setor');</script>";
                print "<script>location.href='../pages/cadastroSetor.php';</script>";
            }

            break;

        case 'update':
            $name = $_POST["name"];

            $sql = "UPDATE setor SET name='{$name}' WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Editado com suceso');</script>";
                print "<script>location.href='../pages/setores.php';</script>";
            } else {
                print "<script>alert('Não foi possível editar setor');</script>";
                print "<script>location.href='../pages/cadastroSetor.php';</script>";
            }
            break;

        case 'delete':
            $sql = "DELETE FROM setor WHERE id=".$_REQUEST["id"];
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script>alert('Excluido com suceso');</script>";
                print "<script>location.href='../pages/setores.php';</script>";
            } else {
                print "<script>alert('Não foi possível excluir setor');</script>";
                print "<script>location.href='../pages/cadastroSetor.php';</script>";
            }
            break;
    }