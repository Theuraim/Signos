<?php include('layouts/header.php'); ?>
    <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="container mt-4 center-form">
        <h1 >Descubra seu Signo</h1>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
        </div>
        <div class="central-div">
            <button type="submit" id="enviar-dados" class="btn btn-primary mt-3" style = "align: center">Descobrir Signo</button>
        </div>
    </form>
<?php include('layouts/footer.php'); ?>