 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />

<?php 
    include("bancoDeDados.php"); 
?>

</head>
<body>

    <main>
        <h2>Menu</h2>
        <a href="cadastrar_filme.html"><button class = "menu">cadastro de filmes</button></a>

        <a href="index.php"><button class = "menu">venda de ingresso</button></a>

        <a href="cadastrar_cliente.html"><button class = "menu">cadastro de clientes</button></a>
    </main><br>

    <main>
        <form method="post" action="bancoDeDados.php">
            <h2>Vnenda de ingressos</h2>
            <div>
            <?php 
                listaFilmes();
            ?> 
            </div>
            <br><br><br><br><br><br><br>

            <label>Numero_Poltrona:</label>
            <input class="full" type="text" name="numeroP"> <br>

            <label>Preço:</label>
            <input class="full" type="text" name="preco"> <br>

            <label>Estado_Venda:</label>
            <input class="full" type="number" name="estado">

            <label>Metodo de pagamento:</label> 
            <input type="radio" name="metodo" value="dinheiro">Dinheiro</input>
            <input type="radio" name="metodo" value="debito">Debito</input>
            <input type="radio" name="metodo" value="credito">Credito</input>

            <label>Tipo:</label> 
            <input type="radio" name="tipo" value="meia">Meia</input>
            <input type="radio" name="tipo" value="inteira">Inteira</input>

            <label>Data:</label>
            <input class="full" type="date" name="data">

            <label>Horarios:</label>
            <input class="full" type="time" name="horario">

            <label>Linguagem:</label>
            <input class="full" type="text" name="linguagem">

            <label>Sala:</label>
            <input class="full" type="text" name="sala">

            <label>Cpf cliente:</label>
            <input class="full" type="text" name="cpf_cliente">
            <br><br>
            <input type="submit" value="Finalizar" class ="menu">
        </form>
    </main>
</body>
</html>
