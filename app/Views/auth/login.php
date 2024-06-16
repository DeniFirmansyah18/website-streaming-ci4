<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<body>
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('img/normal-breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="<?= url_to('login') ?>" method="post">
                            <?= csrf_field() ?>
                            <?php if ($config->validFields === ['email']): ?>
                                <div class="input__item">
                                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                           name="login" placeholder="<?= lang('Auth.email') ?>">
                                    <span class="icon_mail"></span>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="input__item">
                                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                           name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                    <span class="icon_mail"></span>
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="input__item">
                                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                <span class="icon_lock"></span>
                                <div class="invalid-feedback">
                                    <?= session('errors.password') ?>
                                </div>
                            </div>

                            <button type="submit" class="site-btn"><?= lang('Auth.loginAction') ?></button>
                        </form>
                        <?php if ($config->activeResetter): ?>
                            <a href="<?= url_to('forgot') ?>" class="forget_pass"><?= lang('Auth.forgotYourPassword') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($config->allowRegistration) : ?>
                    <div class="col-lg-6">
                        <div class="login__register">
                            <h3>Don't Have An Account?</h3>
                            <a href="<?= url_to('register') ?>" class="primary-btn"><?= lang('Auth.needAnAccount') ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span></span>
                            <ul>
                                <!--<li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

<?= $this->endSection(); ?>
