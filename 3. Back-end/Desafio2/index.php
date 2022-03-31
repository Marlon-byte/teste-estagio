<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário </title>
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="shortcut icon" href="faviconn.ico" type="image/x-icon">

</head>
<nav>
    <div class="nav-wrapper">
        <a href="https://www.infornet.com.br/rede-de-prestadores/" target="_blank" rel="external" class="brand-logo">
            Cadastro De Beneficiário</a>
    </div>
</nav>

<body>
    <div class="row">
        <form class="col s12" method="POST" action="dados.php">
            <div class="row">
                <div class="input-field col s2">
                    <input placeholder="Beneficiário" id="" type="text" name="nome" class="validate" required>
                    <label for="">Nome</label>
                </div>
                <div class="input-field col s2">
                    <input id="data" type="date" name="date" class="validate" required>
                    <label for="modelo">Data de nascimento</label>
                </div>
                <div class="input-field col s2">
                    <input placeholder="RG/CPF" name="doc" id="doc" type="text" class="validate" required>
                    <label for="doc">Documento</label>

                </div>
                <div class="input-field col s2">
                    <input placeholder="Ex: F" name="sexo" id="sexo" type="text" class="validate" required>
                    <label for="sexo">Sexo</label>

                </div>
                <div class="input-field col s2">
                    <input placeholder="Ex: A" name="situacao" id="situacao" type="text" class="validate" required>
                    <label for="situacao">Situação</label>
                </div>
            </div>
            <div class="row">

                <div class="input-field col s2">
                    <input placeholder="Ex:Escola..." name="log" id="log" type="text" class="validate" required>
                    <label for="log">Logradouro</label>

                </div>
                <div class="input-field col s1">
                    <input placeholder="Nº" name="num" id="num" type="text" class="validate" required>
                    <label for="num">Número</label>

                </div>
                <div class="input-field col s2">
                    <input placeholder="Bairro" name="bairro" id="bairro" type="text" class="validate" required>
                    <label for="bairro">Bairro</label>

                </div>
                <div class="input-field col s2">
                    <input placeholder="Cidade" name="cidade" id="cidade" type="text" class="validate" required>
                    <label for="cidade">Cidade</label>

                </div>
                <div class="input-field col s2">
                    <input placeholder="Sigla" name="estado" id="estado" type="text" class="validate" required>
                    <label for="estado">Estado</label>

                </div>
            </div>
            <div class="row">

                <div class="input-field col s2">
                    <input placeholder="e-mail" name="email" id="email" type="email" class="validate" required>
                    <label for="email">E-mail</label>

                </div>
                <div class="input-field col s2">
                    <input placeholder="Cel:(xx)x xxxxxxxx" name="tel" id="tel" type="tel" class="validate" required>
                    <label for="last_name">Telefone</label>

                </div>

            </div>



    </div>
    <div class="input-field col s4 " style=" text-align: start;">
        <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
            <i class="material-icons right"></i>
        </button>
    </div>
    </form>
    </div>


    <table class="highlight">
        <thead>
            <tr>
                <th>Beneficiário</th>
                <th>Data de Nascimento</th>
                <th>Documento</th>
                <th>Sexo</th>
                <th>Situação Veículo</th>
                <th>Logradouro</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>E-mail</th>
                <th>Telefone</th>


            </tr>
        </thead>
       

    </table>







  
    <script src="materialize/js/materialize.js"></script>
    <script src="materialize/js/materialize.min.js"></script>



</body>

</html>