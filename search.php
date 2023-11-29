<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultados</h1>
    <div class="url-container">
    <?php
        $conn = new mysqli("localhost","root","", "modoli");

        $sql= "SELECT url,titulo,contenido FROM paginas";
        $resultado = $conn->query($sql);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $titulo = $fila['titulo'];
                $url=$fila['url'];
                $contenido=$fila['contenido'];
    ?>
    <div class="result">
        <h2><?php echo $titulo?></h2>
        <p><strong>URL:</strong> <?php echo $url?></p>
        
        <a href="<?php echo $url?>" target="iframe-container"><?php echo $url?></a>
    </div>
    <?php
    }
    } else {
        echo "no hay links guardados";
    }
    ?>
    </div>
    <div class="iframe-cont">
        <iframe src="" frameborder="0" name="iframe-contianer" id="iframe-container"></iframe>
    </div>
    <script src="script.js"></script>
</body>
</html>