<?php session_start();

    // echo $_SESSION['dado1'];
    // echo $_SESSION['dado2'];
    // echo $_SESSION['dado3'];
    // echo $_SESSION['dado4'];

    $dado1 = $_SESSION['dado1'];
    $dado2 = $_SESSION['dado2'];
    $dado3 = $_SESSION['dado3'];
    $dado4 = $_SESSION['dado4'];
  
    use Dompdf\Dompdf;

    require_once("dompdf/autoload.inc.php");

    $dompdf = new DOMPDF();

    $dompdf->load_html('<?xml encoding="UTF-8"> Enviado por: ' . $dado1 . ' <br> <br> 
        Enviado para: ' . $dado2 . ' <br> <br> 
        Assunto principal: ' . $dado3 . ' <br> <br> 
        Menssagem: ' . $dado4);

    $dompdf->setPaper('A4', 'landscape');

    $dompdf->render();

    $dompdf->stream(
        "certificado.pdf",
        array(
            "Attachment" => false 
        )
    );

?>