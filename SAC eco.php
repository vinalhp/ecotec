<?php
    if(isset($_POST['submit']))

    print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['celular']);
    print_r($_POST['cidade']);
    print_r($_POST['estado']);
    print_r($_POST['endereço']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sac Eco</title>
    <link rel="stylesheet" href="sac.css">
</head>
<body>
    <div class="sidebar">
        <h1>Menu <span style="color: green;">Eco</span><span style="color: blue;">Tech</span></h1>
        <ul>
            <li><a href="inicio ecotech.html">Início</a></li>
            <li><a href="reutilizar eco.html">Reutilizar</a></li>
            <li><a href="descarte eco.html">Descartar</a></li>
            <li><a href="SAC eco.html">Contato</a></li>
        </ul>
    </div>
    <div class="content">
        <h1>Entre em contato <span style="color: green;"> conosco</h1> </div>
    
    <section class="formo">
        <div class="interface">
            <form method="post" action="SAC eco.php">
                <input type="text" name="nome" id="nome" placeholder=" Seu nome completo:" required>
                <input type="text" name="email" id="email" placeholder=" Seu Email:" required>
                <input type="text" name="celular" id="celular" placeholder=" Seu celular:" required>
                <input type="text" name="cidade" id="cidade" placeholder=" cidade:" required>
                <input type="text" name="estado" id="estado" placeholder=" estado:" required>
                <input type="text" name="endereço" id="endereço" placeholder=" Seu endereço:" required>
                <textarea name="" id="" placeholder="Sua mensagem" required></textarea>
                <div class="btn-enviar"> <input type="submit" value="ENVIAR"></div>
            </form>
        </div>
    </section>
</div>
</body>
</html>