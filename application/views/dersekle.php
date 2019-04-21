<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <script src="js/jquery-3.4.0.min.js"></script>
</head>
<body>
    <div class="container col-lg-3 col-sm-push-4">
       <h3 class="text-center">Ders Ekleme</h3>
        <hr>
            <form action="<?php echo base_url("dersler/insert")?>" method="post">
                <div class="form-group">
                    <label>Ders Kodu</label>
                    <input type="text" class="form-control" name="derskodu" placeholder="Ders Kodu" >
                </div>
                <div class="form-group">
                    <label>Ders Adı</label>
                    <input type="text" class="form-control" name="ders" placeholder="Ders Adı">
                </div>
                <div class="form-group">
                    <label>Bölüm</label>
                    <input type="text" class="form-control" name="bolum" placeholder="Bölüm">
                </div>
                <div class="form-group">
                    <label>Dersi Veren</label>
                    <input type="text" class="form-control" name="dersiveren" placeholder="Dersi Veren">
                </div>
                <div class="form-group">
                    <label>Dersi Alan Öğrenci Sayisi</label>
                    <input type="text" class="form-control" name="ogrencisayisi" placeholder="Dersi Alan Öğrenci Sayısı">
                </div>
                <div class="form-group">
                    <label>Ders Kredisi</label>
                    <input type="text" class="form-control" name="derskredi" placeholder="Ders Kredisi">
                </div>
                <div class="form-group">
                    <label>Ders İçerik</label>
                    <textarea name="dersicerik "class="form-control" placeholder="Ders İçeriğinden Bahsediniz"></textarea>
                </div>

                <button class="btn btn-success">Dersi Ekle</button>
            </form>

    </div>

</body>
</html>