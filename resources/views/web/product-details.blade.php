@extends('web.layout.app')

@section('content')

 <!-- Start header -->
  <header class="cs_site_header cs_style_1 cs_color_1 cs_primary_bg cs_site_header_full_width cs_sticky_header">
    <div class="cs_top_header cs_primary_color">
      <div class="container-fluid">
        <div class="cs_top_header_in">
          <div class="cs_top_header_left">
            <p class="cs_medium mb-0">Support : product@sattiyas.com</p>
          </div>
          <div class="cs_top_header_center">
            <div class="cd-headline slide">
              <span class="cd-words-wrapper text-center">
                <b class="cs_text_slide cs_medium is-visible">
                  <span>100% Happy return policy</span>
                  <span>
                    <a href="{{ route('web.view.about') }}" class="cs_text_slide_btn">Learn More</a>
                  </span>
                </b>
                <b class="cs_text_slide cs_medium">
                  <span>Big sale offer with 50%</span>
                  <span>
                    <a href="{{ route('web.view.shop') }}" class="cs_text_slide_btn">Learn More</a>
                  </span>
                </b>
                <b class="cs_text_slide cs_medium">
                  <span>New arrival item for you</span>
                  <span>
                    <a href="{{ route('web.view.shop') }}" class="cs_text_slide_btn">Learn More</a>
                  </span>
                </b>
              </span>
            </div>
          </div>
          <div class="cs_top_header_right">
            <p class="cs_medium mb-0">Mon-Fri Open : 11:00 - 19:00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_main_header">
      <div class="container-fluid">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="{{ route('web.view.index') }}">
              <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>
          </div>
          <div class="cs_main_header_center">
            <div class="cs_nav cs_medium">
              <ul class="cs_nav_list">
                <li class="menu-item-has-children">
                  <a href="{{ route('web.view.index') }}">Home</a>
                  <ul>
                    <li><a href="{{ route('web.view.index') }}">Fashion V1</a></li>
                    <li><a href="{{ route('web.view.index') }}">Fashion V2</a></li>
                    <li><a href="{{ route('web.view.index') }}">Jewelry</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="{{ route('web.view.shop') }}">Product</a>
                  <ul>
                    <li><a href="{{ route('web.view.shop') }}">All Product</a></li>
                    <li><a href="{{ route('web.view.shop') }}">Shop Sidebar</a></li>
                    <li><a href="#">Product Details</a></li>
                  </ul>
                </li>
                <li><a href="#">Blog</a></li>
                <li class="menu-item-has-children">
                  <a href="">Pages</a>
                  <ul>
                    <li><a href="{{ route('web.view.about') }}">About</a></li>
                    <li><a href="#">Blog Details</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Success</a></li>
                    <li><a href="#">Wishlist</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children cs_mega_menu">
                  <a href="">MegaMenu</a>
                  <ul class="cs_mega_wrapper">
                    <li class="menu-item-has-children">
                      <a href="">Category One</a>
                      <ul>
                        <li><a href="{{ route('web.view.shop') }}">Women's Clothing</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Men's Clothing</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Kids' Clothing</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Shoes (Men, Women, Kids)</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Accessories (e.g., hats, scarves)</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="">Category Two</a>
                      <ul>
                        <li><a href="{{ route('web.view.shop') }}">Activewear</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Formal Wear</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Casual Wear</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Outerwear (Jackets, Coats)</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Swimwear</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="">Category Three</a>
                      <ul>
                        <li><a href="{{ route('web.view.shop') }}">Lingerie and Sleepwear</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Maternity Wear</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Plus Size Clothing</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Sustainable Fashion</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Vintage/Second-hand Clothing</a></li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <a href="">Category Four</a>
                      <ul>
                        <li><a href="{{ route('web.view.shop') }}">Sports Apparel</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Workwear</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Designer Clothing</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Seasonal Collections</a></li>
                        <li><a href="{{ route('web.view.shop') }}">Costumes and Cosplay</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{ route('web.view.contact') }}">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_main_header_right">
            <div class="cs_header_action">
              <button type="button" class="cs_action_icon cs_header_search_btn">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
              <a href="#" class="cs_action_icon cs_modal_btn">
                <i class="fa-regular fa-circle-user"></i>
              </a>
              <a href="{{ route('web.view.shop') }}" class="cs_action_icon">
                <span>
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_395_1018)">
                      <path d="M17.0347 3.05775C16.8238 2.80458 16.5597 2.60096 16.2612 2.46136C15.9626 2.32176 15.637 2.2496 15.3075 2.25H3.1815L3.15 1.98675C3.08554 1.43956 2.82254 0.935049 2.41087 0.568858C1.9992 0.202667 1.46747 0.000256345 0.9165 0L0.75 0C0.551088 0 0.360322 0.0790176 0.21967 0.21967C0.0790176 0.360322 0 0.551088 0 0.75C0 0.948912 0.0790176 1.13968 0.21967 1.28033C0.360322 1.42098 0.551088 1.5 0.75 1.5H0.9165C1.1002 1.50002 1.2775 1.56747 1.41478 1.68954C1.55206 1.81161 1.63976 1.97981 1.66125 2.16225L2.69325 10.9373C2.80039 11.8498 3.23886 12.6913 3.92543 13.302C4.612 13.9127 5.49889 14.25 6.41775 14.25H14.25C14.4489 14.25 14.6397 14.171 14.7803 14.0303C14.921 13.8897 15 13.6989 15 13.5C15 13.3011 14.921 13.1103 14.7803 12.9697C14.6397 12.829 14.4489 12.75 14.25 12.75H6.41775C5.95354 12.7487 5.5011 12.6038 5.12245 12.3353C4.7438 12.0668 4.45748 11.6877 4.30275 11.25H13.2428C14.122 11.2501 14.9733 10.9412 15.6479 10.3773C16.3225 9.81348 16.7775 9.03052 16.9335 8.16525L17.5223 4.89975C17.581 4.57576 17.5678 4.2428 17.4836 3.92448C17.3993 3.60616 17.2461 3.31026 17.0347 3.05775ZM16.05 4.6335L15.4605 7.899C15.3668 8.41875 15.0934 8.889 14.6879 9.2274C14.2824 9.5658 13.7709 9.7508 13.2428 9.75H4.06425L3.3585 3.75H15.3075C15.4177 3.74934 15.5266 3.77297 15.6267 3.81919C15.7267 3.86542 15.8153 3.93311 15.8861 4.01746C15.957 4.1018 16.0085 4.20073 16.0368 4.3072C16.0651 4.41368 16.0696 4.52508 16.05 4.6335Z" fill="currentColor" />
                      <path d="M5.25 18C6.07843 18 6.75 17.3284 6.75 16.5C6.75 15.6716 6.07843 15 5.25 15C4.42157 15 3.75 15.6716 3.75 16.5C3.75 17.3284 4.42157 18 5.25 18Z" fill="currentColor" />
                      <path d="M12.75 18C13.5784 18 14.25 17.3284 14.25 16.5C14.25 15.6716 13.5784 15 12.75 15C11.9216 15 11.25 15.6716 11.25 16.5C11.25 17.3284 11.9216 18 12.75 18Z" fill="currentColor" />
                    </g>
                    <defs>
                      <clipPath id="clip0_395_1018">
                        <rect width="18" height="18" fill="currentColor" />
                      </clipPath>
                    </defs>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_header_search_wrap">
      <div class="container">
        <div class="cs_header_search_in">
          <div class="cs_hero_search_heading">
            <h3>What are you looking for?</h3>
            <button class="cs_header_search_close" type="button"><i class="fa-solid fa-xmark"></i></button>
          </div>
          <form action="#" class="cs_header_search_form">
            <input type="text" placeholder="Search...">
            <button type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </header>
  <div class="cs_height_140 cs_height_lg_80"></div>
  <!-- End header -->
  <!-- Start single product -->
  <section>
    <div class="cs_height_35 cs_height_lg_35"></div>
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="cs_single_product_breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('web.view.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('web.view.shop') }}">Shop</a></li>
          <li class="breadcrumb-item"><a href="{{ route('web.view.shop', ['category' => $product->category_id]) }}">{{ $product->category->name }}</a></li>
          <li class="breadcrumb-item active">{{ $product->name }}</li>
        </ol>
      </nav>
      <div class="row">
        <div class="col-xl-7">
          <div class="row">
            <div class="col-3">
              <div class="cs_single_product_nav slick-slider">
                @if($product->images->count() > 0)
                  @foreach($product->images as $image)
                  <div class="cs_single_product_thumb_mini">
                    <img src="{{ $image->image_url }}" alt="{{ $image->alt_text ?: $product->name }}">
                  </div>
                  @endforeach
                @elseif($product->image)
                <div class="cs_single_product_thumb_mini">
                  <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                </div>
                @endif
              </div>
            </div>
            <div class="col-9">
              <div class="cs_single_product_thumb slick-slider">
                @if($product->images->count() > 0)
                  @foreach($product->images as $image)
                  <div class="cs_single_product_thumb_item">
                    <img src="{{ $image->image_url }}" alt="{{ $image->alt_text ?: $product->name }}">
                  </div>
                  @endforeach
                @elseif($product->image)
                <div class="cs_single_product_thumb_item">
                  <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <div class="cs_single_product_details">
            <h2 class="cs_fs_37 cs_semibold">{{ $product->name }}</h2>
            <div class="cs_single_product_review">
              <div class="cs_rating_container">
                <div class="cs_rating cs_size_sm" data-rating="5">
                  <div class="cs_rating_percentage"></div>
                </div>
              </div>
              <span>(5)</span>
              <span>Stock: <span class="cs_accent_color">{{ $product->stock }} in stock</span></span>
            </div>
            <h4 class="cs_single_product_price cs_fs_21 cs_primary_color cs_semibold">Price: ${{ number_format($product->price, 2) }}</h4>
            <hr>
            <div class="cs_single_product_details_text">
              <p class="mb-0">{{ $product->description ?: 'No description available for this product.' }}</p>
            </div>
            
            @if($product->sizes->count() > 0)
            <div class="cs_single_product_size">
              <h4 class="cs_fs_16 cs_medium">Size</h4>
              <ul class="cs_size_filter_list cs_mp0">
                @foreach($product->sizes as $size)
                <li>
                  <input type="radio" name="size" id="size_{{ $size->id }}" value="{{ $size->id }}" data-size-name="{{ $size->name }}">
                  <label for="size_{{ $size->id }}">
                    <span>{{ $size->name }}</span>
                  </label>
                </li>
                @endforeach
              </ul>
            </div>
            @endif
            
            @if($product->colors->count() > 0)
            <div class="cs_single_product_color">
              <h4 class="cs_fs_16 cs_medium">Color</h4>
              <ul class="cs_color_filter_list cs_type_1 cs_mp0">
                @foreach($product->colors as $color)
                <li>
                  <div class="cs_color_filter">
                    <input type="radio" name="color" id="color_{{ $color->id }}" value="{{ $color->id }}" data-color-name="{{ $color->name }}">
                    <label for="color_{{ $color->id }}">
                      <span class="cs_color_filter_circle" style="background-color: {{ $color->hex_code ?: '#000000' }};"></span>
                      <span class="cs_color_text">{{ $color->name }}</span>
                    </label>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="cs_action_btns">
              <div class="cs_quantity">
                <button class="cs_quantity_btn cs_increment"><i class="fa-solid fa-angle-up"></i></button>
                <span class="cs_quantity_input">1</span>
                <button class="cs_quantity_btn cs_decrement"><i class="fa-solid fa-angle-down"></i></button>
              </div>
              <a href="#" class="cs_btn cs_style_1 cs_fs_16 cs_medium">Add to Cart</a>
              <button class="cs_heart_btn"><i class="fa-regular fa-heart"></i></button>
            </div>
            <ul class="cs_single_product_info">
              <li class="cs_fs_16 cs_normal">
                <b class="cs_medium">SKU: </b>{{ $product->id }}
              </li>
              <li class="cs_fs_16 cs_normal">
                <b class="cs_medium">Categories: </b>{{ $product->category->name }}
              </li>
              <li class="cs_fs_16 cs_normal">
                <b class="cs_medium">Tags: </b>{{ $product->category->name }}, Fashion, Clothing
              </li>
              <li class="cs_fs_16 cs_normal">
                <b class="cs_medium">Brand: </b>Taysan
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cs_height_70 cs_height_lg_60"></div>
      <hr>
      <div class="cs_product_meta_info">
        <ul class="cs_tab_links cs_style_2 cs_product_tab cs_fs_21 cs_primary_color cs_semibold cs_mp0">
          <li><a href="#tab_1">Description</a></li>
          <li><a href="#tab_2">Additional information</a></li>
          <li><a href="#tab_3">Size Guide</a></li>
          <li class="active"><a href="#tab_4">Review (1)</a></li>
        </ul>
        <div class="cs_tabs">
          <div class="cs_tab" id="tab_1">
            {{ $product->description ?: 'No detailed description available for this product.' }}
          </div>
          <div class="cs_tab" id="tab_2">
            <table class="m-0">
              <tbody>
                <tr>
                  <td>Color</td>
                  <td>Blue, Gray, Green, Red, Yellow</td>
                </tr>
                <tr>
                  <td>Size</td>
                  <td>Large, Medium, Small</td>
                </tr>
              </tbody>
            </table>
            <hr>
          </div>
          <div class="cs_tab" id="tab_3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis orci ac odio dictum
            tincidunt.
            Donec ut metus leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
            himenaeos. Sed luctus, dui eu sagittis sodales, nulla nibh sagittis augue, vel porttitor diam enim non
            metus.
            Vestibulum aliquam augue neque. Phasellus tincidunt odio eget ullamcorper efficitur. Cras placerat ut
            turpis
            pellentesque vulputate. Nam sed consequat tortor. Curabitur finibus sapien dolor. Ut eleifend tellus nec
            erat
            pulvinar dignissim. Nam non arcu purus. Vivamus et massa massa.
          </div>
          <div class="cs_tab active" id="tab_4">
            <ul class="cs_client_review_list cs_mp0">
              <li>
                <div class="cs_client_review">
                  <div class="cs_review_media">
                    <div class="cs_review_media_thumb"><img src="assets/img/avatar.png" alt="Avatar"></div>
                    <div class="cs_review_media_right">
                      <div class="cs_rating_container">
                        <div class="cs_rating cs_size_sm" data-rating="5">
                          <div class="cs_rating_percentage"></div>
                        </div>
                      </div>
                      <p class="mb-0 cs_primary_color cs_semibold">Zhon Abony</p>
                    </div>
                    <p class="cs_review_posted_by">August 12, 2023</p>
                  </div>
                  <p class="cs_review_text">I recently purchased the Arino T-shirts and I'm thoroughly impressed. The
                    sound quality is exceptional, the wireless connectivity is seamless, and the noise cancellation
                    technology is a <br> standout feature. They're a bit pricey, but well worth the investment. Highly
                    recommend.</p>
                </div>
              </li>
            </ul>
            <p class="m-0">Your email address will not be published. Required fields are marked *</p>
            <div class="cs_height_20 cs_height_lg_20"></div>
            <div class="cs_input_rating_wrap">
              <p>Your rating  *</p>
              <div class="cs_input_rating cs_accent_color" data-rating="0">
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
            </div>
            <div class="cs_height_20 cs_height_lg_22"></div>
            <form class="row cs_review_form cs_gap_y_24">
              <div class="col-lg-12">
                <textarea rows="3" class="cs_form_field" placeholder="Write your review *"></textarea>
              </div>
              <div class="col-lg-6">
                <input type="text" class="cs_form_field" placeholder="Your name *">
              </div>
              <div class="col-lg-6">
                <input type="text" class="cs_form_field" placeholder="Your email *">
              </div>
              <div class="col-lg-12">
                <div class="form_check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label m-0">
                    By using this form you agree with the storage and handling of your data by this website. *
                  </label>
                </div>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_medium" type="submit">Submit Now</button>
              </div>
            </form>
          </div>
        </div>
        <!-- .cs_tabs -->
      </div>
    </div>
  </section>
  <!-- End single product -->
  <!-- Start new item store -->
  <section class="cs_slider container-fluid position-relative">
    <div class="cs_height_120 cs_height_lg_70"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1">
        <div class="cs_section_heading_in">
          <h2 class="cs_section_title cs_fs_50 cs_bold cs_fs_48 cs_semibold mb-0">Related Products</h2>
        </div>
        <div class="cs_slider_arrows cs_style_2">
          <div class="cs_left_arrow cs_slider_arrow cs_accent_color">
            <i class="fa-solid fa-chevron-left"></i>
          </div>
          <div class="cs_right_arrow cs_slider_arrow cs_accent_color">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>
      </div>
      <div class="cs_height_63 cs_height_lg_35"></div>
    </div>
    <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
      data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3"
      data-add-slides="4">
      <div class="cs_slider_wrapper">
        @foreach($relatedProducts as $relatedProduct)
        <div class="slick_slide_in">
          <div class="cs_product cs_style_1">
            <div class="cs_product_thumb position-relative">
              <img src="{{ $relatedProduct->image_url }}" alt="{{ $relatedProduct->name }}" class="w-100">
              @if($relatedProduct->flag)
              <div class="cs_discount_badge cs_white_bg cs_fs_14 cs_primary_color position-absolute">{{ $relatedProduct->flag }}</div>
              @endif
              <div class="cs_cart_badge position-absolute">
                <a href="#" class="cs_cart_icon cs_accent_bg cs_white_color">
                  <i class="fa-regular fa-heart"></i>
                </a>
                <a href="{{ route('web.product.details', $relatedProduct->id) }}" class="cs_cart_icon cs_accent_bg cs_white_color">
                  <i class="fa-regular fa-eye"></i>
                </a>
              </div>
              <a href="#" class="cs_cart_btn cs_accent_bg cs_fs_16 cs_white_color cs_medium position-absolute">
                Add To Cart</a>
            </div>
            <div class="cs_product_info text-center">
              <h3 class="cs_product_title cs_fs_21 cs_medium">
                <a href="{{ route('web.product.details', $relatedProduct->id) }}">{{ $relatedProduct->name }}</a>
              </h3>
              <p class="cs_product_price cs_fs_18 cs_accent_color mb-0 cs_medium">${{ number_format($relatedProduct->price, 2) }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="cs_height_134 cs_height_lg_80"></div>
  </section>
  <!-- End new item store -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Product variants data
    const productVariants = @json($product->variants->map(function($variant) {
        return [
            'id' => $variant->id,
            'size_id' => $variant->size_id,
            'color_id' => $variant->color_id,
            'stock' => $variant->stock,
            'price_adjustment' => $variant->price_adjustment,
            'final_price' => $variant->final_price,
            'size_name' => $variant->size ? $variant->size->name : null,
            'color_name' => $variant->color ? $variant->color->name : null,
        ];
    }));

    const basePrice = {{ $product->price }};
    const priceElement = document.querySelector('.cs_single_product_price');
    const addToCartBtn = document.querySelector('.cs_btn.cs_style_1');
    const stockInfo = document.createElement('div');
    stockInfo.className = 'cs_stock_info cs_fs_14 cs_medium mt-2';
    
    if (priceElement) {
        priceElement.parentNode.insertBefore(stockInfo, priceElement.nextSibling);
    }

    let selectedSize = null;
    let selectedColor = null;
    let currentVariant = null;

    // Handle size selection
    const sizeInputs = document.querySelectorAll('input[name="size"]');
    sizeInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.checked) {
                selectedSize = parseInt(this.value);
                updateVariant();
            }
        });
    });

    // Handle color selection
    const colorInputs = document.querySelectorAll('input[name="color"]');
    colorInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.checked) {
                selectedColor = parseInt(this.value);
                updateVariant();
            }
        });
    });

    function updateVariant() {
        // Find matching variant
        currentVariant = productVariants.find(variant => {
            const sizeMatch = !selectedSize || variant.size_id === selectedSize;
            const colorMatch = !selectedColor || variant.color_id === selectedColor;
            return sizeMatch && colorMatch;
        });

        if (currentVariant) {
            // Update price
            const finalPrice = parseFloat(currentVariant.final_price);
            if (priceElement) {
                priceElement.innerHTML = `Price: $${finalPrice.toFixed(2)}`;
            }

            // Update stock info
            const stock = currentVariant.stock;
            if (stock > 0) {
                stockInfo.innerHTML = `<span style="color: #48BB78;"><i class="fa-solid fa-check-circle"></i> ${stock} in stock</span>`;
                if (addToCartBtn) {
                    addToCartBtn.style.opacity = '1';
                    addToCartBtn.style.pointerEvents = 'auto';
                    addToCartBtn.textContent = 'Add to Cart';
                }
            } else {
                stockInfo.innerHTML = `<span style="color: #F56565;"><i class="fa-solid fa-times-circle"></i> Out of stock</span>`;
                if (addToCartBtn) {
                    addToCartBtn.style.opacity = '0.5';
                    addToCartBtn.style.pointerEvents = 'none';
                    addToCartBtn.textContent = 'Out of Stock';
                }
            }
        } else {
            // No specific variant found, show base price
            if (priceElement) {
                priceElement.innerHTML = `Price: $${basePrice.toFixed(2)}`;
            }
            stockInfo.innerHTML = '<span style="color: #718096;"><i class="fa-solid fa-info-circle"></i> Select size and color to check availability</span>';
            if (addToCartBtn) {
                addToCartBtn.style.opacity = '0.7';
                addToCartBtn.style.pointerEvents = 'none';
                addToCartBtn.textContent = 'Select Options';
            }
        }
    }

    // Initialize
    updateVariant();

    // Quantity controls
    const quantityInput = document.querySelector('.cs_quantity_input');
    const incrementBtn = document.querySelector('.cs_increment');
    const decrementBtn = document.querySelector('.cs_decrement');

    if (incrementBtn && decrementBtn && quantityInput) {
        incrementBtn.addEventListener('click', function() {
            let currentQty = parseInt(quantityInput.textContent) || 1;
            const maxQty = currentVariant ? currentVariant.stock : 99;
            if (currentQty < maxQty) {
                quantityInput.textContent = currentQty + 1;
            }
        });

        decrementBtn.addEventListener('click', function() {
            let currentQty = parseInt(quantityInput.textContent) || 1;
            if (currentQty > 1) {
                quantityInput.textContent = currentQty - 1;
            }
        });
    }
});
</script>

@push('styles')
<style>
.cs_size_filter_list li label {
    cursor: pointer;
    display: block;
    width: 100%;
    height: 100%;
}

.cs_color_filter label {
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
}

.cs_size_filter_list li input[type="radio"],
.cs_color_filter input[type="radio"] {
    display: none;
}

.cs_size_filter_list li input[type="radio"]:checked + label span,
.cs_size_filter_list li input[type="radio"]:checked + span {
    background-color: var(--cs-primary-color, #FC5F49);
    color: white;
}

.cs_color_filter input[type="radio"]:checked + label .cs_color_filter_circle {
    border: 3px solid var(--cs-primary-color, #FC5F49);
    box-shadow: 0 0 0 2px white, 0 0 0 4px var(--cs-primary-color, #FC5F49);
}

.cs_stock_info {
    margin-top: 8px;
    padding: 8px 0;
}
</style>
@endpush
@endsection