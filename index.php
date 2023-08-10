<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form id="miFormulario">
        <label for="comentario"></label>
        <textarea rows="40" cols="70" name="comentario" id="comentario" placeholder=" ejemplo: [ {
    'title': 'fab fa-500px',
    'searchTerms': []
}, {
    'title': 'fab fa-accessible-icon',
    'searchTerms': [ 'accessibility', 'wheelchair', 'handicap', 'person', 'wheelchair-alt' ]
}, {
    'title': 'fab fa-accusoft',
    'searchTerms': []
}]...."></textarea>
        <br>
        <button id="miBoton">Extraer JSON</button>
        <button id="miBoton2">Contar Objetos</button>
        <span id="span"></span>
    </form>
</body>

<script src="app.js"></script>

</html>