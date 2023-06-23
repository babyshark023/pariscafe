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

    <b class="baslik">ÜRÜN BİLGİLERİNİ GİRİNİZ</b>
</div>
<form action="{{route('ek')}}" method="get" class="form-bolumu" enctype="multipart/form-data">
    @csrf



    <label for="tatlı_icecek">Ürünün Türünü Giriniz:</label>
    <select class="custom-select" id="tatlı_icecek" name="urun_cesit" required>
        <option value="">Ürünü Seçiniz</option>
        <option value="0">tatlı</option>
        <option value="1">içecek</option>
    </select>
    <br>
    <br>



    <label for="adi">Ürünün Adı:</label>
    <input type="text" id="adi" name="urun_adi" required>
    <br><br>

    <label for="fiyat">Ürünün Fiyatı:</label>
    <input type="text" id="fiyat" name="urun_fiyat" required>
    <br><br>


    <input type="submit" value="ekle">
</form>





</body>
</html>

