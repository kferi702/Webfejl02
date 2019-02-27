<!DOCTYPE html>
<html>
    <head>
        <title>RabiTask | <?= isset($this->title) ? $this->title : 'Base' ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="/css/base.css">
    </head>
    <body>
        <h1>Welcome to RabiTask!</h1>
        <div><?= $content ?></div>
    </body>
</html>
