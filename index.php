<!DOCTYPE html>
<html lang="en" class="example">

<head>
  <meta charset="UTF-8">
  <title>Coral Club Moldova - Главная</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <script src="https://kit.fontawesome.com/9e44a1f250.js" crossorigin="anonymous" async></script>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header>
    <div class="topnav" id="topmenu">
      <a style="padding: 0;" href="index.php"><img style="height:45px;" src="img/logo.gif"></img></a>
      <a id='1' onclick="scrollingDown(this.id)">Тест здоровья</a>
      <a id='2' onclick="scrollingDown(this.id)">Концепция здоровья</a>
      <a id='3' onclick="scrollingDown(this.id)">Живая вода</a>
      <a id='4' onclick="scrollingDown(this.id)">Очищение организма</a>
      <a id='5' onclick="scrollingDown(this.id)">Клеточное питание</a>
      <a id='6' onclick="scrollingDown(this.id)">Программы здоровья</a>
      <a id='7' onclick="scrollingDown(this.id)">Детское здоровье</a>
      <a id='8' onclick="scrollingDown(this.id)">Снижение веса</a>
      <a id='9' onclick="scrollingDown(this.id)">Отзывы</a>

      <div class="dropdown">
        <button id='10' class="dropbtn" onclick="scrollingDown(this.id)">Продукты Coral Club
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="#">Вопросы и ответы</a>
          <a id="about" onclick="openModal(this.id);">О компании</a>
          <hr>
          <a href="#" onclick="openCatalog('catalog', 'health')">Здоровье</a>
          <a href="#" onclick="openCatalog('catalog', 'beauty')">Красота</a>
          <a href="#" onclick="openCatalog('catalog', 'house')">Дом</a>
          <a href="#" id='10' onclick="scrollingDown(this.id)">Наборы</a>
          <a href="#" onclick="openCatalog('catalog', 'nutrients')">Нутриенты</a>
          <a href="#" onclick="openCatalog('catalog', 'protection')">Защита</a>
          <a href="#" onclick="openCatalog('catalog', 'brands')">Брендированная продукция</a>
          <hr>
          <a href="#">Акции</a>
          <a href="#">Оплата и доставка</a>
          <hr>
          <a id="business" onclick="openModal(this.id);">Бизнез под ключ</a>
        </div>
      </div>
      <a href="https://md.coral-club.com" target="_blank" style="float:right;">Официальный сайт</a>

    </div>
  </header>

  <!--socials button-->
  <nav class="menu">
    <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
    <label class="menu-open-button" for="menu-open">
      <span class="lines line-1"></span>
      <span class="lines line-2"></span>
      <span class="lines line-3"></span>
    </label>

    <a href="#" class="menu-item blue" target="_blank"> <i class="fa fa-facebook"></i> </a>
    <a href="https://api.whatsapp.com/send?phone=+37379642642" class="menu-item green" target="_blank"> <i class="fab fa-whatsapp"></i> </a>
    <a href="#" class="menu-item red" target="_blank"> <i class="fa fa-instagram"></i> </a>
    <a href="viber://chat?number=%2B37379642642" class="menu-item purple" target="_blank"> <i class="fab fa-viber"></i>
    </a>
    <a href="tel:+37379642642" class="menu-item orange" target="_blank"> <i class="fa fa-phone"></i> </a>
    <a href="#" class="menu-item lightblue" target="_blank"> <i class="fab fa-telegram-plane"></i> </a>
  </nav>

  <!-- Main -->
  <main role="main">

    <!-- Image -->
    <section class="background" id="slider">
      <div class="content-wrapper">
        <div class="slider-container">
          <div class="slider-control left inactive"></div>
          <div class="slider-control right"></div>
          <ul class="slider-pagi"></ul>
          <div class="slider">
            <div class="slide slide-0 active">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">Здоровье в каждом глотке</h2>
                  <p class="slide__text-desc">Коралловый кальций обогащает воду минералами, меняет структуру.
                    Нормализует артериальное давление и восстанавливает сердечно-сосудистую систему.</p>
                  <a class="slide__text-link">Читать далее</a>
                </div>
              </div>
            </div>
            <div class="slide slide-1 ">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">Новый уровень защиты</h2>
                  <p class="slide__text-desc">Уникальный фитоконцентрат ценных растительных компонентов для повышения
                    защитных сил организма.</p>
                  <a class="slide__text-link">Читать далее</a>
                </div>
              </div>
            </div>
            <div class="slide slide-2">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">Природа твоей красоты</h2>
                  <p class="slide__text-desc">Для восстановления эластичности и упругости кожи рук и ног, а также для
                    здоровья волос компания Коралловый клуб разработала новую натуральную коллекцию Oda Naturals на
                    растительной основе.</p>
                  <a class="slide__text-link">Читать далее</a>
                </div>
              </div>
            </div>
            <div class="slide slide-3">
              <div class="slide__bg"></div>
              <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                  <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                </svg>
                <div class="slide__text">
                  <h2 class="slide__text-heading">Печень под защитой</h2>
                  <p class="slide__text-desc">Комплекс экстрактов тропических растений и цитрусовых способствует
                    восстановлению клеток печени и защищает их от токсических воздействий. Улучшает самочувствие,
                    регулирует уровень холестерина.</p>
                  <a class="slide__text-link">Читать далее</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item1">
      <div class="content-wrapper">
        <span class="textonpanel">Тест здоровья</span>
        <div class="slidearticle">
          <table class="testtable">
            <tr>
              <td style="background-image: url(tests/1.jpg)" id="t1" onclick="openModal(this.id)">
                <div>Тест на интоксикацию организма</div>
              </td>
              <td style="background-image: url(tests/2.jpg)" id="t2" onclick="openModal(this.id)">
                <div>Тест на возможное наличие вирусов</div>
              </td>
              <td style="background-image: url(tests/3.jpg)" id="t3" onclick="openModal(this.id)">
                <div>Тест иммунной системы</div>
              </td>
              <td style="background-image: url(tests/4.jpg)" id="t4" onclick="openModal(this.id)">
                <div>Тест системы органов дыхания</div>
              </td>
              <td style="background-image: url(tests/5.jpg)" id="t5" onclick="openModal(this.id)">
                <div>Тест на возможное наличие грибковой инфекции</div>
              </td>
            </tr>
            <tr>
              <td style="background-image: url(tests/6.jpg)" id="t6" onclick="openModal(this.id)">
                <div>Тест на наличие паразитов</div>
              </td>
              <td style="background-image: url(tests/7.jpg)" id="t7" onclick="openModal(this.id)">
                <div>Тест "В порядке ли ваша печень?"</div>
              </td>
              <td style="background-image: url(tests/8.jpg)" id="t8" onclick="openModal(this.id)">
                <div>Тест "Хорошая ли у вас память?"</div>
              </td>
              <td style="background-image: url(tests/9.jpg)" id="t9" onclick="openModal(this.id)">
                <div>Тест "Риск развития диабета"</div>
              </td>
              <td style="background-image: url(tests/10.jpg)" id="t10" onclick="openModal(this.id)">
                <div>Тест "Ваша кожа"</div>
              </td>
            </tr>
            <tr>
              <td style="background-image: url(tests/11.jpg)" id="t11" onclick="openModal(this.id)">
                <div>Тест на обезвоживание организма</div>
              </td>
              <td style="background-image: url(tests/12.jpg)" id="t12" onclick="openModal(this.id)">
                <div>Тест на закисление организма</div>
              </td>
              <td style="background-image: url(tests/13.jpg)" id="t13" onclick="openModal(this.id)">
                <div>Тест системы органов пищеварения</div>
              </td>
              <td style="background-image: url(tests/14.jpg)" id="t14" onclick="openModal(this.id)">
                <div>Тест сердечно-сосудистой системы</div>
              </td>
              <td style="background-image: url(tests/15.jpg)" id="t15" onclick="openModal(this.id)">
                <div>Тест системы органов кроветворения</div>
              </td>
            </tr>
            <tr>
              <td style="background-image: url(tests/16.jpg)" id="t16" onclick="openModal(this.id)">
                <div>Тест костно-мышечной системы</div>
              </td>
              <td style="background-image: url(tests/17.jpg)" id="t17" onclick="openModal(this.id)">
                <div>Тест центральной нервной системы</div>
              </td>
              <td style="background-image: url(tests/18.jpg)" id="t18" onclick="openModal(this.id)">
                <div>Тест периферической нервной системы</div>
              </td>
              <td style="background-image: url(tests/19.jpg)" id="t19" onclick="openModal(this.id)">
                <div>Тест лимфатической системы</div>
              </td>
              <td style="background-image: url(tests/20.jpg)" id="t20" onclick="openModal(this.id)">
                <div>Тест эндокринной системы</div>
              </td>
            </tr>
            <tr>
              <td style="background-image: url(tests/21.jpg)" id="t21" onclick="openModal(this.id)">
                <div>Тест выделительной системы</div>
              </td>
              <td style="background-image: url(tests/22.jpg)" id="t22" onclick="openModal(this.id)">
                <div>Тест состояния репродуктивной системы женщины</div>
              </td>
              <td style="background-image: url(tests/23.jpg)" id="t23" onclick="openModal(this.id)">
                <div>Тест состояния репродуктивной системы мужчины</div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item2">
      <div class="content-wrapper">
        <span class="textonpanel">Концепция здоровья</span>
        <div class="slidearticle">
          <span class="slidearticletext">
            Чтобы быть здоровым и активным в течение долгих лет, мы предлагаем ознакомиться с пошаговой инструкцией к
            вашему телу g- общей концепцией здоровья с Coral Club. Это уникальная комплексная программа научит
            качественно
            заботиться о своем здоровье, финансах, а также времени.

            Организм очень умная машина, он умеет самовосстанавливаться и самоочищаться, ему лишь надо вовремя помочь.
            Если будете тщательно ухаживать, заниматься профилактикой, то он будет работать исправно, как часики, не
            давая
            сбоя в системах.
            У нас нет запчастей, но есть возможность поддерживать здоровье наших органов с помощью данной концепции.
          </span>
          <p class="slidearticletext">СЕКРЕТ СОХРАНЕНИЯ ЗДОРОВЬЯ ПРОСТ И ОСНОВАН ВСЕГО НА ДВУХ ПРИНЦИПАХ</p>
          <ul>
            <li class="slidearticletext">Комплексный подход. Начните позитивно мыслить, общайтесь с приятными людьми.
              Займитесь спортом, правильно питайтесь, пейте живую воду, вовремя очищайте организм и научитесь защищать
              его
              от внешних факторов.</li>
            <li class="slidearticletext">Регенерация клеток - восстановление поврежденных тканей и органов.</li>
          </ul>
          <span class="slidearticletext">Давайте более подробно остановимся на втором пункте - регенерации клеток.
            Человеческий организм состоит из 12 систем. Каждая система имеет органы и ткани, которые в свою очередь
            состоят из триллиона клеток.
            <br>Состояние нашего здоровья полностью зависит от образа жизни, а также от состояния клеток. Для того,
            чтобы
            клетки и их потомство были здоровы, необходимо отказаться от вредных привычек (курение, алкоголь,
            газированные
            напитки, мучное, сладкое, майонез, пакетированные соки, жареное, консервы).</span>
          <ol class="slidearticletext">
            <li>Пейте в течение дня чистую структурированную, обогащенную природными минералами Живую воду Coral-Mine.
            </li>
            <li>Минимум два раза в год очищайте организм от шлаков, токсинов, бактерий, вирусов и паразитов.</li>
            <li>Полноценно кормите всем необходимым - клеточное питание.</li>
            <li>Защитите от воздействия внешних факторов.</li>
            <br>
            <span class="slidearticletext">Помните! Занимаясь ежедневно профилактикой, вы сэкономите не только время, но
              и
              деньги! Лечение обойдется намного дороже!</span>
          </ol>
        </div>
      </div>
    </section>
    <!-- Image -->
    <section class="background" style="text-align:center" id="item3">
      <div class="content-wrapper">
        <span class="textonpanel">Живая вода Coral-Mine</span>
        <div class="slidearticle">
          <iframe class="youtube_video" src="https://www.youtube.com/embed/WUPkzaAcPn4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <button style="width:100%;" id="coralmine" onclick="openModal(this.id)">Подробнее</button>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item4">
      <div class="content-wrapper">
        <span class="textonpanel">Очищение организма</span>
        <div class="slidearticle">
          <span class="slidearticletext">

            <p>В современном мире из-за плохой экологии, употребления консервантов, красителей, а также лечения
              антибиотиками, человек сталкивается с серьезными заболеваниями, связанными с зашлакованностью организма.
            </p>
            <p>Небольшая часть токсинов выводиться силами внутренних органов, а остальная откладывается в тканях,
              лимфатической системе и органах. Именно поэтому, важно своевременно помогать организму очищаться.</p>
            <p>Компания Coral Club предлагает ряд комплексных программ для очищения организма. Например, Корал Детокс -
              необходим для вывода токсинов и подготовки организма к глубокому очищению. Программа Colo-Vada Plus и
              Целевая программа Здоровый кишечник для очищения кишечника, противопаразитарная программа для профилактики
              и
              избавления от лямблий, описторхов, бактерий, грибов и так далее.</p>
            <p>Если вы решили серьезно заняться профилактикой своего здоровья, рекомендуем начать с Корал Детокса, а
              далее
              следовать по нижеуказанным шагам.</p>
          </span>
          <ul class="slidearticlelist">
            <li id="detox" onclick="openModal(this.id)">Этап 1 - Coral Detox</li>
            <li id="parashield" onclick="openModal(this.id)">Этап 2 - Очищение от паразитов</li>
            <li id="colovada" onclick="openModal(this.id)">Этап 3.1 - Очищение кишечника Colo-Vada</li>
            <li id="digest" onclick="openModal(this.id)">Этап 3.2 - Целевая программа "Здоровый кишечник"</li>
            <li onclick="scrollingDown(5)">Этап 4 - Восстановление организма / клеточное
              питание
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item5">
      <div class="content-wrapper">
        <span class="textonpanel">Клеточное питание</span>
        <div class="slidearticle">
          <span class="slidearticletext">
            <p>Каждый орган человека состоит из триллиона клеток. Они рождаются и умирают, постоянно возобновляются и
              так,
              в течение всей жизни. Например, кожа обновляется каждые 2 недели, кровь через 150 дней, кишечник 16 лет и
              так далее.</p>
            <p>Скорость восстановления зависит от многих факторов. В основном, от экологии, питания, чистой воды,
              движения, психологии - образ жизни. Если вы настроены жить долго и оставаться здоровыми, тогда
              позаботьтесь
              о клетках. Для их жизнедеятельности, необходима водная среда, так как они рождаются и живут в ней.</p>
            <p>Для обновления органов и омоложения организма, необходимо клеточное питание. Что это такое, спросите вы?
              Это натуральная еда, природного происхождения, состоящая из трав. В ней содержится все необходимое для
              деления клеток.</p>
          </span>
          <ul id="cell" class="slidearticlelist" onclick="openModal(this.id)">
            <li>28 аминокислот</li>
            <li>15 минералов</li>
            <li>12 витаминов</li>
            <li>7 групп ферментов</li>
            <li>3 полинасыщенных жирных кислот</li>
            <li>Нутрипэк</li>
            <hr>
            <li>Этап 5 - Защита организма</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item6">
      <div class="content-wrapper">
        <span class="textonpanel">Программы здоровья</span>
        <div class="slidearticle">
          <ul class="slidearticlelist">
            <li id="p1" onclick="openModal(this.id)">Программа для зрения</li>
            <li id="p2" onclick="openModal(this.id)">Восстановление и очищение печени</li>
            <li id="p3" onclick="openModal(this.id)">Восстановление системы органов дыхания</li>
            <li id="p4" onclick="openModal(this.id)">Восстановление пищеварительной системы</li>
            <li id="p5" onclick="openModal(this.id)">Восстановление и укрепление сердечно-сосудистой системы</li>
            <li id="p6" onclick="openModal(this.id)">Восстановление системы органов кроветворения</li>
            <li id="p7" onclick="openModal(this.id)">Укрепление суставов</li>
            <li id="p8" onclick="openModal(this.id)">Восстановление центральной нервной системы</li>
            <li id="p9" onclick="openModal(this.id)">Восстановление периферической нервной системы</li>
            <li id="p10" onclick="openModal(this.id)">Очищение лимфатической системы</li>
            <li id="p11" onclick="openModal(this.id)">Укрепление иммунитета</li>
            <li id="p12" onclick="openModal(this.id)">Восстановление эндокринной системы</li>
            <li id="p13" onclick="openModal(this.id)">Восстановление работы почек</li>
            <li id="p14" onclick="openModal(this.id)">Восстановление репродуктивной женской системы</li>
            <li id="p15" onclick="openModal(this.id)">Восстановление репродуктивной мужской системы</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item7">
      <div class="content-wrapper">
        <span class="textonpanel">Детское здоровье</span>
        <div class="slidearticle slidearticletext">
          <p>Дети — наше будущее! Здоровье ребенка до совершеннолетия находится в руках родителей. Их задача с раннего
            возраста прививать своему чаду полезные привычки, которые в последующие 10-12 лет жизни корректируются и
            дополняются.</p>
          <p>Когда рождается ребенок, в роддоме, должны выдавать инструкцию, как пользоваться телом, но зачастую сами
            врачи этого не знают. Попадая в окружающую среду, ребенок сталкивается с различного рода микроорганизмами
            (бактерии, вирусы, грибы, паразиты).</p>
          <p>При медикаментозном лечении, ослабевает иммунитет, порой возникает интоксикация. Поэтому в целях
            профилактики, мы рекомендуем детям до 12 лет, четыре раза в год проводить очищение организма с помощью
            натуральных продуктов компании Coral Club.</p>
          <p>Во время очищения, исключить сахар, дрожжевое тесто, жареное, жирное, соленое, сладкое, пакетированные
            соки,
            ограничить виноград, груши, яблоки.</p>
          <button style="width:100%;" id="children" onclick="openModal(this.id)">Детская концепция здоровья</button>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item8">
      <div class="content-wrapper">
        <span class="textonpanel">Снижение веса</span>
        <div class="slidearticle">
          <span class="slidearticletext">
            <p>Для тех, кто хочет сохранить красоту, молодость и здоровье на долгие годы, мы предлагаем новинку —
              научно-практический проект Fat Lab. Продолжительность 90 дней.</p>
            <p>В рамках проекта вы узнаете причины нарушения обменных процессов. Наладите водный режим, питание,
              восстановите метаболизм, избавитесь от заболеваний, а также получите крутой побочный эффект — снижение
              веса.
            </p>
            <p>Принять участие в проекте может любой желающий в возрасте от 15 лет.</p>
          </span>
          <button style="width:100%;" id="fatlab" onclick="openModal(this.id)">Подробнее о проекте</button>
        </div>
      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item9">
      <div class="content-wrapper">
        <span class="textonpanel">Отзывы</span>
        <div class="wrapper wrapper--demo">
          <div class="carousel">
            <div class="carousel__content">
              <div class="item">
                <p class="title">First</p>
                <div class="content_holder"></div>
              </div>
              <div class="item">
                <p class="title">Second</p>
                <div class="content_holder"></div>
              </div>
              <div class="item">
                <p class="title">Third</p>
                <div class="content_holder"></div>
              </div>
              <div class="item">
                <p class="title">Fourth</p>
                <div class="content_holder"></div>
              </div>
              <div class="item">
                <p class="title">Fifth</p>
                <div class="content_holder"></div>
              </div>
              <div class="item">
                <p class="title">Sixth</p>
                <p class="title title--sub">Last Item</p>
                <div class="content_holder"></div>
              </div>
            </div>

            <div class="carousel__nav">
              <a href="#" class="nav nav--left">Назад</a>
              <a href="#" class="nav nav--right">Далее</a>
            </div>

          </div>
        </div>
        
        <button class="feedbutton">Оставить отзыв</button>
        <div class="popup">
          <div class="header">
            <div class="title">Оставить отзыв</div>
            <button class="sendbutton">Отправить</button>
            
          <div class="content">
            <input type="text" size="40" placeholder="Ваше имя">
            <textarea placeholder="Ваш отзыв"></textarea>
          </div>
        </div>
        <div class="slidearticle">
          <span class="slidearticletext">
          </span>
        </div>

      </div>
    </section>

    <!-- Image -->
    <section class="background" style="text-align:center" id="item10">
      <div class="content-wrapper">
        <span class="textonpanel">Lifestyle Packs</span>
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="photo-container" style="background-image:url(img/hydramax.png); background-position: 35% 35%;">
              </div>
              <h2>Hydramax</h2>
              <div class="pslide">
                HydraMax — набор для оптимальной гидратации организма.
                <br>Комплекс микро- и макроэлементов улучшает физиологическую полноценность воды и поддерживает баланс
                минералов, участвующих в работе всех органов и систем.
                <br>Антиоксиданты защищают клетки от окислительного разрушения и преждевременного старения.
                <br>Жизненно важные электролиты регулируют водно-солевой баланс, поддерживая нормальный обмен веществ и
                выносливость организма.</p>
              </div>
            </div>
            <div class="col">
              <div class="photo-container" style="background-image:url(img/detoxp.png);"></div>
              <h2>Coral Detox Plus</h2>
              <div class="pslide">
                <p>Facere illo pariatur necessitatibus fugit quo impedit, quae, corporis placeat recusandae dolor ipsa
                  nobis!</p>
              </div>
            </div>
            <div class="col">
              <div class="photo-container" style="background-image:url(img/parashieldp.png);"></div>
              <h2>Parashield</h2>
              <div class="pslide">
                <p>Autem possimus perspiciatis, eaque quos repudiandae modi labore sed repellat dolorum magnam
                  praesentium
                  expedita esse tempore saepe nulla.</p>
              </div>
            </div>
            <div class="col">
              <div class="photo-container" style="background-image:url(img/colovadal.png);"></div>
              <h2>Colo-Vada Light</h2>
              <div class="pslide">
                <p>Doloremque quisquam molestias, est laudantium vero aliquid dolorum inventore atque sint perferendis
                  qui
                  dolor voluptas consequuntur non.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="photo-container" style="background-image:url(img/nutripack.png);"></div>
              <h2>Nutripack</h2>
              <div class="pslide">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col">
              <div class="photo-container" style="background-image:url(img/immunity.png);"></div>
              <h2>Immunity</h2>
              <div class="pslide">
                <p>Veritatis eos similique eveniet tempora.</p>
              </div>
            </div>
            <div class="col">
              <div class="photo-container" style="background-image:url(img/mentalforce.png);"></div>
              <h2>Mental Force</h2>
              <div class="pslide">
                <p>Quam molestiae ipsa sapiente mollitia, nobis.</p>
              </div>
            </div>
            <div class="col">
              <div class="photo-container" style="background-image:url(img/cardiopack.png);"></div>
              <h2>Cardiopack</h2>
              <div class="pslide">
                <p>Facere illo pariatur necessitatibus fugit quo impedit, quae, corporis placeat recusandae dolor ipsa
                  nobis!</p>
              </div>
            </div>
          </div>
        </div>
        <button onclick="location.href = 'catalog.php';">Все продукты</button>
      </div>
    </section>
  </main>

  <!-- modal windows start from here-->
  <!-- start of test modals section -->
  <div id="t1_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест на интоксикацию организма</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/1.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>

  <div id="t2_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест на возможное наличие вирусов</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/2.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>

  <div id="t3_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест иммунной системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/3.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>

  <div id="t4_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест системы органов дыхания</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/4.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>

  <div id="t5_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест на возможное наличие грибковой инфекции</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/5.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t6_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест на наличие паразитов</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/6.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t7_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест "В порядке ли ваша печень?"</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/7.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t8_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест "Хорошая ли у вас память?"</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/8.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t9_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест "Риск развития диабета"</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/9.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t10_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест "Ваша кожа"</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/10.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t11_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест на обезвоживание организма</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/11.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t12_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест на закисление организма</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/12.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t13_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест системы органов пищеварения</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/13.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t14_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест сердечно-сосудистой системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/14.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t15_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест системы органов кроветворения</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/15.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t16_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест костно-мышечной системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/16.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t17_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест центральной нервной системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/17.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t18_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест периферической нервной системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/18.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t19_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест лимфатической системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/19.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t20_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест эндокринной системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/20.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t21_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест выделительной системы</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/21.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t22_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест состояния репродуктивной системы женщины</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/22.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <div id="t23_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Тест состояния репродуктивной системы мужчины</h2>
      </div>
      <div class="modal-body">
        <iframe src="tests/23.html" width="100%" height="100%" frameBorder="0"></iframe>
      </div>
    </div>
  </div>
  <!-- end of test modals section-->

  <!-- start of health plan modals-->

  <div id="p1_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Программа для зрения"</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>Для ориентации в пространстве, получения визуальной информации, человеку необходимо зрение. Оно даровано всевышним и является окном в мир. Самое важное - его сохранить!</p>
            <p>В современном мире важно иметь хорошее зрение. Ведь, небольшие его отклонения могут разрушить все мечты в отношении дальнейшей учебы, профессиональной деятельности и спорта. Мы хотим помочь решить вам задачу с одним неизвестным - восстановление зрения с помощью природных компонентов.</p>
            <p>Основными причинами ухудшения зрения у взрослых и детей является нехватка воды в организме, а также бета-каротина, необходимого для синтеза витамина группы А.</p>
            <span style="font-weight:600;">ПРОДУКЦИЯ CORAL CLUB ДЛЯ ЗРЕНИЯ</span>
            <ul>
              <li>Для улучшения работы всех органов и систем, необходимо ежедневно пополнять водный баланс организма. Предлагаем, для обогащения минералами живую воду Корал-Майн.</li>
              <li>Для предупреждения утомляемости глаз, различных нарушений зрения, улучшения внимания и снятия синдрома хронической усталости нужен Корал Лецитин. Без него невозможен процесс восстановления поврежденных клеток и рождения новых. Принимать по 1/3 раза в день после еды.</li>
              <li>Сохранить остроту и качество зрения, а также снять зрительную нагрузку при чтении книг, работе за компьютером и просмотром ТВ, предлагаем новый продукт Визи-Прайм. Принимать по 1/1 раз в день во время еды.</li>
              <li>Для улучшения зрения, а также укрепления иммунитета необходим натуральный источник каротина на основе морских водорослей с селеном и витамином Е - Фикотен. Принимать по 1/2 раза в день.</li>
              <li>Для снижения “плохого” холестерина, повышения умственной и физической работоспособности, а также для укрепления сетчатки глаза необходим Корал Таурин. Принимать по 1/2 раза в день.</li>
              <li>Для улучшения зрения, настроения, снятия депрессии и профилактики инсульта крайне необходим витамин В9 - Фолиевая кислота. Принимать по 1/2 раза в день.</li>
              <li>Для насыщения крови кислородом, а также гемоглобином, выводу из организма тяжелых металлов и токсинов предлагаем Хлорелла. Она содержит белок растительного происхождения, витамины В, D, бета-каротин и минералы. Принимать по 2/2 раза в день.</li>
            </ul>
            <div class="modalimgrow i7">
              <img src="img/coral30s.jpg">
              <img src="img/lecithin.jpg">
              <img src="https://ru.coral.club/upload/iblock/f9f/f9fca8b52a1937aca024d5fe2b5882c0.png">
              <img src="https://ru.coral.club/upload/iblock/79d/79dac27796fe4ad8c244b58bb380da50.png">
              <img src="https://ru.coral.club/upload/iblock/6fb/6fb2ddfd9c058174473d584019b3d27a.png">
              <img src="https://ru.coral.club/upload/iblock/4ed/4eddee0f2d9b74f24c20bec187f1e520.png">
              <img src="https://ru.coral.club/upload/iblock/15e/15e5d1422c0accc868661f4bfcf86578.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="p2_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Восстановление и очищение печени"</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>За все процессы происходящие в организме отвечает печень. Яды и токсины копятся в кишечнике, и с кровью проникают прямо в печень. Она фильтрует и нейтрализует токсины и яды, делая их безопасными.</p>
            <p>Любые недомогания и заболевания возникают в основном из-за сбоев в работе данного органа. Для нормального функционирования важно два раза в год проводить профилактику в виде очищения и восстановления печени.</p>
            <p>Помните! Печень выполняет различные функции, их более 500. У нее огромный внутренний резерв - это единственный орган который растет и восстанавливается. Человек, как и любое млекопитающее может выжить с 30% оставшегося органа.</p>
            <p>Поэтому, чтобы сохранить и восстановить, необходимо правильно кормить. Каждый день, предоставлять клеточное питание.</p>
            <span style="font-weight:600;">ПРИЗНАКИ НАРУШЕНИЙ РАБОТЫ ПЕЧЕНИ</span>
            <ul>
              <li>Из-за недостатка воды в организме, нарушения работы пищеварительной системы (частые запоры или понос, язва желудка и двенадцатиперстной кишки).</li>
              <li>Прыщи и кожные заболевания (угри, псориаз, витилиго, дерматит и другое).</li>
              <li>Частые стрессы и переживания.</li>
              <li>Выпадения волос, жирность кожи головы.</li>
              <li>Простудные и инфекционные заболевания.</li>
              <li>Синдром хронической усталости.</li>
            </ul>
            <span style="font-weight:600;">ПРОДУКЦИЯ CORAL CLUB ДЛЯ ПЕЧЕНИ</span>
            <ul>
              <li>Для нормализации водного баланса организма и обогащения воды минералами необходимо употреблять минеральную композицию Корал-Майн. На 1,5 литра воды опустить 1 пакетик-саше. Пить за 30 минут до еды и через 1,5-2 часа после еды.</li>
              <li>Для структурного восстановления поврежденных клеток печени, необходимо принимать Корал Лецитин. Пить по 2/2 раза в день.</li>
              <li>Для снижения холестерина и мочевины в крови, а также для каждого кто курит и употребляет спиртные напитки необходим Корал Артишок. Пить по 1/3 раза в день.</li>
              <li>Для улучшения пищеварения и усвоения питательных веществ принимайте растительный фермент ДигестЭйбл, который содержит печеночные липазы. Пить по 1/3 раза в день.</li>
              <li>От раковых заболеваний печени, необходимо принимать источник железа, селена и витаминов группы А, В12, Е и F - Спирулина в капсулах. Пить по 3/2 раза в день.</li>
              <li>Для защиты печени от токсических веществ, усиления детоксикации, а также снижения холестерина, необходим ФанДетокс. Пить по 1 стику 1 раз в день перед снов, растворив предварительно в стакане теплой воды.</li>
              <li>Для улучшения настроения и работы нервной системы необходим источник витамина B - Гриффония. Пить по 1/2 раза в день.</li>
            </ul>
            <div class="modalimgrow i7">
              <img src="img/coral30s.jpg">
              <img src="img/lecithin.jpg">
              <img src="">
              <img src="https://ru.coral.club/upload/iblock/79d/79dac27796fe4ad8c244b58bb380da50.png">
              <img src="https://ru.coral.club/upload/iblock/6fb/6fb2ddfd9c058174473d584019b3d27a.png">
              <img src="https://ru.coral.club/upload/iblock/4ed/4eddee0f2d9b74f24c20bec187f1e520.png">
              <img src="https://ru.coral.club/upload/iblock/15e/15e5d1422c0accc868661f4bfcf86578.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end of health plan modals-->
  <!-- coralmine modal -->
  <div id="coralmine_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Живая вода Coral-Mine</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>Вода - это основа жизни человека, от ее качества зависит здоровье, энергия и долголетие. Она является
              растворителем питательных веществ, очищает организм от шлаков и токсинов. При ее недостатке, человек
              испытывает кислородное голодание.</p>
            <p>Полноценная жизнь зависит от качества воды. Раньше думали, что живая и мертвая вода бывает только в
              сказках. На самом деле, на острове Окинава растет белый коралл Санго, который обладает рядом преимуществ
              для восстановления и поддержания здоровья человека.</p>
            <p>В первую очередь, вода Корал-Майн поддерживает кислотно-щелочное равновесие рН, меняет структуру, память,
              поверхностное натяжение, а также окислительно-восстановительный потенциал ОВП.</p>
            <img src="./img/coral10.jpg" style="margin: auto; display:block;">
            <p>Живая вода имеет структуру приближенную к межклеточной жидкости в организме человека. Вода обогащенная
              минералами и кальцием в ионной форме, быстрее усваивается организмом. При постоянном ее употреблении,
              происходит восстановление организма, улучшается настроение, появляется энергия, нормализуется кровяное
              давление.</p>
            <p>При употреблении воды с Корал-Майн вы заметите, как ваш вес начнет таять, восстановится иммунитет,
              нормализуется содержание сахара в крови, почки и печень будут работать как часики, придет в норму
              эндокринная система. Пройдут головные боли и головокружение, а также стресс. Замедлятся процессы старения.
            </p>
            <p>Коралловая вода необходима будущим мамам, они забудут, что такое токсикоз и отеки во время беременности.
            </p>
            <span style="font-weight:600;">ПРИЗНАКИ ОБЕЗВОЖИВАНИЯ ОРГАНИЗМА</span>
            <ul>
              <li>Ощущение жажды</li>
              <li>Уменьшенное потоотделение</li>
              <li>Частые запоры</li>
              <li>Темные круги под глазами</li>
              <li>Головокружение</li>
              <li>Головная боль</li>
              <li>Сухость кожи и волос</li>
              <li>Повышенная температура</li>
              <li>Нет энергии и сил</li>
              <li>Камни, песок, соли в почках и желчном пузыре</li>
              <li>Сахарный диабет и др.</li>
            </ul>
            <span style="font-weight:600;">РЕКОМЕНДАЦИИ ПО ПРИМЕНЕНИЮ CORAL-MINE</span>
            <ul>
              <li>Один пакет саше не вскрывая опустить в 1,5 литра воды (количество воды можно уменьшить или увеличить в
                2 раза). Воду желательно брать бутилированную, или из-под фильтра.</li>
              <li>Пакетик с кораллами не кипятить, и не бросать в газированную воду!</li>
            </ul>
            <p>На сегодняшний день около миллиона японцев, а также жители из 32 стран по всему миру пьют живую воду с
              Корал-Майн.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- coral detox modal -->
  <div id="detox_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Coral Detox</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>Токсины могут вызывать многие болезни. С первого шага вы готовите организм к глубокому очищению.
              Избавляете его от токсинов и ядов. Интоксикация происходит обычно без симптомов. Организм выводит токсины
              через кишечник и почки, если же эти органы не справляются, то подключаются кожа и легкие.</p>
            <p>Токсин (от греческого toxikos - ядовитый) - яд биологического происхождения. Вырабатываются, например,
              опухолевыми клетками, инфекционными (от лат. inficio - насыщать, заражать) агентами - бактериями,
              вирусами, грибами (микотоксины), или паразитами, в частности, гельминтами.</p>
            <span style="font-weight:600;">КАКИЕ БЫВАЮТ ТОКСИНЫ</span>
            <ol>
              <li>Водорастворимые - их в организме 80%. Нейтрализовать их можно с помощью антиоксиданта H-500 и
                обогатителя воды Корал-Майн. Они эффективно выводят токсины, и очищают организм.</li>
              <li>Жирорастворимые - их 20%. Нейтрализовать их можно с помощью продукта Ассимилятор, который помогает
                работе поджелудочной железы, расщеплять пищевые продукты, а также уменьшает образование токсинов. Корал
                Лецитин - защищает мембраны клеток от повреждения токсинами и выводит их из организма.</li>
            </ol>
            <hr>
            <span style="font-weight:600;">КАК ПРИНИМАТЬ КОРАЛ ДЕТОКС</span>
            <img style="display:block; margin:auto;" src="img/detoxp.png">
            <ul>
              <li>Один пакет саше с Корал-Майн опустите не вскрывая в 1,5-2 л бутылку негазированной воды. Взболтайте.
                Через 5-10 минут можете пить. Принимайте за 30 минут до еды и не раньше, чем через 1,5-2 часа после еды.
                Стараетесь выпивать воду в течение дня. После того, как попили обязательно закрывать крышкой.</li>
              <li>H-500 растворить 1 капсулу в ⅓ стакана горячей воды 50-60 градусов. Мешайте пластмассовой ложкой.
                Запивать лучше теплой водой с Корал-Майн. Принимаете 2 раза в день за 30 минут до еды, утром и до обеда.
              </li>
              <li>Ассимилятор пьете по 1 капсуле за 10 минут до еды 3 раза в день, запивая небольшим количеством простой
                воды. Если не можете проглотить капсулу, высыпайте содержимое капсулы в ложку и запиваете водой.</li>
              <li>Корал Лецитин пить по 2 капсулы после или во время еды 2 раза в день. Капсулы можете разжевать, если
                не можете проглотить.</li>
            </ul>
            <div class="modalimgrow i4">
              <img src="img/coral10.jpg">
              <img src="img/h500.jpg">
              <img src="img/assimilator.jpg">
              <img src="img/lecithin.jpg">
            </div>
            <p>Во время приема программы Корал Детокс, необходимо исключить сахар, кроме фруктов и ягод (ограничить
              виноград, груши, яблоки), дрожжевое тесто, жареное, жирное, соленое, сладкое, консервацию с уксусом,
              алкоголь, говядину и свинину, соусы, кетчупы, газированные напитки, пакетированные соки. Молоко только в
              чай и кофе.</p>
            <p>Можно кисломолочные продукты, сыры, растительное масло в салаты или кашу, ограничить сливочное масло.</p>
            <span style="font-weight:600;">В РЕЗУЛЬТАТЕ ПРИМЕНЕНИЯ ДЕТОКСА</span>
            <ul>
              <li>Снизите лишний вес.</li>
              <li>Увеличите энергетический потенциал организма.</li>
              <li>Улучшите работу ЖКТ и других систем органов.</li>
              <li>Восстановите уровень сахара в крови.</li>
              <li>Через 2-3 месяца приема рассосутся липомы (жировики).</li>
              <li>Через 4-6 месяцев приема размягчатся или расстворятся камни в почках.</li>
            </ul>
            <p>Для очищения организма от токсинов можно принимать Корал Детокс, или Корал Детокс Плюс, или Гидрамакс,
              или Упаковку жизни, или Набор Здоровый старт.</p>
            <div class="modalimgrow i4">
              <img src="img/colovadal.png">
              <img src="img/hydramax.png">
              <img src="img/lifepack.jpg">
              <img src="img/healthypack.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- parashield modal -->
  <div id="parashield_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Очищение от паразитов</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>Для чего нужно очищение от паразитов, спросите вы. Я же чистый... Хотим вас немного огорчить и сказать,
              что каждый второй житель планеты заражен паразитами, грибами, вирусами или бактериями.</p>
            <p>По данным Всероссийской Организации Здравоохранения 50 миллионов человек ежегодно умирает в мире, из них
              более 16 миллионов уходят из жизни вследствие паразитарных инвазий.</p>
            <p>Паразиты живут долго и активно размножаются за счет своего хозяина. Хуже всего, они вызывают заболевания,
              некоторые из которых поддаются лечению, а некоторые нет. Паразитами, как правило, можно заразиться через
              пищу, грязную воду, грязные руки, немытые овощи, фрукты, половые контакты и тд.</p>
            <p>Сейчас вы много путешествуете. Вернувшись домой у вас происходят проблемы с желудком, чаще всего диарея -
              это болезнь путешественников и первый признак того, что в вас поселился чужой. Организм пытается
              очиститься, ему надо лишь помочь.</p>
            <p>Наша задача помочь вам разобраться и взять за правило проводить очищение от паразитов с помощью
              противопаразитарной программы 2 раза в год и после каждой поездки в экзотическую страну.</p>
            <p>Эксперты Coral Club создали набор для комплексной защиты от паразитов Парашилд.</p>
            <img style="display:block; margin:auto;" src="img/parashield.png">
            <span style="font-weight:600;">В ДАННУЮ ПРОГРАММУ ВХОДЯТ ПРОБИОТИКИ, ВИТАМИНЫ И МИНЕРАЛЫ</span>
            <ol>
              <li>Восстановить гормональный фон.</li>
              <li>Избавить организм от факторов риска онкологии, сахарного диабета.</li>
              <li>Избавить организм от кислородного голодания (гипоксия).</li>
              <li>Нормализовать вес без диет и голодовок.</li>
              <li>Предупредить процессы серьезных заболеваний.</li>
              <li>Сохранить активное долголетие.</li>
            </ol>
            <p>Мы не будем голодать, взвешивать пищу, считать калории, нет частого питания. Есть знания - это
              инструмент! Есть понимание необходимости детоксикации на клеточном уровне и поддержка водного баланса.</p>
            <hr>
            <span style="font-weight:600;">ИНСТРУМЕНТЫ, КОТОРЫЕ ПОМОГУТ ВАМ РЕШАТЬ ЗАДАЧИ</span>
            <ol>
              <li>Участникам проекта строго соблюдать рекомендации тренеров по питанию.</li>
              <li>Ежедневно пить норму воды, исходя из расчета 50 мл воды на 1 кг веса.</li>
              <li>Обязательно приобрести Корал Детокс Плюс.</li>
              <li>Обязательно включить физические нагрузки.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- colovada modal -->
  <div id="colovada_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Очищение кишечника Colo-Vada</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>Большинство заболеваний затрагивают выделительные системы организма: дыхательную, лимфатическую, пищеварительную, мочевыделительную, включая кожу.</p>
            <p>Очищение кишечника - эта тема, которую обсуждают многие, причем очень часто. Одни утверждают, что здоровье человека на 90% зависит от состояния его кишечника, другие же говорят, что нет необходимости в очищении, так как организм самоочищается.</p>
            <p>Ознакомьтесь с фактами и решите для себя, нужно ли вам очищение кишечника или нет. Если вы часто испытываете усталость, головные боли, вас мучает аллергия, папилломы, миомы, болят суставы, инсульт, инфаркт, то однозначно вам нужно очистить кишечник.</p>
            <p>Мы предлагаем двухнедельный комплекс для очистки организма Набор Программа 2 Коло-Вада Плюс. Программа необходима не только здоровым людям для профилактики, а также для решения многих проблем связанных со здоровьем.</p>
            <img style="display:block; margin:auto;" src="img/colovadap.png">
            <span style="font-weight:600;">ЗАБОЛЕВАНИЯ ПРИ КОТОРЫХ РЕКОМЕНДУЕТСЯ ОЧИЩЕНИЕ КИШЕЧНИКА</span>
            <ol>
              <li>Гепатиты, дисфункция желчных протоков, цирроз печени, хронический холецистит.</li>
              <li>Псориаз, аллергические заболевания, нейродермит, лечение угрей и воспалительных кожных заболеваний.</li>
              <li>Гастрит, профилактика злокачественных опухолей кишечника, колит.</li>
              <li>Артроз, артрит, остеопороз, подагра, сахарный диабет, ожирение.</li>
              <li>Все заболевания - которые вызывают гельминты.</li>
            </ol>
            <p>Если у вас есть хотя бы одна из перечисленных проблем - ваш организм работает с перегрузкой, и ему необходима генеральная уборка. Ни одно лекарство, ни витамины, ни полезные вещества не усвоятся в достаточном количестве, если вы не очиститесь. К 40 годам каждый носит в себе от 5 до 25 кг шлаков в собственном кишечнике.</p>
            <span style="font-weight:600;">НАБОР ПРОГРАММА 2 КОЛО-ВАДА ПЛЮС</span>
            <p>Для качественной очистки организма нужен продукт, который даст 100% результат, при этом не нарушая привычного режима жизнедеятельности - Коло-Вада Плюс.</p>
            <p>Данный продукт дает не только оздоровление, но снижает вес, омолаживает минимум на 5 лет, убираете токсины, шлаки и наконец за 2 недели вы получаете новую систему Желудочно-Кишечного Тракта.</p>
            <p>Разработана данная программа выдающимся канадским натуро-терапевтом доктором Альбертом Зером. Программа прошла испытания и доказала свою эффективность на протяжении 30 лет.</p>
            <p>Во время прохождения очистки необходимо увеличить питьевой режим до 2-3 литров в день, пить слабощелочную, структурированную, живую воду Корал-Майн.</p>
            <p>Программа рассчитана на 14 дней и включает в себя три этапа. Эта программа не создает дискомфорта и очень удобна для обычного образа жизни. Она простая и эффективная для выведения из организма шлаков из пищеварительного тракта, а также толстого кишечника.</p>
            <p>Во время прохождения программы надо соблюдать специальную 4-х дневную диету.</p>
            <p>Если вы не готовы морально к жесткой диете, а также имеются различные заболевания, такие как диабет, камни в желчном пузыре, почках и прочее, есть щадящая очистка - Набор Коло-Вада Лайт или Целевая программа: Здоровый кишечник.</p>
            <span style="font-weight:800;">КАК ПРИНИМАТЬ КОЛО-ВАДУ</span>
            <span style="font-weight:600;">ПЕРВЫЙ ЭТАП - 7 ДНЕЙ ПОДГОТОВКИ</span>
            <p>За полчаса до завтрака выпиваете натощак 1-2 стакана теплой воды с Корал-Майн. Через 30 минут, принимаете содержимое пакета №1, запивая стаканом теплой воды с лимоном без сахара и садитесь завтракать.</p>
            <p>За полчаса до ужина, выпиваете натощак 1 стакан теплой воды с Корал-Майн. Через 30 минут, принимаете содержимое пакета №1, запивая его стаканом кислой воды, затем сразу ужинаете. Общее количество воды, которое должны выпить за день минимум 1,5 - 2 литра. Натощак или между приемами пищи: за 30 минут до еды и через 1,5 часа после еды.</p>
            <span style="font-weight:600;">ВТОРОЙ ЭТАП - 4 ДНЯ ОЧИСТКИ КИШЕЧНИКА</span>
            <p>На втором этапе в течение 4-х дней отказываетесь от еды.</p>
            <p>Утром натощак пьете 640 мл теплой или горячей воды с Корал-Майн. Через 30 минут принимаете содержимое пакета №2 со стаканом теплой воды с лимоном.</p>
            <p>Через 1 час вам захочется кушать, при появлении чувства голода, пьете 1 стакан теплой воды с Корал-Майн. И вместо еды, пьете Порошок Коло-Вада Микс, растворив в 1/2 стакане обычной холодной воды и вдогонку запиваете стаканом теплой воды.</p>
            <p>Перед каждым приемом Порошок Коло-Вада Микс, пьете стакан теплой воды, затем в 1/2 стакане холодной обычной воды размешиваете порошок и все это запиваете стаканам теплой воды.</p>
            <p>Каждые два часа пьете вместо еды Порошок Коло-Вада Микс, 4 пакетика в день. Вечером натощак пьете 1 стакан теплой или горячей воды с Корал-Майн. Через 30 минут принимаете содержимое пакета №2 со стаканом теплой воды с лимоном. За 2 часа до отхода ко сну выпиваете пакет №4 с Порошок Коло-Вада Микс.</p>
            <p>На втором этапе пьете больше воды, чтобы помочь организму очистить кишечник!</p>
            <p>Если, вовремя 4-х дней вам сильно захочется есть или кружится голова, рассосите дольку апельсина или выпейте стакан зеленого чая с чайной ложкой меда.</p>
            <span style="font-weight:600;">ТРЕТИЙ ЭТАП - 3 ДНЯ ВЫХОДА ИЗ ГОЛОДАНИЯ</span>
            <p>Утром, за 30 минут до еды пьете 1 стакан теплой воды с Корал-Майн. Затем, пакет №3 запивая теплой водой с лимоном и сразу приступаете к завтраку. Все 3 дня лучше всего питаться овощными супами, вареными или тушеными овощами.</p>
            <p>Тошнота - это не раскрытый желудок, нужно пить не воду с Корал-Майн, а кислую с лимоном. Лимон - желчегонное средство. Вечером пьете 1-2 стакана теплой воды с Корал-Майн. Через 30 минут пьете содержимое пакета №3, запивая водой с соком лимона и сразу же приступаете к ужину.</p>
            <p>Желаем вам приятного прохождения очистки организма!</p>
            <span style="font-weight:800;">ПРОТИВОПОКАЗАНИЯ</span>
            <hr>
            <span style="font-weight:600;">КАМНИ В ЖЕЛЧНОМ ПУЗЫРЕ</span>
            <p>Если есть мелкие камни в желчном пузыре Коло-Вада Плюс проходить нельзя! Надо попытаться превратить их в песок с помощью биологически доступной слабощелочной воды Корал-Майн, повышенной щелочной концентрации - 1 пакет-саше на 500 мл теплой воды. Пить маленькими дозами, так создается постоянная щелочная среда в организме. Воды надо пить много от 2 до 2,5 литров в день. Кроме этого, принимать:</p>
            <ul>
              <li>Корал Лецитин по 2 капсулы 3 раза в день после еды;</li>
              <li>Ассимилятор по 2 капсулы 3 раза в день до еды за 10 минут, запивая простой водой;</li>
              <li>АкваОкс по 2 капсулы 1 раз в день утром до еды за 30 минут.</li>
            </ul>
            <p>При соблюдении питьевого режима и данных рекомендаций в течение 4-6 месяцев камни становятся рыхлыми, и рассыпаются в песок.</p>
            <span style="font-weight:600;">ОСТРЫЕ СОСТОЯНИЯ</span>
            <p>Такие как грипп, ОРЗ, обострения хронических заболеваний, открытые язвы желудка и двенадцатиперстной кишки, тяжелая сердечно-сосудистая патология.</p>
            <span style="font-weight:600;">НАЛИЧИЕ ПАРАЗИТОВ</span>
            <p>Вначале пройти очищение от паразитов от 21 до 28 дней. (21 день — это стандартный цикл развития паразитов из яиц - лямблии, описторхи, острицы).</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- digest modal -->
  <div id="digest_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Целеваая программа "Здоровый Кишечник"</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <p>Здоровый кишечник является источником сохранения не только молодости, красоты и здоровья, но иммунитета. Многие из вас знают, что иммунные клетки живут в кишечнике, и неудивительно, что паразиты и инфекции проникая в тело, попадают именно в кишечник. Поэтому, кишечный департамент иммунной системы должен постоянно бороться против патогенных бактерий, при этом не нарушая дружественной микрофлоры.</p>
            <p>Для людей с желчнокаменной болезнью, с проблемами ЖКТ, печенью, желчным пузырем необходимо щадящее очищение. Мы предлагаем вместо программы Colo-Vada Plus специально разработанный комплекс от компании Coral Club - Целевая программа: Здоровый кишечник.</p>
            <img style="display:block; margin:auto;" src="https://ru.coral.club/upload/iblock/91c/91cfb448458df21849c77616d87c380b.png">
            <span style="font-weight:600;">ДЕЙСТВИЕ ПРОГРАММЫ</span>
            <ol>
              <li>Настраивает работу кишечника и всего ЖКТ.</li>
              <li>Укрепляет и поддерживает иммунитет.</li>
              <li>Нормализует обмен веществ.</li>
              <li>Улучшает самочувствие и внешний вид.</li>
            </ol>
            <p>Целевая программа: Здоровый кишечник подходит тем, кто готовиться к операции, имеет проблемы с пищеварением, суставами, страдает хроническими заболеваниями (сахарный диабет, аллергия) и многое другое.</p>
            <p>Данную программу можно принимать несколько месяцев подряд, результаты по здоровью будут только усиливаться. Кроме этого, программа Здоровый кишечник можно использовать вместо восстановительного этапа, после прохождения Коло-Вада Плюс.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- cell modal -->
  <div id="cell_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>КАЖДЫЙ ДЕНЬ КЛЕТКИ ДОЛЖНЫ ПОЛУЧАТЬ</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <span style="font-weight:600;">28 АМИНОКИСЛОТ (21+7 НЕЗАМЕНИМЫХ)</span>
            <div class="modalimgrow">
              <img src="img/amino.jpg">
            </div>
            <span style="font-weight:600;">15 МИНЕРАЛОВ</span>
            <div class="modalimgrow">
              <img src="img/mineral.jpg">
            </div>
            <span style="font-weight:600;">12 ВИТАМИНОВ</span>
            <div class="modalimgrow">
              <img src="img/vitamins.jpg">
            </div>
            <span style="font-weight:600;">7 ГРУПП ФЕРМЕНТОВ</span>
            <div class="modalimgrow">
              <img src="img/enzymes.jpg">
            </div>
            <span style="font-weight:600;">3 ПНЖК</span>
            <div class="modalimgrow">
              <img src="img/acids.jpg">
            </div>
            <span style="font-weight:600;">НУТРИПЭК</span>
            <div class="modalimgrow">
              <img src="img/nutripack.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- child health modal -->
  <div id="children_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Детская концепция здоровья</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <span style="font-weight:600;">ПЕРВЫЙ ЭТАП - ДЕТОКС</span>
            <p>На первом этапе, приучаем ребенка пить воду. Улучшаем пищеварение, восстанавливаем кислотно-щелочной
              баланс, а также готовим организм к очищению.</p>
            <ul>
              <li>Корал-Майн, ощелачивает организм, один пакетик саше на 1,5 литра воды. Через 5-7 минут вода готова к
                употреблению. Пить за полчаса до еды и через полтора часа после еды.</li>
              <li>Папайя (ферменты), пить после еды по 1 таблетке 3 раза в день.</li>
              <li>Корал Лецитин (гепатопротектор), пить по 1 капсуле 2 раза в день во время еды.</li>
              <li>Би-Курунга (полезные бактерии), пить по 1 таблетке 3 раза в день, за 20-30 минут до еды.</li>
            </ul>
            <p>Если у ребенка аллергия на белки коровьего молока и непереносимость лактозы, то заменяем Папайю на
              Дигестэйбл, пить по ½ капсулы 3 раза в день во время еды. Би-Курунгу заменяем на Супер Флору, пить по 1
              капсуле 2 раза в день, за 20-30 минут до еды.</p>
            <p>Продукты Coral Club безопасные, в них нет токсичных компонентов. Они выступают, как источник витаминов и
              микроэлементов.</p>
            <div class="modalimgrow i5">
              <img src="img/coral30s.jpg">
              <img src="img/papaya.jpg">
              <img src="img/lecithin.jpg">
              <img src="img/bkurunga.jpg">
              <img src="img/superflora.jpg">
            </div>
            <span style="font-weight:600;">ВТОРОЙ ЭТАП - ПРОТИВОПАРАЗИТАРНАЯ ПРОГРАММА</span>
            <p>На втором этапе проводим профилактическую противопаразитарную, противогрибковую обработку и
              восстанавливаем ЖКТ. Детям с аллергией начинаем давать продукты постепенно.</p>
            <p>Вначале вводим один продукт, смотрим реакцию, на следующий день второй и так далее. Начинаем с части
              таблетки, потом увеличиваем дозу.</p>
            <ul>
              <li>Корал-Майн, пить за 30 минут до еды и через полтора часа после еды.</li>
              <li>Корал Лецитин (гепатопротектор), принимать по 1 капсуле 2 раза в день во время еды.</li>
              <li>Папайя (ферменты), принимать по 1 таблетке 3 раза в день после еды. Для аллергиков вместо Папайи,
                Супер Флора, принимать по 1 капсуле 2 раза в день, за 20-30 минут до еды.</li>
              <li>Листья черного ореха (противопаразитарное средство), принимать по 1 таблетке 2 раза в день во время
                еды или Парафайт по 1 капсуле 2 раза в день.</li>
              <li>Сильвер Макс (противогрибковое, противовирусное средство), брызгать в рот по 4-5 впрысков 2 раза в
                день, за 30 минут до еды.</li>
              <li>Кора муравьиного дерева с селеном (противопаразитарное, противовирусное средство), пить по 1 капсуле 2
                раза в день во время еды.</li>
            </ul>
            <div class="modalimgrow i6">
              <img src="img/coral30s.jpg">
              <img src="img/lecithin.jpg">
              <img src="img/papaya.jpg">
              <img src="img/blackwalnut.jpg">
              <img src="img/silvermax.jpg">
              <img src="img/paudarco.jpg">
            </div>
            <span style="font-weight:600;">ТРЕТИЙ ЭТАП - ВОССТАНОВЛЕНИЕ</span>
            <ul>
              <li>Продолжаем поить ребенка Корал-Майн, за 30 минут до еды и через 1,5 часа после еды.</li>
              <li>Омега-3 Апельсин или Омега 3/60 или Корал Лецитин. Принимать по 1 капсуле в день. Можно чередовать,
                один день Омега, другой день Корал Лецитин.</li>
              <li>Ферстфуд Молозиво (для укрепления иммунитета), принимать по 1-2 штуки в день во время еды.</li>
              <li>Ямми Витс со вкусом апельсина (витаминно-минеральный комплекс), принимать по 1 пастилке 1 раз в день.
              </li>
              <li>Би-Курунга (полезные бактерии), принимать по 1 таблетке 3 раза в день, за 20-30 минут до еды. Если у
                ребенка аллергия на белки коровьего молока и непереносимость лактозы, то заменяем Би-Курунгу на Супер
                Флору, принимать по 1 капсуле 2 раза в день, за 20-30 минут до еды.</li>
            </ul>
            <p>Всей семьей 4 месяца подряд пропиваем Липосомальный Витамин D3. Программу очищения повторить через 3
              месяца.</p>
            <p>Дозировки рассчитываются в зависимости от веса ребенка.</p>
            <div class="modalimgrow i7">
              <img src="img/coral30s.jpg">
              <img src="img/omega3o.jpg">
              <img src="img/omega3.jpg">
              <img src="img/lecithin.jpg">
              <img src="img/yummy.jpg">
              <img src="img/bkurunga.jpg">
              <img src="img/lipod3.jpg">
            </div>
            <span style="font-weight:600;">ПРИМЕРНЫЕ ДОЗЫ ПРОДУКТОВ</span>
            <ul>
              <li>7-12 кг веса - по 1/3 таблетки или капсулы 3 раза в день.</li>
              <li>13-25 кг - по 1/2 таблетки или капсулы 3 раза в день.</li>
              <li>Больше 25 кг - по 1 капсуле или таблетке 3 раза в день.</li>
            </ul>
            <p>Концепция здоровья Кораллового клуба подходит абсолютно всем, как взрослым, так и детям. Главное
              разберитесь и начните применять простые действия. Научившись один раз, вы обеспечите всей своей семье
              здоровье на многие годы.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- fatlab modal -->
  <div id="fatlab_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Программа снижения веса Fat Lab</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <span style="font-weight:600;">ЦЕЛЬ ПРОЕКТА FAT LAB</span>
            <ol>
              <li>Помочь привести физиологическую массу тела в норму.</li>
              <li>Ограничить потребление углеводов и направить работу организма на получение энергии из жиров.</li>
              <li>Избавить организм от очагов вялотекущих заболеваний таких, как сахарный диабет, кожные заболевания,
                онкология и другое.</li>
              <li>Привить участникам проекта правила здорового питания и нормы водного баланса.</li>
              <li>Передать каждому участнику проекта в личное пользование "Технологию здоровья".</li>
            </ol>
            <hr>
            <span style="font-weight:600;">ЗАДАЧИ FAT LAB</span>
            <ol>
              <li>Восстановить гормональный фон.</li>
              <li>Избавить организм от факторов риска онкологии, сахарного диабета.</li>
              <li>Избавить организм от кислородного голодания (гипоксия).</li>
              <li>Нормализовать вес без диет и голодовок.</li>
              <li>Предупредить процессы серьезных заболеваний.</li>
              <li>Сохранить активное долголетие.</li>
            </ol>
            <p>Мы не будем голодать, взвешивать пищу, считать калории, нет частого питания. Есть знания - это
              инструмент! Есть понимание необходимости детоксикации на клеточном уровне и поддержка водного баланса.</p>
            <hr>
            <span style="font-weight:600;">ИНСТРУМЕНТЫ, КОТОРЫЕ ПОМОГУТ ВАМ РЕШАТЬ ЗАДАЧИ</span>
            <ol>
              <li>Участникам проекта строго соблюдать рекомендации тренеров по питанию.</li>
              <li>Ежедневно пить норму воды, исходя из расчета 50 мл воды на 1 кг веса.</li>
              <li>Обязательно приобрести Корал Детокс Плюс.</li>
              <li>Обязательно включить физические нагрузки.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- business modal -->
  <div id="business_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Бизнес под ключ</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/SAthbcHtTJ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <span style="font-weight:600;">НАШИ ПРЕИМУЩЕСТВА ДЛЯ СОТРУДНИЧЕСТВА</span>
            <ol>
              <li>Сертифицированный продукт</li>
              <li>75 стран доставка продукта и возможность развития бизнеса в этих странах</li>
              <li>Комплексный подход к здоровью человека</li>
              <li>Коробочные решения</li>
              <li>Эксклюзивный продукт, возвращающий воде природные свойства</li>
              <li>Обучение новым эффективным методам продвижения продукции компании Coral Club, как в своем городе, так и в разных странах</li>
              <li>Обучение грамотной подаче рекламы, ведение блогов, проведение прямых эфиров в социальных сетях и многое другое</li>
              <li>Комфортные условия для потребителей, дистрибьюторов, лидеров</li>
            </ol>
            <span style="font-weight:600;">КТО МОЖЕТ СТАТЬ ПАРТНЕРОМ КОМАНДЫ</span>
            <ul>
              <li>Потребители, получившие свой результат по здоровью, открытые к новым возможностям</li>
              <li>Предприниматели , которые ищут бизнес с возможностью развития в разных странах мира</li>
              <li>Желающие получать дополнительные деньги, обучаясь, используя и продвигая продукты компании в свободное от основной работы время</li>
              <li>Профессиональные сетевики, которых не устроил маркетинг их компании</li>
            </ul>
            <span style="font-weight:600;">ТРИ ШАГА ДЛЯ БЫСТРОГО СТАРТА НОВИЧКУ</span>
            <ol>
              <li><a href="https://md.coral-club.com/registration/?REF_CODE=713267945567" target="_blank">Чтобы убедиться в эффективности продукта и продвигать его в последующем, необходимо самому начать пользоваться продуктом</a></li>
              <li><a href="https://cba.coral-club.com/" target="_blank">Познакомиться с продукцией компании, а также пройти обучение на платформе</a></li>
              <li>Посещение ближайших бизнес событий для знакомства с компанией и партнерами. Чтобы узнать о ближайших мероприятиях выберите удобную форму связи в нижнем правом углу</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- about modal -->
  <div id="about_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>О компании</h2>
      </div>
      <div class="modal-body">
        <div class="modalb2">
          <div class="modaltextarea">
            <span style="font-weight:600;">ВИДЕНИЕ</span>
            <p>Каждый день сотни тысяч человек по всему миру поддерживают здоровье, красоту, чистоту в доме и укрепляются в своем намерении изменить жизнь к лучшему с помощью инновационных продуктов Coral Club.</p>
            <ul>
              <li>Компания раскрывает новые возможности делового развития для каждого, вне зависимости от национальности, цвета кожи, вероисповедания, возраста и опыта.</li>
              <li>Ежедневно мотивирует людей на совершение практических шагов к улучшению качества своей жизни и своих близких.</li>
              <li>Компания помогает людям чувствовать себя лучше, увереннее и самодостаточнее.</li>
              <li>Компания вдохновляет людей изменять мир к лучшему с заботой об экологии и гармонии.</li>
            </ul>
            <span style="font-weight:600;">ПЕРЕМЕНЫ НАЧИНАЮТСЯ С КАЖДОГО</span>
            <p>Глобальная партнерская сеть, участники которой на ежедневной основе выбирают нашу продукцию, наполняют весь мир уверенностью в том, что вместе мы изменим этот мир к лучшему. При этом каждый из партнеров осознает, что эти изменения возможны лишь, в случае если они начнутся именно с него. Так с помощью маленьких собственных шагов по пути здоровья, красоты и чистоты мы вносим свой вклад в построение лучшего будущего.</p>
            <span style="font-weight:600;">CORAL CLUB В РОССИИ</span>
            <p>На рынке России Coral Club работает с 1998 года. Численность инженеров и технического персонала в России, более 100 человек. Высокий потенциал дальнейшего роста, раскрываемый в России, обеспечил ей одну из приоритетных позиций на географической карте компании. Компания ведет постоянную работу по открытию новых логистических, маркетинговых и обучающих точек в разных уголках страны. Российский филиал компании является членом Российской Ассоциации прямых продаж.</p>
            <p>200 000 дистрибьютеров и лояльных покупателей компании проживают и ведут свою деятельность в России.</p>
            <span style="font-weight:600;">R&D CORAL CLUB</span>
            <p>Осенью 2016 года, следуя по пути развития и укрепления позиции компании инноватора, Coral Club заявил о начале работ по созданию Исследовательского центра на о.Окинава в Японии. Официальное открытие центра запланировано на 2018 год.</p>
            <span style="font-weight:600;">ПРОИЗВОДСТВО CORAL CLUB</span>
            <p>В США, Канаде, Германии, Франции, Японии, Корее и России Coral Club развивает два направления производства: собственное и контрактное.</p>
            <p>Обширные инвестиции в собственное производство позволяют компании обеспечить уверенность дистрибьютеров не только в качестве продукции, но и, что не менее важно, в соблюдении своевременного запуска, логистики и объемов поставок.</p>
            <p>Контрактное производство, предлагаемое Coral Club, осуществляется лидерами рынка, компаниями, которые занимают первые строчки в рейтингах производителей продуктов здорового образа жизни, косметической индустрии и товаров для дома.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- catalog modal -->
  <div id="catalog_m" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="closeModal(this)">&times;</span>
        <h2>Каталог продуктов</h2>
      </div>
      <div class="modal-body">
        <iframe id="catalog_frame" src="./catalog.php" width="100%" height="100%" frameBorder="0" loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <!--end of modal windows section-->
  <!-- scripts -->
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.9/jquery.transit.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script src="scripts/slider.js"></script>
  <script src="scripts/slides.js"></script>
  <script src="scripts/modal.js"></script>
  <script src="scripts/feedback.js" defer></script>
  <script src="scripts/quiz.js" defer></script>
  <script src="scripts/carousel.js" defer></script>
</body>

</html>