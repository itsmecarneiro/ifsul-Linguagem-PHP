 <?php
    function validarDados($dados)
    {
        foreach ($dados as $key => $value) {
            if ($key == "idade") {
                if (!is_numeric($value)) {
                    return false;
                }
            }

            if (empty($value)) {
                return false;
            }
        }

        return true;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dados = [
            "nome" => $_POST["nome"],
            "idade" => $_POST["idade"],
            "areaInteresse" => $_POST["area_interesse"]
        ];
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $areaInteresse = $_POST["area_interesse"];

        if (!validarDados($dados)) {
            echo "Campo NOME ou IDADE ou AREA DE INTERESSE não podem estar vazios";
            return;
        }

        // if (empty($nome)) {
        //     echo "<p style='color:red;'>Campo NOME não pode estar vazio!</p>";
        //     return;
        // } else {
        //     echo "<p>Nome: $nome</p>";
        // }

        // if (empty($idade)) {
        //     echo "<p style='color:red;'>Campo IDADE não pode estar vazio!";
        //     return;
        // } else {
        //     echo "<p>Idade: $idade</p>";
        // }

        // if (empty($areaInteresse)) {
        //     echo "<p style='color:red;'>Campo AREA DE INTERESSE não pode estar vazio!";
        //     return;
        // } else {
        //     echo "<p>Área de Interesse: $areaInteresse</p>";
        // }

        if ($idade < 18) {
            $dados["avaliacao"] = "Menor de Idade";
        } elseif ($idade <= 25) {
            $dados["avaliacao"] = "Inicio de carreira";
        } else {
            $dados["avaliacao"] = "Profissional";
        }

        echo json_encode($dados);
    }

    ?>