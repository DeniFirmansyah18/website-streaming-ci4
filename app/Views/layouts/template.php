<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zenflix | Stream</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/plyr.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" type="text/css">
    <style>
        .header__right {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Mengatur elemen ke sebelah kanan */
            gap: 10px; /* Jarak antara elemen */
        }

        .header__right a {
            color: #ffffff; /* Warna teks */
            text-decoration: none; /* Menghapus garis bawah */
        }

        .header__right .search-switch {
            margin-right: 10px; /* Menggeser ikon ke kiri */
        }

        .icon_profile {
            margin-right: 5px; /* Menggeser ikon profile ke kiri */
        }

        .fas.fa-sign-out-alt {
            margin-left: 10px; /* Menggeser ikon logout ke kanan */
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url('img/logo2.png') ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url() ?>">Homepage</a></li>
                                <li><a href="<?= base_url('categories') ?>">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('categories') ?>">Categories</a></li>
                                        <li><a href="<?= base_url('anime-details') ?>">Anime Details</a></li>
                                        <li><a href="<?= base_url('anime-watching') ?>">Anime Watching</a></li>
                                        <li><a href="<?= base_url('blog-details') ?>">Blog Details</a></li>
                                        <li><a href="<?= base_url('signup') ?>">Sign Up</a></li>
                                        <li><a href="<?= base_url('login') ?>">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('blog') ?>">Our Blog</a></li>
                                <li><a href="<?= base_url('contacts') ?>">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="<?= base_url('login') ?>"><span class="icon_profile"></span><?php if (isset($user) && $user): ?><?= $user['username']; ?><?php else: ?><?= user() ? user()->username : 'Guest'; ?><?php endif; ?></a>
                        
                        
                        <a href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>Logout</a>
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <?= $this->renderSection('content') ?>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="<?= base_url() ?>"><img src="<?= base_url('img/logo2.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="<?= base_url() ?>">Homepage</a></li>
                            <li><a href="<?= base_url('categories') ?>">Categories</a></li>
                            <li><a href="<?= base_url('blog') ?>">Our Blog</a></li>
                            <li><a href="<?= base_url('contacts') ?>">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?= base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/player.js') ?>"></script>
    <script src="<?= base_url('js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('js/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
    <script>
        // Initialize background images
        $('.set-bg').each(function() {
            var bg = $(this).data('setbg');
            $(this).css('background-image', 'url(' + bg + ')');
        });
    </script>
</body>
</html>
