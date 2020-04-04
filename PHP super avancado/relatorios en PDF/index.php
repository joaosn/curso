<?php  
ob_start();
?>


<h1>helow stckoverflow</h1>
<h3>olokinho meuuuuuu</h3>

<?php 
$html = ob_get_contents();
ob_end_clean();
 


require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('txt.pdf','D'); // n e interesante tu mostrar nada apos esse comando !!!
// I = abrir no navegador
// D = fazer download
// F =  salva no sevirdor 
?>