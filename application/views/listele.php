
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dersler Listesi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <script src="js/jquery-3.4.0.min.js"></script>
</head>
<body>

<div class="container">
      <h3 class="text-center">Dersler Listesi</h3>
        <hr>
    <h4>Ders Ekle <a href="<?php echo base_url('dersler/insertpage')?>"><span style="font-size: 18px" class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> </a> </h4>
    <table class="table table-striped table-hover table-bordered" >
       <thead>
            <th>Ders Kodu</th>
            <th>Ders Adı</th>
            <th>Verildiği Bölüm</th>
            <th>İşlem</th>
       </thead>
       <tbody>
        <?php foreach ($rows as $row) {?>
            <tr>
                <td><?= $row->derskodu ?></td>
                <td><?= $row->ders ?></td>
                <td><?= $row->bolum ?></td>
                <td class="text-center">
                    <button class="btn btn-danger" > <a id="sil" style="color: snow " href="<?php echo base_url("dersler/delete/$row->id")?>">Sil</a>      </button>
                    <button class="btn btn-primary"> <a style="color: snow" href="<?php echo base_url("dersler/updatePage/$row->id")?>">Düzenle</a> </button>

                </td>
            </tr>
       <?php } ?>
       </tbody>
   </table>
</div>

</body>
</html>