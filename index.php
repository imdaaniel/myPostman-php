<?php
if (!empty($_GET['btn_call']) && !empty($_GET['url'])) {
    $url = "http://" . str_replace("http://", "", $_GET['url']);
    $json = json_decode(file_get_contents($url));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Postman - PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
        #controles {
            display: flex;
            align-items: center;
        }

        #controles div {
            padding: 25px 25px 25px 0;
        }
    </style>
</head>

<body>
    <div id="titulo">
        <h2>
            Postman v2.0
        </h2>
    </div>

    <div>
        <button id="btn_add" class="btn btn-primary">Adicionar campo</button>
    </div>

    <div>
        <form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <div id="controles">
                <div class="">
                    <label>URL: </label>
                    <input type="text" id="url" name="url" style="width: 500px">
                </div>

                <div>
                    <select id="metodo" disabled="disabled">
                        <option value="GET">GET</option>
                        <option value="POST">POST</option>
                    </select>
                </div>

                <div>
                    <input type="submit" id="btn_call" name="btn_call" class="btn btn-primary">Enviar</button>
                </div>
            </div>

            <div id="inputs">
                <input type="text" id="input1" name="input1">
            </div>
        </form>
    </div>

    <pre>
        <code id="resultado",0>
            <?php if (empty($json)) {
                echo 'resultado aqui';
            } else {
                print_r($json);
            } ?>
        </code>
    </pre>
</body>
</html>
