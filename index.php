<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="b4/css/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Vue shopping list</title>
</head>

<body>
<div id="app" class="container">
    <h2>{{title}}</h2>
    <add-item-component></add-item-component>
    <items-component></items-component>
    <div class="footer">
        <hr/>
        <em>Change the title of your shopping list here</em>
        <change-title-component></change-title-component>
    </div>
</div>

<div v-square="lala"></div>

<script src="scripts/vue.js"></script>
<script src="scripts/script.js"></script>
</body>

</html>
