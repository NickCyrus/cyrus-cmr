<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<style type="text/css">
        p{
			margin:10px 0;
			padding:0;
		}
		table{
			border-collapse:collapse;
		}
		h1,h2,h3,h4,h5,h6{
			display:block;
			margin:0;
			padding:0;
		}
		img,a img{
			border:0;
			height:auto;
			outline:none;
			text-decoration:none;
		}
		body{
			height:100%;
			margin:0;
			padding:30px;
            background: rgb(248, 248, 248);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
		}

        .contenedor-mail{
            padding:30px;
            background: white;
            border:1px solid lightgray;
            border-radius: 5px; 
            /* box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; */
             box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px; 
        }
</style>

<body>
    <div class="contenedor-mail">
        @yield('body')
    </div>
</body>
</html>