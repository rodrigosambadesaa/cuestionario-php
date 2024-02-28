<?php
require('data.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="Test sobre PHP">
    <title>Cuestionario sobre PHP</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
</body>
<h1>Cuestionario sobre PHP</h1>
<?php echo $_SERVER['PHP_SELF']; ?>

<p>La etiqueta de apertura &lt;h1&gt; es un encabezado.</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <p>1. ¿Qué significa PHP?</p>
    <input type="text" name="pregunta1" value="<?php
                                                    if (isset($_REQUEST['pregunta1'])) {
                                                        echo $_REQUEST['pregunta1'];
                                                    }
                                                ?>"><br><br>

    <p>2. ¿Cuál es el símbolo de apertura y cierre de PHP?</p>
    <input type="text" name="pregunta2" value="<?= $_REQUEST['pregunta2'] ?? ''; ?>"><br><br>

    <p>4. ¿Qué tipo de lenguaje es PHP?</p>
    <input type="text" name="pregunta4" value="<?= $_REQUEST['pregunta4'] ?? ''; ?>"><br><br>

    <p>6. ¿Para qué se utiliza PHP principalmente?</p>
    <select name="pregunta6">
        <?php
            foreach (OPCIONES_6 as $valor => $texto) {
                $selected = (isset($_REQUEST['pregunta6']) && $_REQUEST['pregunta6'] === $valor) ? 'selected' : '';
                echo "<option $selected value=\"$valor\">$texto</option>";
            }
        ?>
        <option value="">Selecciona una opción</option>

        <option <?php
                    if (isset($_REQUEST['pregunta6']) && $_REQUEST['pregunta6'] === 'Desarrollo Web') {
                        echo 'selected';
                    }
                ?> value="Desarrollo web">
            Desarrollo web</option>

        <option <?= (isset($_REQUEST['pregunta6']) && $_REQUEST['pregunta6'] === 'datos') ? 'selected' : '' ?> value="datos">Análisis de datos</option>
        <option <?= (isset($_REQUEST['pregunta6']) && $_REQUEST['pregunta6'] === 'IA') ? 'selected' : '' ?> value="IA">Inteligencia artificial</option>
        <option <?= (isset($_REQUEST['pregunta6']) && $_REQUEST['pregunta6'] === 'Otro') ? 'selected' : '' ?> value="Otro">Otro</option>
    </select><br><br>

    <p>7. ¿Qué tipo de variable no puede ser serializada en PHP?</p>
    <input type="radio" name="pregunta7" value="Local"> Variable local<br>
    <input type="radio" name="pregunta7" value="Global"> Variable global<br>
    <input type="radio" name="pregunta7" value="Estática"> Variable estática<br><br>

    <?php
        if (isset($_REQUEST['pregunta7'])) {
            $pregunta7 = $_REQUEST['pregunta7'];
        } else {
            $pregunta7 = '';
        }
    ?>


    <p>8. ¿Qué frameworks PHP conoces?</p>
    <input type="checkbox" name="pregunta8[]" value="Laravel"> Laravel<br>
    <input type="checkbox" name="pregunta8[]" value="Symfony"> Symfony<br>
    <input type="checkbox" name="pregunta8[]" value="CodeIgniter"> CodeIgniter<br>
    <input type="checkbox" name="pregunta8[]" value="CakePHP"> CakePHP<br><br>

    <!-- <input type="submit" value="Enviar respuestas"> -->
    <button>Enviar respuestas</button>

    <?php
    if (isset($_REQUEST['pregunta8'])) {
        $pregunta8 = $_REQUEST['pregunta8'];
    } else {
        $pregunta8 = [];
    }

    foreach (OPCIONES_8 as $valor => $texto) {
        $checked = in_array($valor, $pregunta8) ? 'checked' : '';
        echo "<input type=\"checkbox\" name=\"pregunta8[]\" value=\"$valor\" $checked> $texto<br>";
    }

    ?>

</form>

</html>