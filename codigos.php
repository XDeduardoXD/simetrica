<style>
    body{
        font-family: arial;
        color:#ff5733;
    }
</style>

<?php
#Codigo para Cifrar el mensaje con una llave con el metodo "AES-256-CBC":
function cifrar($mensaje, $llave){
    $inivec =   openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
    $men_encriptado = openssl_encrypt($mensaje, "AES-256-CBC", $llave, 0, $inivec);
    return base64_encode($men_encriptado."::".$inivec);
}

#Codigo para Decifrar el mensaje con una llave con el metodo "AES-256-CBC":
function descifrar($mensaje,$llave){
    list($datos_encriptados, $inivec) = explode('::', base64_decode($mensaje),2);
    return openssl_decrypt($datos_encriptados, 'AES-256-CBC', $llave, 0, $inivec);
}
#Llave vacia:
$llave= "";

#Mensaje vacia:
$mensaje_cifrar= "";

#Boton cifrar sin datos:
$btncifrar= "";

#Boton decifrar sin datos:
$btndecifrar= "";

#Llamamos los datos de los diferentes botones:

    #Caja de texto de las llaves:
if(isset($_POST['boxmsgclave'])){$llave = $_POST['boxmsgclave'];}

    #Caja de texto del mensaje:
if(isset($_POST['boxmsgmensaje'])){$mensaje_cifrar = $_POST['boxmsgmensaje'];}

    #Boton cifrar:
if(isset($_POST['btncifrar'])){$btncifrar = $_POST['btncifrar'];}

    #Boton decifrar:
if(isset($_POST['btndecifrar'])){$btndecifrar = $_POST['btndecifrar'];}

#Obtenemos el mensaje cifrado:
$mensaje_cifrado= cifrar($mensaje_cifrar,$llave);


#Obtenemos el mensaje decifrado:
$mensaje_descifrado= descifrar($mensaje_cifrado, $llave);

#Si se preciona el boton cifrar mandaremos el mensaje cifrado:
if($btncifrar){
    echo "<h4><center>MENSAJE CIFRADO:</center><br><br>" . $mensaje_cifrado . "</h4>";
}

#Si se preciona el boton decifrar mandaremos el mensaje decifrado:
if($btndecifrar){
    echo "<h4><center>MENSAJE DECIFRADO:</center><br><br>" . $mensaje_descifrado . "</h4>";

}

?> 