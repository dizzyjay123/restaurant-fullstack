<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section id="welcome">
            <div class="welcome-menu">
              <div class="logo">
                <img
                  src="/img/images.png"
                  alt="">
              </div>
              <div class="menu">
                <div class="menu-title">
                  Menu
                </div>
                <ul class="links">
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">WaitLists</a></li>
                  <li><a href="#">Offers</a></li>
                  <li><a href="#">GiftCards</a></li>
                </ul>
              </div>
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook-official"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
              <div class="location">
                <div class="address">
                  Ssnit flats, <br>
                  Asuoyeboah- Kumasi 12353
                </div>
                <div class="phone-number">
                  <a href="tel:7744158565">7744158565</a>
                </div>
              </div>
            </div>

            <div class="welcome-jumbo">
              <div class="status">New</div>
              <h1>Abi Tasties </h1>
              <img src="/img/hamburger-and-fries-png-4.png" class="burger-fries">
            </div>
          </section>

          <section id="information">
            <div class="restaurant-image">
              <img src="img/res.jpg" alt="">
            </div>

            <div class="info">
              <h2>We started From The Bottom In 2016</h2>
              <div class="paragraphs">

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ea ipsum, id fugiat accusamus, sed cum qui
                  assumenda illum reiciendis minus nobis, animi aspernatur fugit aut repellendus a voluptatibus. Voluptatibus!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ea ipsum, id fugiat accusamus, sed cum qui
                  assumenda illum reiciendis minus nobis, animi aspernatur fugit aut repellendus a voluptatibus. Voluptatibus!
                </p>
              </div>
              <a href="#" class="about-link">
                <span>Learn more about restaurants</span>
                <div class="circle-right">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
              </a>

            </div>
          </section>

          <section id="food-preview">
            <h2>We have everything you need to kill your hunger</h2>
            <div class="button-rounded">View Our Menu</div>
            <div class="container">
              <div class="left-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
              </div>
              <div class="right-btn">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
              </div>
              <div class="food-slider">
                <div class="sliding-system">
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Starters
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="https://i.dlpng.com/static/png/52871_preview.png" alt="">
                      </div>
                    </div>

                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Burgers
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="/img/hamburger-and-fries-png-4.png" alt="">
                      </div>
                    </div>

                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Entrees
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="/img/342-3422633_pork-entrees-steak-pork-png.png" alt="">
                      </div>
                    </div>

                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Slides
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="/img/salad-bowl-png-1.png" alt="">
                      </div>
                    </div>

                  </div>
                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Deserts
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="/img/Download-Cupcake-PNG-Transparent-Image.png" alt="">
                      </div>
                    </div>

                  </div>

                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Drinks
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="/img/Download-Cupcake-PNG-Transparent-Image.png" alt="">
                      </div>
                    </div>

                  </div>

                  <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                      <div class="food-title">
                        Beers
                      </div>
                      <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam veritatis minus mollitia incidunt, fuga
                        unde beatae officia ratione animi porro, earum tempora, deserunt facilis corporis officiis commodi dolore
                        dignissimos recusandae!
                      </p>
                      <div class="food-image">
                        <img src="/img/Download-Cupcake-PNG-Transparent-Image.png" alt="">
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </section>
    </body>
</html>
