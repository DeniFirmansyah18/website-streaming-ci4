<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                <?php if (!empty($query)): ?>
                                    <h4>Search Results for "<?= esc($query) ?>"</h4>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php if (!empty($videos)): ?>
                            <?php foreach ($videos as $video): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= esc($video['thumbnail']); ?>">
                                        <div class="ep"><?= esc($video['video_quality']); ?></div>
                                        <div class="comment"><i class="fa fa-calendar-check-o"></i> <?= esc($video['year']); ?></div>
                                        <div class="view"><i class="fa fa-clock-o"></i> <?= esc($video['duration']); ?></div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li><?= esc($video['video_type']); ?></li>
                                        </ul>
                                        <h5><a href="<?= base_url('video/' . esc($video['id'])); ?>"><?= esc($video['title']); ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <p>No videos found</p>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Product Section End -->

<?= $this->endSection(); ?>