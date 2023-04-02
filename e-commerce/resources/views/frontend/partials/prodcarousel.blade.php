@foreach ($categories as $category)
    <div class="bbb_viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bbb_main_container">
                        <div class="bbb_viewed_title_container">
                            <h3 class="bbb_viewed_title">{{ $category->name }}</h3>
                            <div class="bbb_viewed_nav_container">
                                <div class="bbb_viewed_nav bbb_viewed_prev" id="prev{{ $category->id }}"
                                    data-id="{{ $category->id }}">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="bbb_viewed_nav bbb_viewed_next" id="next{{ $category->id }}"
                                    data-id="{{ $category->id }}">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bbb_viewed_slider_container">
                            <div class="owl-carousel owl-theme bbb_viewed_slider" id="cat{{ $category->id }}">
                                @foreach ($category->products as $product)
                                    <div class="owl-item">
                                        <a href="{{ route('detail', $product->slug) }}">
                                            <div
                                                class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="bbb_viewed_image">
                                                    <img src="{{ asset($product->gallery) }}" alt="" />
                                                </div>
                                                <div class="bbb_viewed_content text-center">
                                                    <div class="bbb_viewed_price" style="background-color: black">
                                                        ₹{{ $product->price }}<span style="color: white">₹{{ ((100 + $product->discount) * $product->price) / 100 }}</span>
                                                    </div>
                                                    <div class="bbb_viewed_name">
                                                        <a href="{{ route('detail', $product->slug) }}" >{{ $product->name }}</a>
                                                    </div>
                                                </div>
                                                <ul class="item_marks">
                                                    <li class="item_mark item_discount">
                                                        -{{ $product->discount }}%
                                                    </li>
                                                    <li class="item_mark item_new">
                                                        new
                                                    </li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            if ($(".bbb_viewed_slider").length) {
                var viewedSlider = $(".bbb_viewed_slider");
                //console.log(viewedSlider);
                viewedSlider.owlCarousel({
                    loop: true,
                    margin: 30,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    nav: false,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        575: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        991: {
                            items: 4
                        },
                        1199: {
                            items: 6
                        },
                    },
                });

                if ($("#prev{{ $category->id }}").length) {
                    var slider = $("#cat{{ $category->id }}")
                    var prev = $("#prev{{ $category->id }}");
                    prev.on("click", function() {
                        slider.trigger("prev.owl.carousel");
                    });
                }

                if ($("#next{{ $category->id }}").length) {
                    var slider = $("#cat{{ $category->id }}")
                    var next = $("#next{{ $category->id }}");
                    next.on("click", function() {
                        slider.trigger("next.owl.carousel");
                    });
                }
            }
        });
    </script>
@endforeach
