@extends('master')

@push('styles')
  <title>Home</title>
  <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
@endpush

@section('content')
    <div id="homeMainConatiner" class="swiper-container mainslider">
        <div class="swiper-wrapper">
        <div id="homeMainSlider" class="swiper-slide">
            <div class="sliderImageContainer">
                <img class="img-fluid" src="{{ asset('assets/images/msi.png') }}" alt="" srcset="">
                <h3>MSI GS65 Stealth</h3>
                <button type="button" class="btn btn-primary home-slider-btn">View Product</button>
            </div>
        </div>
        <div id="homeMainSlider" class="swiper-slide">
            <div class="sliderImageContainer">
                <img class="img-fluid" src="{{ asset('assets/images/msi1.png') }}" alt="" srcset="">
                <h3>MSI GL65</h3>
                <button type="button" class="btn btn-primary home-slider-btn">View Product</button>
            </div>
        </div>
        <div id="homeMainSlider" class="swiper-slide">
            <div class="sliderImageContainer">
                <img class="img-fluid" src="{{ asset('assets/images/msi.png') }}" alt="" srcset="">
            </div>
        </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
  </div>
  
  
  <section class="home-bottom-section">
    <br><br><br>
    <div id="slider2" class="swiper-container slider2">
        <h3 class="section-header">Top Trending</h3>
        <br><br>
      <div id="card-swiper-wrapper" class="swiper-wrapper">
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                <a href="">
                  <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                </a>
                <br>
                <span class="card-product-name"><a href="">MSI GS65</a></span>
                <span class="card-product-price">1400$</span>
                <div style="clear: both;"></div>
                <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
              
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi1.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        
      </div>
      <br><br><br><br>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <br><br>

    <br><br><br>
    <div id="slider2" class="swiper-container slider2">
        <h3 class="section-header">New Products</h3>
        <br><br>
      <div id="card-swiper-wrapper" class="swiper-wrapper">
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                <a href="">
                  <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                </a>
                <br>
                <span class="card-product-name"><a href="">MSI GS65</a></span>
                <span class="card-product-price">1400$</span>
                <div style="clear: both;"></div>
                <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
              
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi1.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        <div id="card-slider" class="swiper-slide card-slider">
            <div class="sliderCardContainer">
              <div class="slider-card-image">
                    <a href="">
                      <img class="img-fluid mx-auto d-block" src="{{ asset('assets/images/msi.png') }}" alt="">
                    </a>
                    <br>
                    <span class="card-product-name"><a href="">MSI GS65</a></span>
                    <span class="card-product-price">1400$</span>
                    <div style="clear: both;"></div>
                    <h5 style="text-align: center !important;" class="seeDetails-btn"><a class="card-seeDetails" href="">See Details</a></h5>
              </div>
            </div>
        </div>
        
      </div>
      <br><br><br><br>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <br><br>
  </section>


  <footer class="page-footer font-small stylish-color-dark pt-4" id="Contact-Us">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">TechStore</h5>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
  
        </div>
        <!-- Grid column -->
  
        
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>
          <ul class="list-unstyled">
            <li>
              <a href="tel:07700000000">Phone : 0770 000 0000</a>
            </li>
            <li>
              <a href="">Facebook : TechStore</a>
            </li>
            <li>
              <a href="#!">Instagram : TechStore</a>
            </li>
          </ul>
            
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <hr>
  
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> TechStore.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
@endsection

@push('scripts')
    <script src="{{asset('assets/js/index.js')}}"></script>
@endpush