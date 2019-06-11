<?php
require_once ('init.php');
$input_names = array(
    'title',
    'email',
    'content'
);
$error_tmp = null;
$success_tmp = null;
$msg = null ;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //check not empty values
    foreach($input_names as $key => $name){
        if(empty($_POST[$name])){
            $error_tmp[] = $name ;
        }else{
            $success_tmp[$name] = $_POST[$name];
        }
    }
    if(empty($error_tmp)){
        $send = sendEmail($success_tmp);
        if($send){
            $msg = '<div class="alert alert-success text-center m-4"> ایمیل شما با موفقیت ارسال شد !</div>';
        }else{
            $msg = '<div class="alert alert-info text-center m-4"> مشکلی در سیستم وجود دارد مجددا تلاش نمایید !</div>';
        }
    }else{
        $msg = '<div class="alert alert-warrning text-center m-4">پرنموندن تمام فیلد ها الزامی می باشد !</div>';        
    }
}else{
    $msg = '<div class="alert alert-danger text-center m-4">در خواست معتبر نمی باشد مجددا تلاش نمایید !</div>'; 
}
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
</body>
<?= $msg ; ?>
</html>
<?php
echo '<script>
        setTimeout(function(){
            window.location.href = \''. BASE_URL .'\';
        }, 3000);
     </script>
    ';
?>