<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cifrado Simetrica</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Pacifico" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<section id="content-cipher" class="content">

<header class="content-header">
    <h1>Cifrado Asimetrico</h1>
</header>

        <!--Cifrar-->
        <div id="content-msg-encode" class="msg-style display_block">
        
        <!--Formulario-->
        <form action="codigos.php" method="post" target="ventana">   
        
        <p>Clave:</p>
        
        <!--Caja de texto para la llave-->
            <input type="text" id="box-msg-clave" name="boxmsgclave" class="box-clave-style" placeholder="Ingrese su clave..."></input>
            <p>Texto a cifrar:</p>
            
        <!--Caja de texto para el mensaje-->
            <input type="text" id="box-msg-mensaje" name="boxmsgmensaje" class="box-msg-style" placeholder="Ingrese su mensaje..."></input>

        <!--Boton para cifrar-->    
            <input type="submit" name="btncifrar" class="btn-code" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" value="Cifrar"></button>
            
        <!--Boton para decifrar-->
            <input type="submit" name="btndecifrar" class="btn-code" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" value="Decifrar"></button>
        
        <!--Caja con la informacion de cifrado y decifrado-->
            <iframe name="ventana" src="codigos.php" class="ventana"></iframe>
            
            
            <!--Boton Limpiar-->    
            <button onclick="location.reload();" class="btn_reload">Limpiar</button>
            </form>
        </div>
        </div>
    </section>

    <div id="root"></div>
    <script src="cipher.js"></script>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>