<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <!--<a href="./categories.html">Categories</a>-->
                        <span><?= esc($video['title']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?= esc($video['thumbnail']); ?>">
                            <div class="comment"><i class="fa fa-calendar-check-o"></i> <?= esc($video['year']); ?></div>
                            <div class="view"><i class="fa fa-clock-o"></i> <?= esc($video['duration']); ?></div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?= esc($video['title']); ?></h3>
                                <!--<span>フェイト／ステイナイト, Feito／sutei naito</span>-->
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p><?= esc($video['description']); ?></p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> <?= esc($video['video_type']); ?></li>
                                            <!--<li><span>Studios:</span> Lerche</li>-->
                                            <li><span>Date aired:</span> <?= esc($video['year']); ?></li>
                                            <!--<li><span>Status:</span> Airing</li>-->
                                            <li><span>Genre:</span> <?= esc($video['genre']); ?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <!--<li><span>Scores:</span> 7.31 / 1,515</li>-->
                                            <!--<li><span>Rating:</span> 8.5 / 161 times</li>-->
                                            <li><span>Duration:</span> <?= esc($video['duration']); ?> Minutes</li>
                                            <li><span>Quality:</span> <?= esc($video['video_quality']); ?></li>
                                            <!--<li><span>Views:</span> 131,541</li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <!--<a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> Follow</a>-->
                                <a href="<?= base_url('video/watching/' . esc($video['id'])); ?>" class="watch-btn"><span>Watch Now</span> <i
                                    class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Reviews</h5>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url(); ?>img/anime/review-1.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url(); ?>img/anime/review-2.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url(); ?>img/anime/review-3.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url(); ?>img/anime/review-4.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url(); ?>img/anime/review-5.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url(); ?>img/anime/review-6.jpg" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="anime__details__sidebar">
                            <div class="section-title">
                                <h5>you might like...</h5>
                            </div>
                            <?php if (!empty($otherVideos) && is_array($otherVideos)): ?>
                                <?php foreach ($otherVideos as $otherVideo): ?>
                            <div class="product__sidebar__view__item set-bg" data-setbg="<?= esc($otherVideo['thumbnail']); ?>">
                                <div class="ep"><?= esc($otherVideo['video_quality']); ?></div>
                                <div class="view"><i class="fa fa-clock-o"></i> <?= esc($otherVideo['duration']); ?></div>
                                <h5><a href="<?= base_url('video/' . esc($otherVideo['id'])); ?>"><?= esc($otherVideo['title']); ?></a></h5>
                            </div>
                            <?php endforeach; ?>
                            <?php else: ?>
                                <p>No videos found</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->
<?= $this->endSection(); ?>