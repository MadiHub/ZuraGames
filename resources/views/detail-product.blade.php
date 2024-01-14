<!DOCTYPE html>
<html lang="en" data-theme="nord">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- owl carousel -->
     <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/owl.theme.default.min.css') }}">
    @vite('resources/css/app.css')
   
    <style>
        .container
        {
            max-width: 1200px;
            width: 90%;
            margin: auto;
        }
        .product-price {
            font-size: 18px;
            color: #FF5733;
            font-weight: 600;
        }
   
    </style>
</head>
<body>
    <!-- navbar back -->
    <div class="bg-base-300">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl text-cyan-600" href="/">Back</a>
        </div>
    </div>

    <!-- Product detail -->
    <div class="container  grid grid-cols-1  md:grid-cols-2 lg:grid-cols-2 gap-2 ">
        <div class="owl-carousel mt-5">
            <div>
                <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" alt="" class="rounded">
            </div>
            <div>
                <img src="https://crm.vcgamers.com/uploads/product/20220110094546produk00.jpg" alt="" class="rounded">
            </div>        
        </div>
        <!-- card payment -->
        <div class="card-payment w-full bg-base-500 shadow-xl hidden lg:block md:block">
            <div class="card-body">
                <h2 class="card-title">Informasi pesanan</h2>
                <div class="product-price">
                    <p>Qty : 1</p>
                </div>
                <hr>
                <div class="deskripsi">
                    <h3>Subtotal</h3>
                    <p>
                    Rp. 200.000
                    </p>
                </div>
                <hr>
                <div class="btn-chekout lg:grid-cols-2 text-end">
                    <button class="btn w-40 mx-auto btn-outline btn-primary">+ Troli</button>
                    <button class="btn w-40 mx-auto	btn-active btn-primary">Beli Langsung</button>
                </div>             
            </div>
        </div>
        <!-- card payment end -->
        <!-- card detail product -->
        <div class="card w-full bg-base-500 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Oufen Ou Fen Lotus Root Powder Makanan Diet Healthy Food Akar Teratai - MQF OufenAlmond</h2>
                <div class="product-price">
                    <p >Rp 200.000</p>
                </div>
                <hr>
                <ul class="steps">
                    <li class="step step-primary">Register Akun</li>
                    <li class="step">Checkout</li>
                    <li class="step">Proses</li>
                    <li class="step">Cek Akun</li>
                </ul>
                <hr>
                <div class="deskripsi">
                    <h3>Deskripsi Produk</h3>
                    <p>
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    AKUN INI SESUAI DENGAN SCREENSHOOT
                    </p>
                </div>               
            </div>
        </div>
        <!-- card detail product -->
    </div>
    <!-- Product detail end -->
  

    <!-- buttom -->
    <div class="btm-nav grid grid-cols-2 lg:hidden md:hidden">
        <button class="btn w-40 mx-auto btn-outline btn-primary">+ Troli</button>
        <button class="btn w-40 mx-auto	btn-active btn-primary">Beli Langsung</button>
    </div>
    <!-- buttom end -->
    <!-- owl script -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items:1,
            // loop:true,
            // nav:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
        });
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[1000])
        })
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        })
    </script>
    <!-- owl script end -->
</body>
</html>
