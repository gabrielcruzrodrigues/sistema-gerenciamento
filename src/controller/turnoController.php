<?php
    include("../db/conexao.php"); 
    switch ($_REQUEST["action"]) {
        case 'create':

            $name = $_POST["name"];
            $cargo = $_POST["cargo"];

            $sql_verify = "SELECT * FROM turno WHERE cargo_id=".$cargo;
            $res_verify = $conn->query($sql_verify);
            $rows = $res_verify->num_rows;

            if ($rows < 3) {
                $sql = "INSERT INTO turno (name, cargo_id) VALUES ('{$name}', '{$cargo}')";
                $res = $conn->query($sql);
    
                if ($res == true) {
                    print "<script>alert('turno criado com suceso');</script>";
                    print "<script>location.href='../pages/setores.php';</script>";
                } else {
                    print "<script>alert('Erro ao tentar criar novo turno');</script>";
                    print "<script>location.href='../pages/cadastroSetor.php';</script>";
                }
            } else {
                print "<script>alert('Este cargo já possui os 3 cargos possíveis');</script>";
                    print "<script>location.href='../pages/setores.php';</script>";
            }
            break;
}