<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?= $this->Html->css('../concept/vendor/bootstrap/css/bootstrap.min.css') ?>
    <?= $this->Html->css('../concept/vendor/fonts/circular-std/style.css') ?>
    <?= $this->Html->css('../concept/libs/css/style.css') ?>
    <?= $this->Html->css('../concept/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>
    <?= $this->Html->css('../concept/vendor/charts/chartist-bundle/chartist.css') ?>
    <?= $this->Html->css('../concept/vendor/charts/morris-bundle/morris.css') ?>
    <?= $this->Html->css('../concept/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') ?>
    <?= $this->Html->css('../concept/vendor/charts/c3charts/c3.css') ?>
    <?= $this->Html->css('../concept/vendor/fonts/flag-icon-css/flag-icon.min.css') ?>
    <?= $this->Html->css('indicator.css') ?>
    <?= $this->Html->css('style.css') ?>
    <title>OBAC ADVISORY & FUNDING</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
            <a style="font-size: smaller" class="navbar-brand" href="#"><img style="max-height: 50px; max-width: 70px" src="<?= $this->Url->image('logo-obac.png',['fullBase'=>true]) ?>" alt=""/>OBAC ADVISORY & FUNDING</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i>&nbsp;OPPORTUNITES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LEVER DES FONDS</a>
                    </li>

                </ul>
                <a href="<?= $this->Url->build(['controller'=>'Users','action'=>'login']) ?>">CONNEXION</a>
            </div>
        </nav>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div style="margin-left: 0" class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="row bg-blue text-center" style="margin-top: 1px; padding: 30px 0 10px 0">
                        <div class="container">
                            <h3 class="text-uppercase"><strong>Opportunités d'investissement</strong></h3>
                        </div>
                </div>
                <div class="container dashboard-content ">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </div>

            <div>
                <div class="row">
                    <div class="bg-gray-lighter" style="min-height: 196px;">
                        <div class="container toppadded-50"><h3 class="text-center">Avertissements</h3><p class="text-left small little-line-height">
                                Nous vous rappelons qu’un investissement au capital de start-up et PME de croissance présente un risque de
                                perte en capital pouvant représenter jusqu’à la totalité de l'investissement réalisé, ainsi qu'un risque
                                d'absence de liquidité à l'issue de la période d'investissement souhaitée. N’investissez jamais de l’argent
                                que vous ne seriez pas prêt à perdre et diversifiez au maximum vos investissements.
                            </p><p class="text-left small little-line-height">
                                Les informations présentées ci-dessus ne constituent pas des recommandations d’investissement et ne sont en
                                aucun cas suffisantes pour justifier une décision d’investissement. Avant toute souscription de titres
                                financiers, nous vous invitons à prendre connaissance de l’ensemble des informations relatives à l’opération
                                et à la société, et notamment la rubrique « Facteurs de Risques » document d’information disponible sur
                                notre site dans l'onglet "Documents".
                            </p>
                            <p class="text-left small little-line-height">
                                Nous attirons votre attention sur les risques spécifiques des sociétés en collecte ci-dessous, présentés au
                                chapitre II "Risques liés à l’activité de l’émetteur et son projet" du document d’information.
                            </p>
                        </div>
                    </div>
                    <div class="bg-blue toppadded-50 text-center">
                        <div class="container">
                            <h3>Afin d'accéder à toutes les opportunités d'investissement, c'est simple, rejoignez la communauté Smartangels&nbsp;!</h3>
                            <div class="toppadded-20">
                                <a class="btn btn-danger btn-lg" href="https://www.smartangels.fr/welcome/register">Rejoignez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <?= $this->Html->script('../concept/vendor/jquery/jquery-3.3.1.min.js') ?>
    <!-- bootstap bundle js -->
    <?= $this->Html->script('../concept/vendor/bootstrap/js/bootstrap.bundle.js') ?>
    <?= $this->Html->script('multi-form.js') ?>
    <!-- slimscroll js -->
    <?= $this->Html->script('../concept/vendor/slimscroll/jquery.slimscroll.js') ?>
    <!-- main js -->
    <?= $this->Html->script('../concept/libs/js/main-js.js') ?>
    <?= $this->Html->script('../concept/vendor/charts/chartist-bundle/chartist.min.js') ?>

    <!-- sparkline js -->
    <?= $this->Html->script('../concept/vendor/charts/sparkline/jquery.sparkline.js') ?>

    <!-- morris js -->
    <?= $this->Html->script('../concept/vendor/charts/morris-bundle/raphael.min.js') ?>
    <?= $this->Html->script('../concept/vendor/charts/morris-bundle/morris.js') ?>
    <?= $this->Html->script('../concept/vendor/charts/c3charts/c3.min.js') ?>
    <?= $this->Html->script('../concept/vendor/charts/c3charts/d3-5.4.0.min.js') ?>
    <?= $this->Html->script('../concept/vendor/charts/c3charts/C3chartjs.js') ?>
    <?= $this->Html->script('../concept/libs/js/dashboard-ecommerce.js') ?>
</body>
 
</html>