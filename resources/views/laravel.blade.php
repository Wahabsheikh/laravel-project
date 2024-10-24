<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('cssfile/laravel.css') }}">

</head>

<body>
    <section id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar">
                        <div class="logoName ">
                            <span>abdul</span>
                        </div>
                        <div class="navBtns">
                            <a href="#">home</a>
                            <a href="contact">contact</a>
                            <a href="#">shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=body>
        <div class="container">
            <div class="row">
                <div class="col-12 banner">
                    <div class="intro">
                        <span class="bannerName">
                            Abdul
                        </span>
                        <div class="button">
                            <a href="biography" class="customBtn">biography</a>
                            <a href="cv" class="customBtn">cv</a>
                        </div>
                    </div>
                    <div class="bnImg">
                        <img src="{{ asset('assets/bannerimage/wahab.png') }}" alt="Logo">

                    </div>

                </div>
            </div>
        </div>
        <div id="products" class="container">
            <div class="row productcardWrapper">
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="productCard">
                        <div class="image">
                            <h3>product image</h3>
                        </div>
                        <div class="productDiscription">
                            <h3>abc</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                            <div class="buttons">
                                <a href="viewproduct" class="customBtn">view-product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer">
                        <h2>
                            this is footer section
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>