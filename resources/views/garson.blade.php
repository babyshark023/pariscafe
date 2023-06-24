<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garson Cagir</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="img/fav-icon.png" type="image/x-icon">
    <link href="/css/garson.css" rel="stylesheet" >
    <!-- About -->
</head>
<body>
<div class="table container">
    <h2>Garson Cagirma uygulmasina hosgeldiniz</h2>
    <p>Lutfen siparis vermek istediginiz masayi yaziniz</p>

    <div>
        <form action="{{route('cagir')}}" method="get">
        <label>
            <span>Masa No: <span class="required"></span></span>
            <input type="text" name="masanumarasi" >
        </label>
    </div>
    <script type="text/javascript">
        function fonk1()
        {
            window.alert('Garson Yonlendirildi');
        }

    </script>
    <input type="submit" value="Cagir" onclick="fonk1()" class="button">
    </form>
</div>


</body>
</html>
