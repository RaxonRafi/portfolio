<?php
require_once "header.php"

?>
<!-- Masthead -->
<main id="home" class="masthead jarallax" style="background-image:url('img/bg/personal.jpg');" role="main">
    <div class="opener">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <h1>Hey, I am Richard.</h1>
                    <p class="lead mt-4 mb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Let's talk</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- About -->
<section id="about" class="section">
    <div class="container">
        <h2 data-aos="fade-up">Just trust me.</h2>
        <section class="mt-4">
            <div class="row">
                <div class="col-md-6 col-lg-5 mb-5 mb-md-0" data-aos="fade-up">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered </p>
                    <div class="experience d-flex align-items-center">
                        <div class="experience-number text-parallax">7</div>
                        <div class="text-dark mt-3 ml-4">Years<br> of experience</div>
                    </div>
                </div>
                <div class="col-md-5 offset-lg-2" data-aos="fade-in" data-aos-delay="50">

                    <?php foreach (panda_all('skills') as $single_skill) : ?>
                        <h6 class="mt-0"><?= $single_skill['skill_name'] ?></h6>
                        <div class="progress mb-5">
                            <div class="progress-bar" role="progressbar" data-aos="width" style="width: <?= $single_skill['percentage'] ?>%" aria-valuenow="<?= $single_skill['percentage'] ?>" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="section bg-dark">
    <div class="container">
        <div class="container">
            <div class="row">
                <?php
                foreach (panda_all('services') as $single_service) :
                ?>
                    <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-in">
                        <i class="fa <?= $single_service['service_icon'] ?> text-white fa-5x"></i>
                        <h6 class="text-white"><?= $single_service['service_name'] ?></h6>
                        <p><?= $single_service['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Experience -->
<section id="experience" class="section pb-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6" data-aos="fade-up">
                <h2 class="mb-3 mb-md-0">Experience</h2>
            </div>
            <div class="col-md-5 offset-md-1 text-md-right">
                <h6 class="my-0 text-gray"><a href="">Download my cv</a></h6>
            </div>
        </div>
        <div class="mt-5 pt-5">

            <?php
            foreach (panda_all('experiences') as $single_experience) : ?>
                <div class="row-experience row justify-content-between" data-aos="fade-up">
                    <div class="col-md-4">
                        <div class="h6 my-0 text-gray"><?= $single_experience['duration'] ?></div>
                        <h5 class="mt-2 text-primary text-uppercase"><?= $single_experience['company_name'] ?></h5>
                    </div>
                    <div class="col-md-4">
                        <h5 class="mb-3 mt-0 text-uppercase"><?= $single_experience['designation'] ?></h5>
                    </div>
                    <div class="col-md-4">
                        <p><?= $single_experience['description'] ?></p>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="section">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6" data-aos="fade-up">
                <h2 class="mb-3 mb-md-0">Featured projects</h2>
            </div>
            <div class="col-md-5 offset-md-1 text-md-right">
                <h6 class="my-0 text-gray"><a href="#">View all projects</a></h6>
            </div>
        </div>
        <div class="mt-5 pt-5" data-aos="fade-in">
            <div class="carousel-project owl-carousel">
                <div class="project-item">
                    <a href="#project1" class="popup-with-zoom-anim">
                        <figure class="position-relative">
                            <img alt="" class="w-100" src="img/portfolio/1140x641-1.jpg">
                            <figcaption class="text-white">
                                <h3 class="mb-2 text-white">Neuro</h3>
                                <p>Branding</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="project-item">
                    <a href="#project2" class="popup-with-zoom-anim">
                        <figure class="position-relative">
                            <img alt="" class="w-100" src="img/portfolio/1140x641-2.jpg">
                            <figcaption class="text-white">
                                <h3 class="mb-2 text-white">Unero</h3>
                                <p>Illustration</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="project-item">
                    <a href="#project3" class="popup-with-zoom-anim">
                        <figure class="position-relative">
                            <img alt="" class="w-100" src="img/portfolio/1140x641-3.jpg">
                            <figcaption class="text-white">
                                <h3 class="mb-2 text-white">Guino</h3>
                                <p>Branding</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Modal Dialog 1 -->
<div id="project1" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0">Neuro</h2>
    <div class="mt-5 pt-2 text-dark">
        <div class="row">
            <div class="mb-5 col-md-6 col-lg-3">
                <h6 class="my-0">Clients:</h6>
                <span>Ethan Hunt, John Doe</span>
            </div>
            <div class="mb-5 col-md-6 col-lg-3">
                <h6 class="my-0">Completion:</h6>
                <span>February 5th, 2020</span>
            </div>
            <div class="mb-5 col-md-6 col-lg-3">
                <h6 class="my-0">Project Type:</h6>
                <span>Illustration</span>
            </div>
            <div class="mb-5 col-md-6 col-lg-3">
                <h6 class="my-0">Authors</h6>
                <span>Logan Cee, Paul</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <h6 class="my-0">Budget:</h6>
                <span>$12000</span>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="my-0">Authors</h6>
                <span>Logan Cee, Paul</span>
            </div>
        </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/1140x641-1.jpg">
</div>

<!-- Project Modal Dialog 2 -->
<div id="project2" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0">Neuro</h2>
    <div class="mt-5 pt-2 text-dark">
        <div class="row">
            <div class="col-md-3">
                <h6 class="my-0">Clients:</h6>
                <span>Ethan Hunt, John Doe</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Completion:</h6>
                <span>February 5th, 2020</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Project Type:</h6>
                <span>Illustration</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Authors</h6>
                <span>Logan Cee, Paul</span>
            </div>
        </div>
        <div class="mt-5 row">
            <div class="col-md-3">
                <h6 class="my-0">Budget:</h6>
                <span>$12000</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Authors</h6>
                <span>Logan Cee, Paul</span>
            </div>
        </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/1140x641-2.jpg">
</div>

<!-- Project Modal Dialog 3 -->
<div id="project3" class="container mfp-hide zoom-anim-dialog">
    <h2 class="mt-0">Neuro</h2>
    <div class="mt-5 pt-2 text-dark">
        <div class="row">
            <div class="col-md-3">
                <h6 class="my-0">Clients:</h6>
                <span>Ethan Hunt, John Doe</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Completion:</h6>
                <span>February 5th, 2020</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Project Type:</h6>
                <span>Illustration</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Authors</h6>
                <span>Logan Cee, Paul</span>
            </div>
        </div>
        <div class="mt-5 row">
            <div class="col-md-3">
                <h6 class="my-0">Budget:</h6>
                <span>$12000</span>
            </div>
            <div class="col-md-3">
                <h6 class="my-0">Authors</h6>
                <span>Logan Cee, Paul</span>
            </div>
        </div>
    </div>
    <img alt="" class="mt-5 pt-2 w-100" src="img/portfolio/1140x641-3.jpg">
</div>


<!-- Testimonials -->
<section id="testimonials" class="testimonials section">
    <div class="container">
        <div class="carousel-testimonials owl-carousel">

            <?php
            foreach (panda_all('testimonials') as $single_testimonial) : ?>


                <div class="col-testimonial" data-aos="fade-up">
                    <span class="quiote">"</span>
                    <p data-aos="fade-up"><?= $single_testimonial['description'] ?></p>
                    <p class="mt-5 text-dark" data-aos="fade-up"><strong><?= $single_testimonial['name'] ?></strong> -<?= $single_testimonial['post'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- News -->
<section id="news" class="section bg-light">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6" data-aos="fade-up">
                <h2 class="mb-3 mb-md-0">Latest news</h2>
            </div>
            <div class="col-md-5 offset-md-1 text-md-right">
                <h6 class="text-gray my-0"><a href="#">View all news</a></h6>
            </div>
        </div>
        <div class="mt-5 pt-5">
            <div class="row-news row">
                <?php
                foreach (panda_number_of('news', 3) as $single_news) :
                ?>
                    <div class="col-news col-md-6 col-lg-4" data-aos="fade-in" data-aos-delay="0">
                        <figure class="position-relative">
                            <div class="position-relative">

                                <a href=""><img alt="" class="w-100 d-block" src="img/news/<?= $single_news['news_photo_name'] ?>"></a>
                                <mark class="date"><?= $single_news['news_date_time'] ?></mark>
                            </div>
                            <figcaption>
                                <h5><a href="news-details.php?id=<?=$single_news['id']?>"><?= $single_news['news_headline'] ?></a></h5>
                            </figcaption>
                        </figure>
                    </div>
                <?php
                endforeach;
                ?>

            </div>
        </div>
    </div>
</section>

<!-- Partners -->
<section class="section-sm">
    <div class="container">
        <div class="row-partners row">
            <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in">
                <img alt="" src="img/partners/1.png">
            </div>
            <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="50">
                <img alt="" src="img/partners/2.png">
            </div>
            <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="150">
                <img alt="" src="img/partners/3.png">
            </div>
            <div class="col-partner col-md-6 col-lg-3" data-aos="fade-in" data-aos-delay="200">
                <img alt="" src="img/partners/4.png">
            </div>
        </div>
    </div>
</section>


<?php
require_once "footer.php"
?>