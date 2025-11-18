<?php 
    $title       = '25- challenge Dates';
    $description = 'Many ways to handle dates and times.';

    include 'plantilla/header.php';

    echo "<section style='display:flex; justify-content:center; align-items:center; height:60vh;'>";
?>

    <div style="background:#fff; padding:40px 50px; border-radius:25px; box-shadow:0 10px 30px rgba(21, 0, 255, 0.2); text-align:center; width:380px; transition:transform 0.3s ease, box-shadow 0.3s ease;">
    <form method="post" action="">
        <label for="fecha_nacimiento" style="display:block; margin-bottom:12px; font-weight:600; color:#1900fdff; font-size:1.1em;">
            Pon tu fecha de nacimiento:
        </label>
        <input 
            type="date" 
            id="fecha_nacimiento" 
            name="fecha_nacimiento" 
            required 
            style="padding:12px; border:2px solid #1900fdff; border-radius:12px; outline:none; width:100%; font-size:16px; text-align:center; transition:0.3s;"
        >
        <button 
            type="submit" 
            style="margin-top:25px; padding:12px 25px; background:linear-gradient(135deg,#1900fdff,#1900fdff); color:white; font-size:16px; border:none; border-radius:12px; cursor:pointer; transition:background 0.3s ease, transform 0.2s;"
            onmouseover="this.style.background='linear-gradient(135deg,#1900fdff,#1900fdff)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.background='linear-gradient(135deg,#1900fdff,#1900fdff)'; this.style.transform='scale(1)';"
        >
            Calcular Edad
        </button>
    </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fechaNacimiento = $_POST["fecha_nacimiento"];
            if (!empty($fechaNacimiento)) {
                $nacimiento = new DateTime($fechaNacimiento);
                $hoy = new DateTime();
                $edad = $hoy->diff($nacimiento)->y;

                echo "<div class='resultado'>Tienes <strong>$edad años</strong></div>";
            } else {
                echo "<div class='resultado'>⚠ Por favor, ingresa una fecha válida.</div>";
            }
        }
        ?>
    </div>
    <?php include 'plantilla/footer.php' ?>
