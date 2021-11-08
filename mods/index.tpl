<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=10">
    <title>{{$_title}}</title>
    {{if $_header!=""}}
        {{include file=$_header}}
    {{/if}}
    
    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        .sidebar {
            height: 100%;
            width: 50px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: firebrick;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 4px 8px 4px 32px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        #sidebar-full {
            transition: 0.5s;
            margin-left: -250px;  /* menu toggle: 0/-250 */
        }
        .sidebar a:hover {
            color: white;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 5px;
            font-size: 36px;
            margin-left: 50px;
        }

        .mySidebar {
            width: 50px; /* menu toggle: 50/250 */
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
            margin-left: 40px; /* menu toggle: 40/240 */
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }
    </style>
    <script src="mods/index.js"></script>
    {{if file_exists("`$_module_path``$_module`.header.tpl")}}
        <!-- module script -->
        {{include file="`$_module_path``$_module`.header.tpl"}}
    {{/if}}
</head>
<body>
    {{if count($_jsvars)>0}}
    <script> // JS VARS
        {{foreach from=$_jsvars item=val key=key}}
        var {{$key}} = "{{$val}}";
        {{/foreach}}
    </script>
    {{/if}}
        
    <div id="mySidebar" class="sidebar" style="display:none">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">☰</a>
        <!-- https://stackoverflow.com/questions/39655110/what-happened-to-the-pull-left-and-pull-right-classes-in-bootstrap-4 -->
        <div style="margin-top:100px" id="sidebar-full">
            
            <a href="#">Setup</a>            
        </div>
    </div>    

    <div id="main">
        {{include file="`$_module_path``$_module`.tpl"}}        
    </div>

    <script>
        function toggleNav() {
            if(document.getElementById("main").style.marginLeft== "40px"||document.getElementById("main").style.marginLeft== "") {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("sidebar-full").style.marginLeft = "0px";
                document.getElementById("main").style.marginLeft = "240px";
                setCookie('openmenu',1,1);
            } else {
                document.getElementById("mySidebar").style.width = "50px";
                document.getElementById("sidebar-full").style.marginLeft = "-250px";
                document.getElementById("main").style.marginLeft= "40px";
                setCookie('openmenu',0,1);
            }
        }

        function buildMenu() {
            var menus = [
                {"title":"Dashboard", "link": "?m=dashboard", "icon": "fa-swatchbook"},
                {"title":"Management", "link":"?m=management", "icon":"fa-archive" }
            ];

            let menuHtml = "";
            for (row of menus) {
                let rowTitle = row['title'];
                let rowLink = row['link'];
                let rowIcon = row['icon'];
                menuHtml +=  `
                <div class='d-flex justify-content-between w-100'>
                    <p style='margin-bottom:0'><a href='${rowLink}' style='display:block' onclick='toggleNav()'>${rowTitle}</a></p>
                    <p style='margin-bottom:0'><a href='${rowLink}' style='display:block; margin-right:10px' title='Dashboard'><i class='fas ${rowIcon}'></i></a>
                    </p>
                </div>`;
            }
            $("#sidebar-full").html(menuHtml);
        }
        
        function closeNav() {
            document.getElementById("mySidebar").style.width = "50px";
            document.getElementById("main").style.marginLeft= "50px";
        }        

        $(document).ready(function() {
            buildMenu();
            let om = getCookie('openmenu');
            if(om==null) {
                setCookie('openmenu',0,1);
                om = 0;
            } 

            if(om==1) {
                toggleNav();
            }
            $("#mySidebar").show();
        })
    </script>
</body>
</html>