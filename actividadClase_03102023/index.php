<?php
include "head.php"
?>
<body>
    <div class="container">
        <h1>Formulario</h1> 
        <form action="form.php" method="post">
            <div class="form-row">
                <label for="txtnombre">Nombre:</label>
                <input type="text" id="txtnombre" name="txtnombre" required>
            </div>
            <div class="form-row">
                <label for="txtedad">Edad:</label>
                <input type="text" id="txtedad" name="txtedad" required>
            </div>
            <div class="form-row">
                <label for="txtcorreo">Correo:</label>
                <input type="email" id="txtcorreo" name="txtcorreo" required>
            </div>
            <div class="form-row">
                <label for="txtcontra">Contraseña:</label>
                <input type="password" id="txtcontra" name="txtcontra" required>
            </div>
            <div class="form-row">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
<?php
include "footeer.php";
?>
