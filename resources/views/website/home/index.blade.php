@extends('website.master')
@section('slider')

      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ asset('/') }}website/assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">We are professional</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/') }}website/assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/') }}website/assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/') }}website/assets/img/hero-carousel/4.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Nam libero tempore</h2>
                <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ asset('/') }}website/assets/img/hero-carousel/5.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
   
@endsection

@section('body')
    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </header>
  
          <div class="row about-cols">
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="about-col">
                <div class="img">
                  <img src="{{ asset('/') }}website/assets/img/about-mission.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-bar-chart"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Mission</a></h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="about-col">
                <div class="img">
                  <img src="{{ asset('/') }}website/assets/img/about-plan.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-brightness-high"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Plan</a></h2>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </p>
              </div>
            </div>
  
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="about-col">
                <div class="img">
                  <img src="{{ asset('/') }}website/assets/img/about-vision.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                </div>
                <h2 class="title"><a href="#">Our Vision</a></h2>
                <p>
                  Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                </p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End About Us Section -->
      
  
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3 class="section-title">Services</h3>
          </header>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class=" col-lg-12">						 
          </div>
        </div>
  
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($products as $product )
            
        
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app pt-4">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset($product->image)}}" class="img-fluid" alt="" class="h-100 w-100">
                <a href="{{asset($product->image)}}" data-lightbox="portfolio" data-title="App 1" class="link-preview " title="Zoom"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">{{$product->name}}</a></h4>
                {{-- <p>App</p> --}}
              </div>
            </div>
          </div>

          @endforeach
  
          {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/web3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/app2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/card2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/web2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/app3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/card1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/card3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ asset('/') }}website/assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="{{ asset('/') }}website/assets/img/portfolio/web1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                <a href="{{ route('detail') }}" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
              </figure>
  
              <div class="portfolio-info">
                <h4><a href="{{ route('detail') }}">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div> --}}
  
        </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Our Clients Section ======= -->
      <section id="clients">
        <div class="container" data-aos="zoom-in">
  
          <header class="section-header">
            <h3>Our Clients</h3>
          </header>
  
          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide"><img src="{{ asset('/') }}website/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Our Clients Section -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="section-bg">
        <div class="container" data-aos="fade-up">
  
          <header class="section-header">
            <h3>Testimonials</h3>
          </header>
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('/') }}website/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('/') }}website/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('/') }}website/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('/') }}website/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="{{ asset('/') }}website/assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <img src="{{ asset('/') }}website/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                  </p>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
  
      <!-- ======= Team Section ======= -->
      
      <section id="team">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h3>Delivery time & Pricing</h3>
            <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6">
              <div class="card ">
                <div class="card-body bg-dark text-white rounded">
                  <h2 class="card-title">1 Day </h2>
                  <h4 class="py-3">EXPRESS SERVICE</h4>
                  
                  <p class="">Starting from US $1</p>
                  <hr/>
                  <p class="">On-time delivery.</p>
                  <hr/>
                  <p class="">3 Steps quality check.</p>
                  <hr/>
                  <p class="">24 online support</p>
                  <hr/>
                  <p class="">Simple upload & download</p>
                  
                  <a href="#" class="btn btn-warning fw-bold w-100">Order Now</a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="card ">
                <div class="card-body bg-dark text-white rounded">
                  <h2 class="card-title">1 Day </h2>
                  <h4 class="py-3">EXPRESS SERVICE</h4>
                  
                  <p class="">Starting from US $1</p>
                  <hr/>
                  <p class="">On-time delivery.</p>
                  <hr/>
                  <p class="">3 Steps quality check.</p>
                  <hr/>
                  <p class="">24 online support</p>
                  <hr/>
                  <p class="">Simple upload & download</p>
                  
                  <a href="#" class="btn btn-warning fw-bold w-100">Order Now</a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="card ">
                <div class="card-body bg-dark text-white rounded">
                  <h2 class="card-title">7 Day </h2>
                  <h4 class="py-3">EXPRESS SERVICE</h4>
                  
                  <p class="">Starting from US $1</p>
                  <hr/>
                  <p class="">On-time delivery.</p>
                  <hr/>
                  <p class="">3 Steps quality check.</p>
                  <hr/>
                  <p class="">24 online support</p>
                  <hr/>
                  <p class="">Simple upload & download</p>
                  
                  <a href="#" class="btn btn-warning fw-bold w-100">Order Now</a>
                </div>
              </div>
            </div>
            
             
  
          </div>
  
        </div>
      </section> 
      
      <!-- End Team Section -->
      
      
      
      
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h3>Contact Us</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
  
          <div class="row contact-info">
  
            <div class="col-md-4">
              <div class="contact-address">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <address>A108 Adam Street, NY 535022, USA</address>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-phone">
                <i class="bi bi-phone"></i>
                <h3>Phone Number</h3>
                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
              </div>
            </div>
  
            <div class="col-md-4">
              <div class="contact-email">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p><a href="mailto:info@example.com">info@example.com</a></p>
              </div>
            </div>
  
          </div>
  
          <div class="form">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
  
        </div>
      </section><!-- End Contact Section -->
@endsection