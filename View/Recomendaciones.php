<!DOCTYPE HTML>
<html>

    <head>
        <title>TurisTico.com</title>
        <meta name="description" content="website description" />

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
        <link rel="stylesheet" type="text/css" href="../style/style.css" title="style" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" >

        <style>
            .contenedor-per{
                margin-bottom: 100px;
            }

            .img-per{
                width: 100%;
            }

            .carr-top{
                margin-top: 2.5%;
            }
        </style>
    </head>

    <body>
        <?php include_once '../Base/header.php'; ?>

        <div class="col-md-6">
            <h2>Buscar recomendación</h2>
            <form>

                <div class="form-group">
                    <label>Tipo de turista</label>
                    <select class="contact form-control" type="text" name="selType" id="selType"  >
                        <option value="0">Turista 1</option>
                        <option value="1">Turista 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tipo de actividad</label>
                    <select class="contact form-control" type="text" name="selType" id="selType"  >
                        <option value="0">Caminata</option>
                        <option value="1">Hotelera todo incluído</option>
                        <option value="2">Cena</option>
                        <option value="3">Hotelera todo incluído</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Calidad del servicio</label>
                    <select class="contact form-control" type="text" name="selType" id="selType"  >
                        <option value="0">*</option>
                        <option value="1">**</option>
                        <option value="2">***</option>
                        <option value="3">****</option>
                        <option value="3">*****</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Precio</label>
                    <input type="number"  />
                </div>

            </form>
            <button type="submit" class="btn btn-default">Buscar</button>
        </div>

        <?php include_once '../Base/footer.php'; ?>
    </body>
</html>