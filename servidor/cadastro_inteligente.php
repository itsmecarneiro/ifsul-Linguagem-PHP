<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema de Cadastro Inteligente</title>
</head>

<body>
    CADASTRO INTELIGENTE
    <form id="form" name="cadastro_inteligente" action="servidor/cadastro.php" method="POST">
        <br>
        Nome: <input type="text" name="nome" />
        <br>
        Idade: <input type="text" name="idade" />
        <br>
        Área de Interesse: <input type="text" name="area_interesse" />
        <br>

        <input type="submit" name="botao" id="enviar" value="Enviar" />
        <input type="reset" name="botao" value="Limpar" />
    </form>
    <?php
    echo "TESTE";
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

        echo "<h3>Dados recebidos:</h3>";

        if (!validarDados($dados)) {
            echo "<p style='color:red;'>Campo NOME ou IDADE ou AREA DE INTERESSE não podem estar vazios!</p>";
            return;
        } else {
            echo "<p>Nome: $nome</p>";
            echo "<p>Idade: $idade</p>";
            echo "<p>Área de Interesse: $areaInteresse</p>";
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
            echo "Menor de idade!";
        } elseif ($idade <= 25) {
            echo "Jovem em início de carreira!";
        } else {
            echo "Profissional!";
        }
    }

    ?>

<script>
    let form = document.getElementById("form");
    let button = document.getElementById("botao");
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        let formData = new FormData()


        let nome = e.target.nome.value;
        let idade = e.target.idade.value;
        let areaInteresse = e.target.area_interesse.value;

        formData.append("nome", nome)
        formData.append("idade", idade)
        formData.append("area_interesse", areaInteresse)

        fetch("./servidor/cadastro.php", {
            method: "POST",
            body: formData
            
        }).then(e => {
            e.json().then(data => {
                alert(`Cadastro de ${data.nome} concluido com sucesso - Idade: ${data.idade} - Area: ${data.areaInteresse} - ${data.avaliacao}`)
            })
        })

    })
    button.on("click", (e) => {
        e.preventDefault();
        alert("Enviado")
    })


</script>
</body>

</html>