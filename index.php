<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moonlight</title>

    <!--Boostrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--Owl-carousel CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!--Custom CSS file-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--start # header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Jaarmarktstraat 01 Hasselt Belgium 3511</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-end border-start text-dark">Login</a>
                <a href="#" class="px-3 border-end text-dark">Wishlist (0)</a>
            </div>
        </div>

        <!-- Start Primary Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Moonlight</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products <i class="fa fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category <i class="fa fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Coming Soon</a>
                        </li>
                    </ul>

                    <form action="#" class="font-size-14 font-rale">
                        <a href="#" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-4 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!--End Primary Navigation-->

    </header>
    <!--end # header -->

    <!--start # main -->
    <main id="main-site">

        <!--Start Owl-carousel-->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/Banner1.jpg" alt="Banner1">
                </div>
                <div class="item">
                    <img src="./assets/Banner2.jpg" alt="Banner2">
                </div>
                <div class="item">
                    <img src="./assets/Banner1.jpg" alt="Banner1">
                </div>
            </div>
        </section>
        <!--End Owl-carousel-->

        <!--Start Top Sale-->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Top Sale</h4>
                <hr>
                <!--owl carousel-->
                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="product font-rale p-4">
                            <a href="#"><img src="assets/products/1.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class="mt-3">Beatuy xl single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>???49</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product font-rale p-4">
                            <a href="#"><img src="assets/products/2.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class="mt-3">Softee md single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>???49</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product font-rale p-4">
                            <a href="#"><img src="assets/products/3.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class="mt-3">Premier md single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>???49</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product font-rale p-4">
                            <a href="#"><img src="assets/products/4.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class="mt-3">Softee lg single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>???49</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product font-rale p-4">
                            <a href="#"><img src="assets/products/5.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class="mt-3">Softee lg single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>???49</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="product font-rale p-4">
                            <a href="#"><img src="assets/products/6.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class="mt-3">Beauty xl couple</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>???49</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                </div>
                <!--!owl carousel-->
            </div>
        </section>
        <!--End Top Sale-->

        <!--Special Price-->
        <section id="special-price">
            <div class="container">

                <h4 class="font-rubik font-size-20">Special Price</h4>
                <div id="filters" class="button-group text-end font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">All Brand</button>
                    <button class="btn" data-filter=".Beauty">Beauty</button>
                    <button class="btn" data-filter=".Softee">Softee</button>
                    <button class="btn" data-filter=".Premier">Premier</button>
                    <button class="btn" data-filter=".Premier">Star</button>
                </div>

                <div class="grid">

                    <div class="grid-item Beauty border">
                        <div class="item py-2 sitem">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/1.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Beatuy xl single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Softee border">
                        <div class="item py-2 sitem">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/2.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Softee md single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Premier border">
                        <div class="item py-2 sitem">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/3.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Premier md single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Softee border">
                        <div class="item py-2 sitem">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/4.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Softee lg single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Beauty border">
                        <div class="item py-2 sitem">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/5.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Beatuy xl couple</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Beauty border">
                        <div class="item py-2 sitem">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/1.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Beatuy xl single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Softee border">
                        <div class="item py-2" style="width: 220px;">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/2.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Softee md single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Premier border">
                        <div class="item py-2" style="width: 220px;">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/3.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Premier md single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Softee border">
                        <div class="item py-2" style="width: 220px;">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/4.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Softee lg single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Beauty border">
                        <div class="item py-2" style="width: 220px;">
                            <div class="product font-rale p-4">
                                <a href="#"><img src="assets/products/5.jpg" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6 class="mt-3">Beatuy xl couple</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>???49</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--End Special Price-->

        <!-- Banner Ads  -->
        <section id="banner_adds">
            <div class="container py-5 text-center">
                <img src="./assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
                <img src="./assets/banner2-cr-500x150.jpg" alt="banner2" class="img-fluid">
            </div>
        </section>
        <!-- !Banner Ads  -->

        <!-- New Phones -->
        <section id="new-products">
            <div class="container">
                <h4 class="font-rubik font-size-20">New Products</h4>
                <hr>

                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/1.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Beatuy xl single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/2.jpg" alt="product2" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Softee md single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/3.jpg" alt="product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Premier md single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/4.jpg" alt="product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Softee lg single</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/5.jpg" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Beatuy xl couple</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/6.jpg" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Beatuy xl single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$122</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light m-4">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/7.jpg" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Softee md single</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$122</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- !owl carousel -->

            </div>
        </section>
        <!-- !New Phones -->

        <!-- Blogs -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-rubik font-size-20">Latest Blogs</h4>
                <hr>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-rale ml-2 mr-2" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                            <img src="./assets/blog/blog1.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus
                                saepe harum sed.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                            <img src="./assets/blog/blog2.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus
                                saepe harum sed.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">Upcoming Mobiles</h5>
                            <img src="./assets/blog/blog3.jpg" alt="cart image" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus
                                saepe harum sed.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !Blogs -->

        <!-- start #footer -->
        <footer id="footer" class="bg-dark text-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                        <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Repellendus, deserunt.</p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <h4 class="font-rubik font-size-20">Newslatter</h4>
                        <form class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email *">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary my-2">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-12">
                        <h4 class="font-rubik font-size-20">Information</h4>
                        <div class="d-flex flex-column flex-wrap">
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-12">
                        <h4 class="font-rubik font-size-20">Account</h4>
                        <div class="d-flex flex-column flex-wrap">
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                            <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
            <p class="font-rale font-size-14">&copy; Copyrights 2021. Desing By <a href="#" class="color-second">HafenX
                    Media</a></p>
        </div>
        <!-- !start #footer -->

    </main>
    <!--end # main -->

    <!--start # footer -->
    <footer>

    </footer>
    <!--end # footer -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <!--Owl Carousel JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!--isotop plugin cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

    <!--Custom JS-->
    <script src="./index.js"></script>

</body>

</html>