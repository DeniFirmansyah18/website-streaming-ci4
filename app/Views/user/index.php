<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section Begin -->
<section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
            <?php if (!empty($videos) && is_array($videos)): ?>
                <?php foreach ($videos as $video): ?>
                <div class="hero__items set-bg" data-setbg="<?= esc($video['backdrop']); ?>">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label"><?= esc($video['genre']); ?></div>
                                <h2><?= esc($video['title']); ?></h2>
                                <p><?= esc($video['description']); ?></p>
                                <a href="<?= base_url('video/' . esc($video['id'])); ?>"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                    <?php else: ?>
                        <p>No videos found</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php if (!empty($videos) && is_array($videos)): ?>
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
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php if (!empty($videos) && is_array($videos)): ?>
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
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php if (!empty($videos) && is_array($videos)): ?>
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
                        </div>
                    </div>
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Action</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php if (!empty($videos) && is_array($videos)): ?>
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
                                        <h5><a href="<?= base_url('video/' . esc($video['id'])); ?>"><?= esc($video['title']); ?></a></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <p>No videos found</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                            <?php if (!empty($videos) && is_array($videos)): ?>
                                <?php foreach ($videos as $video): ?>
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="<?= esc($video['thumbnail']); ?>">
                                <div class="ep"><?= esc($video['video_quality']); ?></div>
                                <div class="view"><i class="fa fa-clock-o"></i> <?= esc($video['duration']); ?></div>
                                <h5 class="title"><a href="<?= base_url('video/' . esc($video['id'])); ?>"><?= esc($video['title']); ?></a></h5>
                            </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <p>No videos found</p>
                            <?php endif; ?>
<!--                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="<?= base_url(); ?>img/sidebar/tv-2.jpg">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="<?= base_url(); ?>img/sidebar/tv-3.jpg">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="<?= base_url(); ?>img/sidebar/tv-4.jpg">
                    <div class="ep">18 / ?</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="<?= base_url(); ?>img/sidebar/tv-5.jpg">
                <div class="ep">18 / ?</div>
                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                <h5><a href="#">Fate stay night unlimited blade works</a></h5>
            </div>-->
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>New Comment</h5>
        </div>
        <?php if (!empty($videos) && is_array($videos)): ?>
            <?php foreach ($videos as $video): ?>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="<?= esc($video['thumbnail']); ?>" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Active</li>
                    <li><?= esc($video['video_type']); ?></li>
                </ul>
                <h5><a href="<?= base_url('video/' . esc($video['id'])); ?>"><?= esc($video['title']); ?></a></h5>
                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
            </div>
        </div>
        <?php endforeach; ?>
        <?php else: ?>
            <p>No videos found</p>
        <?php endif; ?>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<?= $this->endSection(); ?>