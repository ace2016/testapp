<?php
/**
 * index.php -- Choose [your next] Action
 */

$pageTitle = 'Choose your next Action'; // Page Title

include 'system/config.sys.php'; // Configurations
include 'system/constants.sys.php'; // Defined Constants

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= $pageTitle . ' ' . $pageSeparator . ' ' . SITE_NAME; ?></title>

    <link href="<?= ASSETS_URL; ?>css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="a<?= ASSETS_URL; ?>ssets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

</head>
<body class="bg-primary">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">

                        <!-- Administrative Backend -->
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mt-4">
                            <div class="card text-center h-100">
                                <div class="card-body px-5 pt-5 d-flex flex-column">
                                    <div>
                                        <div class="h3 text-primary">ADMIN</div>
                                        <p class="text-muted mb-4">Gain access to the administrative backend of the app</p>
                                    </div>
                                    <div class="icons-org-create align-items-center mx-auto mt-auto">
                                        <i class="icon-users" data-feather="users"></i>
                                        <i class="icon-plus fas fa-plus"></i>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent px-5 py-4">
                                    <div class="small text-center"><a class="btn btn-block btn-primary" href="#!" target="_blank">Admin Login</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- User Login/Dashboard -->
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 mt-4">
                            <div class="card text-center h-100">
                                <div class="card-body px-5 pt-5 d-flex flex-column align-items-between">
                                    <div>
                                        <div class="h3 text-secondary">USER</div>
                                        <p class="text-muted mb-4">Gain access to the user dashboard of the app</p>
                                    </div>
                                    <div class="icons-org-create align-items-center mx-auto mt-auto">
                                        <i class="icon-users" data-feather="users"></i>
                                        <i class="icon-plus fas fa-plus"></i>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent px-5 py-4">
                                    <div class="small text-center"><a class="btn btn-block btn-secondary" href="account/user/Auth.Login" target="_blank">User Login</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; <b><?= SITE_NAME .'</b> '. date('Y'); ?></div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= ASSETS_URL; ?>js/scripts.js"></script>

</body>
</html>
