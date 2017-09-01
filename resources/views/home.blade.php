@extends('layouts.master')

@section('title')
  Self Laboratory
@endsection

@section('header')
  <header class="main-header">
    <img class="extra-element" id="extra1" src="./images/extra-element1.svg">
    <img class="extra-element" id="extra2" src="./images/extra-element2.svg">
    <div class="container">
      <nav>
        <a class="main-link" href="/">Главная</a>
        <a class="main-link" href="/about">О Нас</a>
        <a class="logo-wrap" href="/">
          <img class="logo" src="./images/selflab_logo.png" alt="SelfLaboratory logo">
        </a>
        <a class="main-link" href="/album">Портфолио</a>
        <a class="main-link" href="/services">Услуги</a>
      </nav>
      <div class="slogan">
        <h1>Стильная<br>ФотоГрафика</h1>
        <span>вдохновляясь моментом</span>
      </div>
    </div>
  </header>
@endsection

@section('content')
<section class="portfolio-section">
  <div class="container">
    <h2>
      Наши работы
    </h2>
    <p class="section-quote">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a tortor odio.<br>Maecenas risus magna, sodales sed mi urna.
    </p>
    <div class="portfolio-slide">
      <div class="portfolio-container">

        <a class="img-unit" style="background-image: url('./images/portfolio-img(1)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Съемка для Вашего бизнеса</p>
              <ul>
                <li>Предметная съемка продукции</li>
                <li>Съемка для сайта</li>
                <li>Бизнес-съемка</li>
                <li>Фото офиса</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/portfolio-img(2)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Индивидуальная съемка</p>
              <ul>
                <li>Съемка для одного человека</li>
                <li>Семейная съемка</li>
                <li>Love-story</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/portfolio-img(3)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Свадебная съемка</p>
              <ul>
                <li>Love-story для жениха и невесты</li>
                <li>Съемка свадебного торжества</li>
                <li>Утро невесты</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/portfolio-img(4)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Репортажная съемка</p>
              <ul>
                <li>Дни Рождения</li>
                <li>Корпоративы</li>
                <li>Выпускные</li>
                <li>и другое</li>
              </ul>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/portfolio-img(5)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Тематические фотодни
                <ul>
                  <li>Съемки с животными</li>
                  <li>Подводная съемка</li>
                  <li>Съемка на крыше</li>
                  <li>Образы и другое</li>
                </ul>
              </p>
            </div>
          </div>
        </a> 

        <a class="img-unit" style="background-image: url('./images/portfolio-img(6)-min.jpg')">
          <div class="img-overlay">
            <div class="overlay-wrap">
              <p>Промо-съемка для Шоу-румов
                <ul>
                  <li>Студийная съемка</li>
                  <li>Выездная съемка</li>
                </ul>
              </p>
            </div>
          </div>
        </a> 

      </div>
      <div class="spec-container">
        <a class="back-arrow">
          <img src="./images/arrow-left.png">
        </a>
        <img class="img-spec" src="" alt="Image spec">
        <div class="spec-wrap">
          <h3 class="spec-title">
            Lorem ipsum
          </h3>
          <p class="spec-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla metus nisi, pretium vel risus nec, eleifend ullamcorper felis. Integer vulputate tellus est, et sagittis justo ornare eu. Nunc id arcu tempor lorem volutpat placerat. Phasellus sed pharetra nunc, ac ultricies nisl. Aenean libero mi, cursus ut nunc nec, dapibus dictum purus. Nulla fringilla nec ligula et placerat. Suspendisse id quam mauris. Vestibulum a porta erat. Pellentesque imperdiet urna sit amet molestie vulputate.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection