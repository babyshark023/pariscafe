<!DOCTYPE html>
<html>
<head>
    <title>Siparişler</title>
    <style>
        .baslik {
            color: hotpink;
        }

        .urun {
            color: white;
        }
    </style>
</head>
<body>
<h1 class="baslik">Sipariş ettiğiniz ürünler:</h1>

@foreach($veriler as $veri)
    <p class="urun">{{ $veri->urun_adi }}</p>
@endforeach

</body>
</html>
