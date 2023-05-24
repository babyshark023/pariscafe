<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


</head>
<style>

</style>
<body>
<div class="giris_navbar">

    <b class="baslik">ÜRÜN BİLGİLERİNİZİ GİRİNİZ</b>
</div>
<form action="{{route('urun_post')}}" method="get" class="form-bolumu" enctype="multipart/form-data">
    @csrf
    <label for="foto">Ürün Fotografı:</label>
    <input type="file" id="urun_foto" name="urun_foto" accept="image/*" required>
    <br>
    <br>


    <label for="tatlı_icecek">Ürünün Türünü Giriniz:</label>
    <select class="custom-select" id="tatlı_icecek" name="tatlı_icecek" required>
        <option value="">Ürünü Seçiniz</option>
        <option value="0">tatlı</option>
        <option value="1">içecek</option>
    </select>
    <br>
    <br>



    <label for="adi">Ürünün Adı:</label>
    <input type="text" id="adi" name="adi" required>
    <br><br>

    <label for="fiyat">:</label>
    <input type="text" id="fiyat" name="fiyat" required>
    <br><br>


    <input type="submit" value="İlan Ver">
</form>





</body>
</html>

