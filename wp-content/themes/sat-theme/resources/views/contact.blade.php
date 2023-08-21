<?php /* Template Name: Contact - Hotel */?>

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

  <section class="subpage__contact py-5">
    <div class="container">
      <h2 class="subpage__contact--heading">get in touch</h2>
      <p class="subpage__contact--text">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      
      <div class="subpage__contact__content">
        <div class="row m-0 p-0 d-flex justify-content-between">

        <form action="" class="subpage__contact__content__form col-md-6 col-lg-6 m-0 p-0">
          <div class="row">

            
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
              <label for="exampleInputName">Name</label>
              <input type="email" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
              <label for="exampleInputEmail">Email</label>
              <input type="Email" class="form-control" id="exampleInputEmail">
            </div>
            <div class="form-group col-12">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <a href="" class="subpage__contact__content__form--btn">Send Message</a>
            
          </div>
        </form>

        <div class="subpage__contact__content__right col-md-6 col-lg-5">
          <div class="row m-0 p-0">

            <div class="subpage__contact__content__right__contact col-sm-6 col-md-12 col-lg-6">
              <h3 class="subpage__contact__content__right__contact--head">Address</h3>
              <p class="subpage__contact__content__right__contact--text">43 Raymouth Rd. Baltemoer, London 3910</p>
            </div>
            <div class="subpage__contact__content__right__contact col-sm-6 col-md-12 col-lg-6">
              <h3 class="subpage__contact__content__right__contact--head">Phone</h3>
              <p class="subpage__contact__content__right__contact--text">+1 939 3839 399</p>
              <p class="subpage__contact__content__right__contact--text">+1 492 5991 203</p>
            </div>
            <div class="subpage__contact__content__right__contact col-sm-6 col-md-12 col-lg-6">
              <h3 class="subpage__contact__content__right__contact--head">Follow</h3>

              <div class="row m-0 p-0 d-flex justify-content-start">

                <div class="subpage__contact__content__right__contact__icon-box">
                    <a class="subpage__contact__content__right__contact__icon-box--box" href="http://"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="subpage__contact__content__right__contact__icon-box">
                    <a class="subpage__contact__content__right__contact__icon-box--box" href="http://"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="subpage__contact__content__right__contact__icon-box">
                    <a class="subpage__contact__content__right__contact__icon-box--box" href="http://"><i class="fa-brands fa-facebook-f"></i></a>
                </div>
                <div class="subpage__contact__content__right__contact__icon-box">
                    <a class="subpage__contact__content__right__contact__icon-box--box" href="http://"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <div class="subpage__contact__content__right__contact__icon-box">
                    <a class="subpage__contact__content__right__contact__icon-box--box" href="http://"><i class="fa-brands fa-pinterest"></i></a>
                </div>
                <div class="subpage__contact__content__right__contact__icon-box">
                    <a class="subpage__contact__content__right__contact__icon-box--box" href="http://"><i class="fa-brands fa-dribbble"></i></a>
                </div>
           
            </div>
            </div>
            <div class="subpage__contact__content__right__contact col-sm-6 col-md-12 col-lg-6">
              <h3 class="subpage__contact__content__right__contact--head">Email</h3>
              <p class="subpage__contact__content__right__contact--goto"><a href="mailto:info@mydomain.com">info@mydomain.com</a></p>
            </div>
          
          </div>
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