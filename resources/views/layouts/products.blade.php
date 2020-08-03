@extends('master')

@push('styles')
  <title>Products</title>
  <link rel="stylesheet" href="{{asset('assets/css/products.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
@endpush

@section('content')
  <div class="row " style="padding: 0px !important;margin:0 !important;">
    <div style="padding: 10px 30px !important" class="col-md-2 side-filter-container">
      <i class="fas fa-times close-icon mr-auto"></i>
      <div class="sticky">
        <div class="filter-container">
          <p class="filter-type-header">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Products
              <i class="fas fa-caret-down down-arrow-icon"></i>
            </a>
          </p>
          <div class="collapse show" id="collapseExample">
            <div class="card card-body">
              <div style="padding: 0 10px !important" class="filter-list">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    All
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Laptops
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    GPUs
                  </label>
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class="filter-type-header">
            <a class="btn btn-primary" data-toggle="collapse" href="#Brands" role="button" aria-expanded="false" aria-controls="Brands">
              Brands
              <i class="fas fa-caret-down down-arrow-icon"></i>
            </a>
          </p>
          <div class="collapse show" id="Brands">
            <div class="card card-body">
              <div style="padding: 0 10px !important" class="filter-list">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    MSI
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    ASUS
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    GIGABYTE
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                  <label class="form-check-label" for="defaultCheck1">
                    ZOTAC
                  </label>
                </div>
              </div>
            </div>
          </div>
          <br>
          <p class="filter-type-header">
            <a class="btn btn-primary" data-toggle="collapse" href="#Price" role="button" aria-expanded="false" aria-controls="Price">
              Price
              <i class="fas fa-caret-down down-arrow-icon"></i>
            </a>
          </p>
          <div class="collapse show" id="Price">
            <div class="card card-body">
              <div style="padding: 0 10px !important" class="filter-list">
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">100 - 3000</p>
              <div id="price_range"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- page content starts here -->
    <div class="col-md-10 page-content-container">
      <!-- mobile modal filter starts here--->
      <button type="button" class="btn btn-primary modal-btn" data-toggle="modal" data-target="#exampleModal">
        Filters
      </button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Filters</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="filter-container">
                <p class="filter-type-header">
                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Products
                    <i class="fas fa-caret-down down-arrow-icon"></i>
                  </a>
                </p>
                <div class="collapse show" id="collapseExample">
                  <div class="card card-body">
                    <div style="padding: 0 10px !important" class="filter-list">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          All
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          Laptops
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                          GPUs
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <p class="filter-type-header">
                  <a class="btn btn-primary" data-toggle="collapse" href="#Brands" role="button" aria-expanded="false" aria-controls="Brands">
                    Brands
                    <i class="fas fa-caret-down down-arrow-icon"></i>
                  </a>
                </p>
                <div class="collapse show" id="Brands">
                  <div class="card card-body">
                    <div style="padding: 0 10px !important" class="filter-list">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          MSI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          ASUS
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          GIGABYTE
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          ZOTAC
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <br>
                <p class="filter-type-header">
                  <a class="btn btn-primary" data-toggle="collapse" href="#Price" role="button" aria-expanded="false" aria-controls="Price">
                    Price
                    <i class="fas fa-caret-down down-arrow-icon"></i>
                  </a>
                </p>
                <div class="collapse show" id="Price">
                  <div class="card card-body">
                    <div style="padding: 0 10px !important" class="filter-list">
                      <input type="hidden" id="hidden_minimum_price" value="0" />
                      <input type="hidden" id="hidden_maximum_price" value="65000" />
                      <p id="price_show">100 - 3000</p>
                    <div id="price_range"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
            </div>
          </div>
        </div>
      </div>
      <!-- mobile modal filter ends here--->
      
      <!-- desktop sort starts here -->
      <div class="container">
        <div class="row sort-container">
          <button class="btn btn-secondary filter-toggle-mobile" type="button">
            Filters
          </button>
          <button class="btn btn-secondary filter-toggle" type="button">
            Filters
          </button>
          <div class="dropdown ml-auto">
            <button class="btn btn-secondary sort-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort <i class="fas fa-sort-amount-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <br><br><br>
        <!-- product cards starts -->
        <div class="row">
          <!-- cards -->
          <div class="card-main-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card-container">
              <img class="main-card-image" src="{{ asset('assets/images/msi.png') }}" alt="" srcset="">
              <div class="card-product-info-container">
                <a href=""><h3 class="card-product-name">MSI GS65 STEALTH</h3></a>
                <span class="card-product-price">1400$</span>
                <div style="clear: both !important;"></div>
                <hr>
                <p class="card-product-information"> Display: 15.6" FHD, 4.9mm Ultra Thin Bezel Anti-Glare Wide View Angle 144Hz 7ms 72% NTSC 1920x1080 16:9 | Operating System: Windows 10
                  Processor: New Intel Core i7-8750H 2.2 - 4.1GHz (6 Cores)
                  Graphics Card: NVIDIA GeForce GTX1060 6G GDDR5
                  RAM: 16GB (8G*2) DDR4 2400MHz, 2 Sockets; Max Memory 32GB | Storage: 256GB SSD NVMe (PCIE Gen3x4)
                  Special Features: Ultra Thin Bezel | VR Ready | Steel series Per Key RGB Customizable Keyboard | Thunderbolt 3 Ready
                  Max Memory: 32 GB
                  AC adapter: 180W Slim adapter
                </p>
                <h5 style="text-align: center !important;" class="card-product-detailsBtn"><a class="card-detailsBtn" href="">See Details</a></h5>
              </div>
            </div>
          </div>
          <!-- cards -->
          <div class="card-main-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card-container">
              <img class="main-card-image" src="{{ asset('assets/images/msi.png') }}" alt="" srcset="">
              <div class="card-product-info-container">
                <a href=""><h3 class="card-product-name">MSI GS65 STEALTH</h3></a>
                <span class="card-product-price">1400$</span>
                <div style="clear: both !important;"></div>
                <hr>
                <p class="card-product-information"> Display: 15.6" FHD, 4.9mm Ultra Thin Bezel Anti-Glare Wide View Angle 144Hz 7ms 72% NTSC 1920x1080 16:9 | Operating System: Windows 10
                  Processor: New Intel Core i7-8750H 2.2 - 4.1GHz (6 Cores)
                  Graphics Card: NVIDIA GeForce GTX1060 6G GDDR5
                  RAM: 16GB (8G*2) DDR4 2400MHz, 2 Sockets; Max Memory 32GB | Storage: 256GB SSD NVMe (PCIE Gen3x4)
                  Special Features: Ultra Thin Bezel | VR Ready | Steel series Per Key RGB Customizable Keyboard | Thunderbolt 3 Ready
                  Max Memory: 32 GB
                  AC adapter: 180W Slim adapter
                </p>
                <h5 style="text-align: center !important;" class="card-product-detailsBtn"><a class="card-detailsBtn" href="">See Details</a></h5>
              </div>
            </div>
          </div>
          <!-- cards -->
          <div class="card-main-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card-container">
              <img class="main-card-image" src="{{ asset('assets/images/msi.png') }}">
              <div class="card-product-info-container">
                <a href=""><h3 class="card-product-name">MSI GS65 STEALTH</h3></a>
                <span class="card-product-price">1400$</span>
                <div style="clear: both !important;"></div>
                <hr>
                <p class="card-product-information"> Display: 15.6" FHD, 4.9mm Ultra Thin Bezel Anti-Glare Wide View Angle 144Hz 7ms 72% NTSC 1920x1080 16:9 | Operating System: Windows 10
                  Processor: New Intel Core i7-8750H 2.2 - 4.1GHz (6 Cores)
                  Graphics Card: NVIDIA GeForce GTX1060 6G GDDR5
                  RAM: 16GB (8G*2) DDR4 2400MHz, 2 Sockets; Max Memory 32GB | Storage: 256GB SSD NVMe (PCIE Gen3x4)
                  Special Features: Ultra Thin Bezel | VR Ready | Steel series Per Key RGB Customizable Keyboard | Thunderbolt 3 Ready
                  Max Memory: 32 GB
                  AC adapter: 180W Slim adapter
                </p>
                <h5 style="text-align: center !important;" class="card-product-detailsBtn"><a class="card-detailsBtn" href="">See Details</a></h5>
              </div>
            </div>
          </div>
          <!-- cards -->
          <div class="card-main-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <div class="card-container">
              <img class="main-card-image" src="{{ asset('assets/images/msi.png') }}" alt="" srcset="">
              <div class="card-product-info-container">
                <a href=""><h3 class="card-product-name">MSI GS65 STEALTH</h3></a>
                <span class="card-product-price">1400$</span>
                <div style="clear: both !important;"></div>
                <hr>
                <p class="card-product-information"> Display: 15.6" FHD, 4.9mm Ultra Thin Bezel Anti-Glare Wide View Angle 144Hz 7ms 72% NTSC 1920x1080 16:9 | Operating System: Windows 10
                  Processor: New Intel Core i7-8750H 2.2 - 4.1GHz (6 Cores)
                  Graphics Card: NVIDIA GeForce GTX1060 6G GDDR5
                  RAM: 16GB (8G*2) DDR4 2400MHz, 2 Sockets; Max Memory 32GB | Storage: 256GB SSD NVMe (PCIE Gen3x4)
                  Special Features: Ultra Thin Bezel | VR Ready | Steel series Per Key RGB Customizable Keyboard | Thunderbolt 3 Ready
                  Max Memory: 32 GB
                  AC adapter: 180W Slim adapter
                </p>
                <h5 style="text-align: center !important;" class="card-product-detailsBtn"><a class="card-detailsBtn" href="">See Details</a></h5>
              </div>
            </div>
          </div>
        </div>
        <!-- product card ends -->
      </div>
      <br><br>
      <!-- desktop sort ends here -->
    </div>
  </div>

  
@endsection

@push('scripts')
    <script src="{{asset('assets/js/products.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script>
      $('#price_range').slider({
        range:true,
        min:100,
        max:3000,
        values:[100, 3000],
        step:50,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
    </script>
    
@endpush