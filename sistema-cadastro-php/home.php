<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Cadastro</title>
    <link rel="shortcut icon" href="https://image.tmdb.org/t/p/w185/wbFSslyJrJV0nn3lv0KZb2bEfs1.jpg" type="image/x-icon">
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            align-items: center;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: dodgerblue;
        }

        span {
            color: red;
        }

        h1 {
            color: #333;
        }.b a {
            text-decoration: none;
            background-color: rgb(17, 54, 71);
            padding: 15px;
            border-radius: 50px;
            color: #fff;
            border: 3px solid #fff;
        }

        .b a:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
        .b{
            text-align: left;
        }
    </style>
</head>
<body>
<br>
    <div class="b">
        <a href="">Voltar</a>
    </div>

<script>
    window.addEventListener('load', function() {
      alert('Para ver mais filmes faça login ou cadastre-se');
    });
  </script>

<h1>VitorSouza<span>404</span></h1>
    <div class="box">
        <br>
        <a href="login.php">Login</a>
        <br><br><br>
        <a href="formulario.php">Cadastre-se</a>
        <br><br>
    </div>
</body>
</html>