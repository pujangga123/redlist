<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$_title}</title>
    {if $_header!=""}
        {include file=$_header}
    {/if}
    
    
    </style>
    <script src="mods/index.js"></script>
    {if file_exists("`$_page_path``$_page`.header.tpl")}
        <!-- module script -->
        {include file="`$_page_path``$_page`.header.tpl"}
    {/if}
</head>
<body>
    <div id="main">
        {include file="`$_page_path``$_page`.tpl"}        
    </div>
   
</body>
</html>