<?php
    include("../db/conexao.php");
    switch ($_REQUEST["action"]) {
        case 'create':

            $name = $_POST["name"];
            $cargo = $_POST["cargo"];
            $turno = $_POST["turno"];

            if ($name == '') {
                print "<script>alert('O nome não pode estar nulo');</script>";
                print "<script>location.href='../pages/cadastroTurno.php';</script>";
                break;
            }

            // $sql_verify = "SELECT * FROM trabalhador WHERE cargo_id=".$cargo;
            // $res_verify = $conn->query($sql_verify);
            // $turno_verify = $fetch_assoc();

            // if (true) {
                $sql = "INSERT INTO trabalhador (name, cargo_id, turno_id) VALUES ('{$name}', '{$cargo}', '{$turno}')";
                $res = $conn->query($sql);
    
                if ($res == true) {
                    print "<script>alert('trabalhador criado com suceso');</script>";
                    print "<script>location.href='../pages/setores.php';</script>";
                } else {
                    print "<script>alert('Erro ao tentar criar novo trabalhador');</script>";
                    print "<script>location.href='../pages/setores.php';</script>";
                }
            // } else {
            //     print "<script>alert('Este turno já esta ocupado');</script>";
            //     print "<script>location.href='../pages/setores.php';</script>";
            // }
            break;
}