<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
         {$config->read('siteName')} &bull; Files
    </title>
    <link rel="stylesheet" href="/src/assets/css/style.css">

    <!-- Page Style-->
        {block name='css'}{/block}
</head>
<body class="bg-gray-200 dark:bg-gray-800">

{block name='pageContent'}{/block}

{block name='js'}{/block}
</body>
</html>