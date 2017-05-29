<html>
<head>
    <title>Proyect CMS</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="shortcut icon" href="../plugins/img/favicon.gif" />
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../plugins/custom/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="../plugins/custom/custom.css">
    <link rel="stylesheet" type="text/css" href="../plugins/bootstrap-slider/bootstrap-slider.js">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Proza+Libre:500,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Mukta+Vaani:800,700,600' rel='stylesheet' type='text/css'>
    <script async src="//c-cdn.coub.com/embed-runner.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://limonte.github.io/sweetalert2/dist/sweetalert2.min.css">
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <script src="../plugins/custom/jquery-multi-step-form.js" type="text/javascript"></script>
    <link href="../plugins/custom/jquery-multi-step-form.css" media="screen" rel="stylesheet" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
</head>
</html>
<body>

<video playsinline autoplay muted loop poster="" id="bgvid">
    <source src="img/wow.mp4" type="video/mp4">
</video>
<br>
<br>
<br>
<div class="id" id="book"></div>
<div id="cargando"></div>
<!-- line modal -->

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <ul id="multistepform-progressbar">
        <li class="active">Informacion WEB</li>
    </ul>
    <div class="form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title text-center" id="lineModalLabel">Instalador Proyect CMS 0.1</h3>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="fileForm" class="jsform" role="form">
                    <div class="form-group">
                        <label for="TitleServer">Titulo De La Pagina Web</label>
                        <input type="text" class="form-control" name="TitleServer" id="TitleServer" placeholder="Titulo Web" required>
                    </div>
                    <div class="form-group">
                        <label for="nameServer">Nombre Del Server</label>
                        <input type="text" class="form-control" name="nameServer" id="nameServer" placeholder="Nombre Del Servidor" required>
                    </div>
                    <div class="form-group">
                        <label for="Realmlist">Realmlist</label>
                        <input type="text" class="form-control" name="Realmlist" id="Realmlist" placeholder="logon.dominio.com" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña Super Usuario</label>
                        <input type="password" class="form-control" name="password1" id="password1" placeholder="Mi Contraseña" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Repite Contraseña Super Usuario</label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Contraseña Super Usuario" onkeyup="checkPass(); return false;" required>
                    </div>
                    <span id="confirmMessage" class="confirmMessage"></span>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" required> Acepto la instalacion
                        </label>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button">Close</button>
                            </div>

                            <div class="btn-group" role="group">
                                <button type="submit" class="btn btn-success btn-hover-green" data-action="save" role="button">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<div id="multistepform-example-container">
    <ul id="multistepform-progressbar">
        <li class="active">Database WEB</li>
        <li>Database Auth</li>
        <li>Database Characters Y World</li>
        <li>SOAP INFO</li>
    </ul>
    <div class="form">
        <form action="system.php?id=2">
            <h2 class="fs-title">Database WEB</h2>
            <h3 class="fs-subtitle">Info DB WEB</h3>
            <input type="text" id="hostWe" name="hostWe" placeholder="IP o Localhost Web Database">
            <input type="text" id="usuarioWe" name="usuarioWe" placeholder="Usuario Base de datos /root default">
            <input type="password" id="passwordWe" name="passwordWe" placeholder="Contraseña Base de datos">
            <input type="text" id="dbWe" name="dbWe" placeholder="Nombre Base De Dato Web">
            <input type="button" name="next" class="next button" value="Next">
        </form>
    </div>

    <div class="form">
        <form action="system.php?id=3">
            <h2 class="fs-title">Database Auth</h2>
            <h3 class="fs-subtitle">Info DB Auth</h3>
            <input type="text" name="hostAu" placeholder="IP o Localhost Auth Database">
            <input type="text" name="usuarioAu" placeholder="Usuario Base de datos /root default">
            <input type="password" name="passwordAu" placeholder="Contraseña Base de datos">
            <input type="text" name="dbAu" placeholder="Nombre Base De Dato Auth">
            <input type="button" name="next" class="next button" value="Next">
        </form>
    </div>
    <div class="form">
        <form action="system.php?id=4">
            <h2 class="fs-title">Database World y Characters</h2>
            <h3 class="fs-subtitle">Info DB World y Characters  </h3>
            <input type="text" name="hostCW" placeholder="IP o Localhost World y Characters Database">
            <input type="text" name="usuarioCW" placeholder="Usuario Base de datos /root default">
            <input type="password" name="passwordCW" placeholder="Contraseña Base de datos">
            <input type="text" name="dbCh" placeholder="Nombre Base De Character">
            <input type="text" name="dbWo" placeholder="Nombre Base De World">
            <input type="button" name="next" class="next button" value="Next">
        </form>
    </div>

    <div class="form">
        <form action="system.php?id=5">
            <h2 class="fs-title">Soap Info</h2>
            <h3 class="fs-subtitle">Info DB World y Characters  </h3>
            <input type="text" id="Soap" name="SoapURL" placeholder="mi.Dominio-wow.com o IP">
            <input type="text" id="Post" name="Port" placeholder="Puerto SOAP default 7878">
            <input type="text" id="UserSoap" name="UserSoap" placeholder="Usuario Rango Admin SOAP WOW">
            <input type="password" id="passwordWe" name="passwordWe" placeholder="Contraseá De Usuario Admin SOAP WOW">
            <input type="button" name="next" class="next button" value="Next">
        </form>
    </div>
</div>





</body>


