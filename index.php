<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="vh-100 d-flex bg-primary">
    <form action="censure.php" method="GET" class="text-center m-auto bg-white p-4 rounded">
        <div class="text-center">
            <label class="d-block mb-1" for="censureWord">Parola da Censurare</label>
            <input type="text" name="censureWord" id="censureWord">
        </div>
        <div class="my-3 text-center">
            <label class="d-block mb-1" for="paragraph">Paragrafo</label>
            <input style="height:400px;" type="text" name="paragraph" id="paragraph">
        </div>
        <div>
            <button>Invia</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>