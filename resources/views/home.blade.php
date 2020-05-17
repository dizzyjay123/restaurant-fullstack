@extends('layout.landing')

@section('title', 'Page Title')


@section('content')
<section id="information">
    <div class="restaurant-image">
      <img src="img/res.jpg" alt="">
    </div>

    <div class="info">
      <h2>We started From The Bottom In 2017</h2>
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
                <img src="/img/chips.png" alt="">
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
@endsection

