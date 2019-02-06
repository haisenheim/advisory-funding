<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <?= $this->Html->css('../concept/vendor/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('../concept/vendor/fonts/circular-std/style.css') ?>
    <?= $this->Html->css('../concept/libs/css/style.css') ?>
    <?= $this->Html->css('../concept/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="<?= $this->Url->build(['controller'=>'Front','action'=>'index']) ?>"><img class="logo-img" src="<?= $this->Url->image('logo-obac.png',['fullBase'=>true]) ?>" alt="logo"></a>
            <span class="splash-description">Saisissez vos parametres de compte .</span>
        </div>
        <div class="card-body">
            <form action="<?= $this->Url->build(['controller'=>'Users','action'=>'login']) ?>" method="post">
                <input type="hidden" name="_csrfToken" value="<?= $token ?>"/>
                <div class="form-group">
                    <input name="email" class="form-control form-control-lg" id="username" type="text" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group">
                    <input name="password" class="form-control form-control-lg" id="password" type="password" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se rappeler de moi</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0" style="text-align: center">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Creer un compte</a></div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<?= $this->Html->script('../concept/vendor/jquery/jquery-3.3.1.min.js') ?>
<!-- bootstap bundle js -->
<?= $this->Html->script('../concept/vendor/bootstrap/js/bootstrap.bundle.js') ?>
</body>

</html>