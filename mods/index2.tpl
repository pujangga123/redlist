<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{block name=title}$_title{/block}</title>

    {block name=header}
        {include file="header.tpl"}
    {/block}
    
    </style>
    <script src="mods/index.js"></script>    
</head>
<body>
    <div id="main">
        {block name=content}
        {/block}
    </div>   
</body>
</html>