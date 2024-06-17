<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Test</title>
</head>
<body>
    <form action="censure.php" method="GET">
        <div>
            <label for="censureWord">Parola da Censurare</label>
            <input type="text" name="censureWord" id="censureWord">
        </div>
        <div>
            <label for="paragraph">Paragrafo</label>
            <input type="text" name="paragraph" id="paragraph">
        </div>
        <div>
            <button>Invia</button>
        </div>
    </form>
</body>
</html>