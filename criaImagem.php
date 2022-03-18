<?php


$arquivo = file_get_contents('php://input');
$json = json_decode($arquivo);

//var_dump($json);

//$base64_string = "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" ;
$base64_string = $json->code;

$output_file = './images/teste.png';

    define('UPLOAD_DIR', 'images/');
	$img = $_POST['img'];
	$img = str_replace('data:image/png;base64,', '', $base64_string);
	$img = str_replace(' ', '+', $base64_string);
	$data = base64_decode($base64_string);
	$file = UPLOAD_DIR . 'out' . '.png'; //uniqid()
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.'

    /*$ifp = fopen( $output_file, 'wb');

    stream_filter_append($ifp, 'convert.base64-decode');
    
    fwrite( $ifp, base64_decode($base64_string));

    fclose($ifp);
    
    return $output_file;*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <button type="button" id="enviaReqGet" onclick="enviaReq()">Gerar QR CODE</button>
    <img src= "./images/out.png" alt="qr code">

    <script>
        const options = {
        method: 'GET',
        mode: 'no-cors'
      }

      function enviaReq(){
      fetch('https://apiwpp.herokuapp.com/home', options)
        .then((response) => {
          response.json()
           console.log('deu certo');
        })
        .catch(e => {
          console.log('deu errado');
        })
}
    
    </script>
</body>
</html>