<?php /* Template Name: Service - Hotel */?>

<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @include('partials.header-mobile')


<div class="section-banner">
  <img style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);"/>
      <div class="section-banner__text">
        <div class="container">
          <h1 class="section-banner__text--heading"><?php the_title(); ?></h1>
          <p class="section-banner__text--text"><?php the_content(); ?></p>
        </div>
      </div>
      <div class="section-banner__shadow"></div>
</div>
    
    
<div class="top-shadow"></div>

<div class="subpage">

    <section class="subpage__services py-5 mb-5">
    <div class="container">
        <h2 class="section-heading">our services</h2>
    </div>

        <div class="subpage__services__content">
            
            <div id="carouselExampleInterval" class="carousel slide mb-5" data-bs-ride="carousel">
                <div class="container-fluid">
                    <div class="carousel-inner py-5">

                          <div class="carousel-item active" data-bs-interval="1000">
                              <div class="subpage__services__content__single">
                                  <div class="subpage__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trekking.png" class="" alt="...">
                                </div>
                                <h3 class="subpage__services__content__single--title">Lorem, ipsum dolor.</h3>
                                <p class="subpage__services__content__single--text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum alias suscipit quam.</p>
                                <button class="subpage__services__content__single--btn btn">learn more</button>
                            </div>
                        </div>

                          <div class="carousel-item active" data-bs-interval="2000">
                              <div class="subpage__services__content__single">
                                  <div class="subpage__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maps.png" class="" alt="...">
                              </div>
                              <h3 class="subpage__services__content__single--title">Lorem, ipsum dolor.</h3>
                              <p class="subpage__services__content__single--text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum alias suscipit quam.</p>
                              <button class="subpage__services__content__single--btn btn">learn more</button>
                          </div>
                          </div>

                        <div class="carousel-item active" data-bs-interval="3000">
                            <div class="subpage__services__content__single">
                                <div class="subpage__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/suitcases.png" class="" alt="...">
                            </div>
                            <h3 class="subpage__services__content__single--title">Lorem, ipsum dolor.</h3>
                            <p class="subpage__services__content__single--text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum alias suscipit quam.</p>
                            <button class="subpage__services__content__single--btn btn">learn more</button>
                        </div>
                        </div>

                        <div class="carousel-item active" data-bs-interval="4000">
                            <div class="subpage__services__content__single">
                                <div class="subpage__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/suitcases.png" class="" alt="...">
                            </div>
                            <h3 class="subpage__services__content__single--title">Lorem, ipsum dolor.</h3>
                            <p class="subpage__services__content__single--text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum alias suscipit quam.</p>
                            <button class="subpage__services__content__single--btn btn">learn more</button>
                        </div>
                        </div>

                        <div class="carousel-item active" data-bs-interval="4000">
                            <div class="subpage__services__content__single">
                                <div class="subpage__services__content__single--icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/suitcases.png" class="" alt="...">
                            </div>
                            <h3 class="subpage__services__content__single--title">Lorem, ipsum dolor.</h3>
                            <p class="subpage__services__content__single--text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repellat, magni facere expedita laudantium nam odio harum alias suscipit quam.</p>
                            <button class="subpage__services__content__single--btn btn">learn more</button>
                        </div>
                        </div>

                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Prev</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                      </div>
            </div>

    </div>
    </section>

    <section class="main__aboutus py-5">
    <div class="container-fluid">
        <div class="main__aboutus__content">
            <div class="row m-0 p-0 d-flex justify-content-between">

                <div class="main__aboutus__content__bg"></div>

                  <div class="main__aboutus__content__img col-sm-12 col-md-12 col-lg-5">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" class="" alt="...">
                    </div>

                <div class="col-sm-12 col-md-12 col-lg-3"></div>
                <div class="main__aboutus__content__right col-sm-12  col-md-12 col-lg-4">
                    <h3 class="main__aboutus__content__right--title">about hotel</h3>
                    <p class="main__aboutus__content__right--text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus adipisci rem ex! Perferendis voluptatibus, at eligendi ab provident vitae minima similique, saepe adipisci, deleniti illo a. </p>
                    <p class="main__aboutus__content__right--text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae voluptatibus adipisci rem ex! Perferendis voluptatibus, at eligendi ab provident vitae minima similique, saepe adipisci, deleniti illo a. </p>
                </div>
            
            </div>
        </div>
    </div>
    </section>

    <section class="main__socials py-5">
      <div class="container">

          <div class="main__socials__text-box">
          <h3 class="main__socials__text-box--title col-lg-3">instagram</h3>
          <p class="main__socials__text-box--text col-lg-7">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis ullam, corrupti non pariatur tenetur unde fugiat consequuntur atque sed rerum obcaecati nesciunt tempora deleniti quisquam?</p>
          </div>
      </div>

      <div class="container-fluid m-0 p-0">
          <div class="main__socials__content">

              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="row m-0 p-0">

                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" alt="First slide">
                          </div>
                      </div>

                      <div class="carousel-inner d-none d-xl-block">
                          <div class="carousel-item active">
                              <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" alt="First slide">
                          </div>
                      </div>
                      <div class="carousel-inner d-none d-xl-block">
                          <div class="carousel-item active">
                              <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" alt="First slide">
                          </div>
                      </div>

                      <div class="carousel-inner d-none d-xl-block">
                          <div class="carousel-item active">
                              <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" alt="First slide">
                          </div>
                      </div>
                      <div class="carousel-inner d-none d-xl-block">
                          <div class="carousel-item active">
                              <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-sec.jpg" alt="First slide">
                          </div>
                      </div>
                      

                  </div>
                </div>

              </div>

      </div>
  </section>
    
</div>




@php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
