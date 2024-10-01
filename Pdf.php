<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar PDF</title>
    <style>
        /* Estilos para el botón de impresión */
        .print-button {
            margin: 20px 0;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h3>Hola mundo</h3>

    <button class="print-button" onclick="printPDF()">Imprimir PDF</button>

    <?php
    // Incluye el autoload de Composer
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;

    // Crear una nueva instancia de Dompdf
    $dompdf = new Dompdf();

    // Cargar contenido HTML
    $html = '<h3>Hola mundo</h3>';
    $dompdf->loadHtml($html);

    // Configurar el tamaño de papel y la orientación
    $dompdf->setPaper('A4', 'landscape');

    // Renderizar el HTML como PDF
    $dompdf->render();

    // Guardar el PDF en el servidor
    $pdfOutput = $dompdf->output();
    file_put_contents('Documento.pdf', $pdfOutput);
    ?>

    <script>
        function printPDF() {
            window.open('Documento.pdf', '_blank');
        }
    </script>
</body>
</html>