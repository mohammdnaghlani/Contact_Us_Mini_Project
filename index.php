<?php
    require_once ('init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= link_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/bootstrap-rtl.min.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/fontiran.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/styles.css')?>" rel="stylesheet">
    <title>Mini CMS</title>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
        <div class="col-12 bg-light p-2 rounded border">با  ما در ارتباط باشید !</div>
        </div>
    </div>
    <div class="container mt-2 ">
        <div class="row ">
            <div class="col-12">
                <form action="<?=link_url('email.php')?>" method="POST">
                    <div class="form-group">
                        <label for="title">عنوان * :</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="email">پست الکترونیک * :</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group ">
                        <textarea name="content" rows="10" class="form-control" placeholder="متن پیام *"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-left">ارسال</button>
               </form>
            </div>
        </div>
    </div>
</body>
</html>