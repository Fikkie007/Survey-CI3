<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/signin.css">
    <link rel="shortcut icon" type="image/png" href="Assets/web.png" />
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="Assets/web.png" alt="">
        </div>
        <div class="text-center mt-4 name">

            <h4>MASUK ADMINISTRATOR</h4>
            <div class="text-center">
                <h6 class="text-muted">Survey Kepuasan Pelanggan</h6>
            </div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <form class="admin" method="POST" action="<?= base_url('auth'); ?>">
            <div class=" form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password" value="<?= set_value('password'); ?>">
                <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button class="btn mt-3" type="submit">Login</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
</body>

</html>