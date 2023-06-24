<!DOCTYPE html>
<html>
<head>
    <title>Siparişler</title>
    <style>
        .baslik {
            color: hotpink;
        }

        .urun {
            color: black;
        }
    </style>
</head>
<body>
<h1 class="baslik">Sipariş ettiğiniz ürünler:</h1>

@foreach($veriler as $veri)
    <p class="urun">{{ $veri->urun_adi }} :{{$veri->urun_fiyat}}</p>
@endforeach

    <h2> toplam :{{$total}}</h2>


</body>
</html>
