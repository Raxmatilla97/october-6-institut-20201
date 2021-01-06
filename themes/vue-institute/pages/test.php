title = "Toshkent viloyati Chirchiq davlat pedagogika instituti."
url = "/"
layout = "default"
is_hidden = 0
role = 0
permission = 0
anonymous_only = 0
logged_only = 0

[viewBag]
localeUrl[en] = "/home"
localeUrl[ru] = "/home"

[staticPage]
useContent = 1
default = 1

[siteSearchInclude]

[searchInput]
useAutoComplete = 0
autoCompleteResultCount = 5
showProviderBadge = 0
searchPage = "search-res.htm"
==
{% component 'siteSearchInclude' %}




<div class="hero-wrap" style="background-image: url('{{'assets/images/img_7061_0.jpg'|theme}}'); background-attachment:fixed;">

    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <h1 class="mb-4" style="left"><b> Toshkent viloyati Chirchiq davlat pedagogika instituti. </b></h1>
                <p><a href="{{'/savol-javob'}}" class="btn btn-primary px-4 py-3">Savollaringiz bormi?</a> <a href="{{'/kutubxona'}}" class="btn btn-secondary px-4 py-3">Elektron kutubxona</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-search-course">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="courseSearch-wrap d-md-flex flex-column-reverse">
                    <div class="full-wrap d-flex ftco-animate">
                        <div class="one-third order-last p-5">
                            <span>Siz bu yerdan maqolalar, yangiliklar, va elektron kitoblarni qidirib topishingiz mumkin.</span>

                            <h3>Siz instut haqida nimadur bilmoqchimisiz?</h3>



                            <form action="{{ searchInput.searchPage | page }}?q={{ query | url_encode(true) }}" class="course-search-form">
                                <div class="form-group d-flex">

                                    <input name="q" type="text" class="form-control" placeholder="Sayt bo'ylab qidiruv....." value="{{ searchInput.query }}"
                                           autocomplete="off"
                                           autofocus
                                           {% if searchInput.useAutoComplete %}
                                           data-track-input
                                           data-request="{{ searchInput }}::onType"
                                           data-request-before-update="document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')"
                                           data-request-update="'{{ searchInput }}::autocomplete': '#autocomplete-results'"
                                           {% endif %}>

                                    <input type="submit" value="Search" class="submit">
                                </div>


                            </form>




                            <p>Sizni biron savol qiziqtiryaptimi? <a href="{{'/savol-javob'}}"> Barcha savollarga bu yerda javob topishingiz mumkin.</a></p>
                        </div>
                        <div class="one-forth order-first img"   style="background-image: url({{ 'assets/images/davlat_ramzlari.jpg'|theme  }}); height: 272px;
  width: 278px;"></a></div>
                    </div>

                    {% partial 'sahifaYangiliklari/yangilik' %}

                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .jumbotron {
        position: relative;
        overflow: hidden;
        background-color:white;
    }
    .jumbotron video {
        position: absolute;
        z-index: 1;
        top: 0;
        width:100%;
        height:100%;
        /*  object-fit is not supported on IE  */
        object-fit: cover;
        opacity:0.5;
    }
    .jumbotron .container {
        z-index: 2;
        position: relative;
    }



    .mover {
        padding: 2em 0;
        position: relative; }
    @media (max-width: 767.98px) {

</style>
<section class="mover" >



    <div class="jumbotron jumbotron-fluid">

        <video autoplay muted loop poster="http://scpi.qnb.uz/storage/app/media/grix%20violet%20svetliy.png">
            <source src="" data-src="https://v.mover.uz/lWs9sCAm_h.mp4" type="video/mp4">
            <!-- <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
            <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg"> -->
        </video>

        <div class="container text-white">

            <h1 class="display-4 "><b><center><color>Pedagogik taʼlimda innovatsion klaster</center></b></h1>

            <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Tanishib chiqish</a> -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.jumbotron -->






</section>

<section class="ftco-section">

    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Institut yangiliklari</h2>
            </div>

        </div>

        <div class="row">
            {% partial 'sahifaYangiliklari/yangilik2_3kalonkali' %}


            <div class="row justify-content-center mt-5">
                <div class="col-md-10 ftco-animate">
                    <p><strong>Barcha yangiliklar bu emas!</strong> Siz quyda ko'rib turgan yangiliklar so'ngi qo'shilgan yangiliklar xisoblanadi, siz yanayam ko'proq yangiliklarni batafsil ko'rishni istasangiz quydagi havolaga bosing.</p>
                    <p><span>Barcha yangiliklar ->></span><a href="http://scpi.qnb.uz/yangiliklar-bolimlari"> To'liq yangiliklar bo'limiga o'tish</a></p>
                </div>
            </div>

        </div>




</section>







<section class="ftco-section-3 img" style="background-image: url({{ 'assets/images/bg_at.jpg'|theme }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-md-9 about-video text-center">
                <h2 class="ftco-animate">Toshkent viloyati Chirchiq pedagogika instituti haqida video lavha!</h2>
                <div class="video d-flex justify-content-center">
                    <a href="https://mover.uz/video/embed/lWs9sCAm/" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section" id="section-counter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="1300">0</strong>
                                <span>ELEKTRON QO`LLANMA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="5896">0</strong>
                                <span>TALABA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="120">0</strong>
                                <span>PEDAGOG</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="3">0</strong>
                                <span>FAKULTET</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section bg-light " style=" padding-top: 0px;">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Institut fakultetlari</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">


                        <div class="img" style="background-image: url(http://scpi.qnb.uz/storage/app/media/11ec67.jpg);"></div>
                        <div class="info ml-4">
                            <h3><a href="http://scpi.qnb.uz/fakultetlarr/pedagogikavapsixologiya">Mardonov Shukurullo Qо‘ldoshevich</a></h3>
                            <span class="position">Dekan</span>
                            <p class="ftco-social d-flex">
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text">
                        <p><b>Pedagogika va psixologiya</b> fakulteti raxbari. </p><p> Ilmiy darajasi:
                            fan doktori. </p> <p>Qabul kunlari: Seshanba - Juma, 14:00 - 17:00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(http://scpi.qnb.uz/storage/app/media/tadjibayev_ikram_uralbayevich3d0f.png);"></div>
                        <div class="info ml-4">
                            <h3><a href="http://scpi.qnb.uz/fakultetlarr/aniqvatabiiyfanlar">Tadjibayev Ikram Uralbayevich</a></h3>
                            <span class="position">Dekan</span>
                            <p class="ftco-social d-flex">
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text">
                        <p><b>Aniq va tabiiy fanlar</b> fakulteti raxbari.</p><p> Ilmiy darajasi:
                            Fizika - matematika fanlari nomzodi.</p><p> Qabul kunlari: Seshanba - Payshanba, 14:00 - 16:00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(http://scpi.qnb.uz/storage/app/media/dsc_0167_copyac0c.jpg); "></div>
                        <div class="info ml-4">
                            <h3><a href="http://scpi.qnb.uz/fakultetlarr/tarixvatillarfakulteti">
                                    Ikramov Ravshan Aktamovich</a></h3>
                            <span class="position">Dekan</span>
                            <p class="ftco-social d-flex">
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
                                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
                            </p>
                        </div>
                    </div>
                    <div class="text">
                        <p><b>Tarix va tillar</b> fakulteti raxbari. </p><p> Ilmiy darajasi:
                            Fan nomzodi.</p><p> Qabul kunlari: Dushanba - Shanba 14:00-17:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Institut faol va iqtidorli talabalari</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="user-img mb-5" style="background-image: url({{ '/storage/app/media/photo_2019-03-02_16-21-10.jpg' }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">1998 yil 14-Yanvar kuni, Jizzax viloyati, Forish tumani, Yarasha QFYda tavallud topgan. Hozirda Toshkent viloyati Chirchiq davlat pedagogika instituti, Tasviriy sa'nat va huhandislik grafikasi yo'nalishida I bosqich talabasi. </p>
                                <p class="name">Tolepova Marjona Fayzulla qizi</p>
                                <span class="position">TSMG-18 - II bosqich talabasi</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="user-img mb-5" style="background-image: url({{ '/storage/app/media/photo_2019-03-02_16-21-20.jpg' }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">1999 yil 05 - Fevral kuni, Qashqadaryo viloyati, Chiroqchi tumani, Ayritom QFYda tavvalud topgan. Hozirda Toshkent viloyati Chirchiq davlat pedagogika instituti, Tasviriy sa'nat va huhandislik grafikasi yo'nalishida I bosqich talabasi. </p>
                                <p class="name">Eshpolatov Doniyor Raxmatilla o'g'li</p>
                                <span class="position">TSMG-18 - II bosqich talabasi</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="user-img mb-5" style="background-image: url({{ '/storage/app/media/photo_2019-03-02_16-21-25.jpg' }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">1995 yil 28 - Avgust kuni, Toshkent viloyati, Qibray tumanida tavvalud topgan. Hozirda Toshkent viloyati Chirchiq davlat pedagogika instituti, Tasviriy sa'nat va huhandislik grafikasi yo'nalishida II bosqich talabasi.</p>
                                <p class="name">Rixsiboyeva Munisa</p>
                                <span class="position">TSMG-18 - II bosqich talabasi</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="user-img mb-5" style="background-image: url({{ '/storage/app/media/photo_2019-03-02_16-52-14.jpg' }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">1999 yil 28 - Aprel kuni, Toshkent viloyati Chirchiq shaxrida tavvalud topgan. Hozirda Toshkent viloyati Chirchiq davlat pedagogika instituti, Tasviriy sa'nat va huhandislik grafikasi yo'nalishida I bosqich talabasi.</p>
                                <p class="name">Tojiddinov Muxriddin Nuriddin o'g'li</p>
                                <span class="position">TSMG-18 - I bosqich talabasi</span>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="user-img mb-5" style="background-image: url({{ '/storage/app/media/photo_2019-03-02_16-52-23.jpg' }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">1998 yil 26 - Oktiyaber kuni, Toshkent viloyati Qibray tumanida tavvalud topgan. Hozirda Toshkent viloyati Chirchiq davlat pedagogika instituti, Tasviriy sa'nat va huhandislik grafikasi yo'nalishida I bosqich talabasi.</p>
                                <p class="name">Tursunboyeva Muxlisa Obid qizi</p>
                                <span class="position">TSMG-18 - I bosqich talabasi</span>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap text-center">
                            <div class="user-img mb-5" style="background-image: url({{ '/storage/app/media/photo_2019-03-02_16-52-18.jpg' }})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                            </div>
                            <div class="text">
                                <p class="mb-5">1998 yil 30 - Sentiyabr kuni, Toshkent viloyati Qibray tumanida tavvalud topgan. Hozirda Toshkent viloyati Chirchiq davlat pedagogika instituti, Tasviriy sa'nat va huhandislik grafikasi yo'nalishida I bosqich talabasi.</p>
                                <p class="name">Azimboyeva Xurshida Nig'matilla qizi</p>
                                <span class="position">TSMG-18 - I bosqich talabasi</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="ftco-freeTrial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center">
                    <div class="free-trial ftco-animate">
                        <h3>Institut bo'yicha savollaringiz bormi?</h3>
                        <p>Unday bo'lsa mahsus savol-javob saytimizga marhamat qiling va u yerga o'z savolingizni qoldiring, talabalar yoki mahsus hodimlar bu savolingizga albatta javob berishadi.</p>
                    </div>
                    <div class="btn-join ftco-animate">
                        <p><a href="{{'/savol-javob/'}}" class="btn btn-primary py-3 px-4">Saytga o'tish!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Institut e'lonlari</h2>
            </div>
        </div>
        <div class="row d-flex">

            {% partial 'sahifaYangiliklari/blog' %}
        </div>
    </div>
</section>




<section class="services">

    {% partial 'interaktiv' %}
</section>




<section class="ftco-section" >
    <div class="container">

        <div class="partner-title"><center><img src="http://img.uz/d/2019/03/5c7a5e540ef06.jpg" alt=""></center></div>
        <style>
            .partner-title{

                text-align: center;
                margin-bottom: -14px;
                position: relative;
                z-index: 2;
            }
            .partner-title img{
                padding: 0 20px;
                width: 250px;

                background-color: #fff;
            }
        </style>


        <h2></h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="http://mrdi.uz/wp-content/uploads/2019/01/art-academy-1.jpg"></div>
            <div class="slide"><img src="http://mrdi.uz/wp-content/uploads/2019/01/eduuz.jpg"></div>
            <div class="slide"><img src="http://mrdi.uz/wp-content/uploads/2019/01/gerb.jpg"></div>
            <div class="slide"><img src="http://mrdi.uz/wp-content/uploads/2019/01/ziyonetuz.jpg"></div>
            <div class="slide"><img src="http://mrdi.uz/wp-content/uploads/2019/01/logo-BEHzoda-1-150x150.png"></div>
            <div class="slide"><img src="http://lengu.ru/img/logo.png"></div>
            <div class="slide"><img src="https://www.pushkin.institute/bitrix/templates/pushkin_main/images/logo2.png"></div>
            <div class="slide"><img src="http://swiu.kz/assets/images/logo/logo_ru.png"></div>
            <div class="slide"><img src="https://kipudn.kz/wp-content/uploads/2018/05/111.jpg"></div>
            <div class="slide"><img src="http://www.ukgu.kz/sites/default/files/public/logo.png"></div>
            <div class="slide"><img src="http://img.uz/d/2019/03/5c7a41258b819.jpg"></div>
            <div class="slide"><img src="{{'/storage/app/media/30.jpg'}}"></div>
            <div class="slide"><img src="{{'/storage/app/media/DSMI.png'}}"></div>
        </section>


    </div>
</section>
<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Instutda yuz berayotgan yangiliklarni pochtangizga yuborilishini istaysizmi?</h2>
                    <p>Quydagi oynada siz o'z email-pochtangizni faollashtirsangiz, sizga harbir yangiliklar pochtangizga yuboriladi.</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Email-manzilingizni kiriting">
                                    <input type="submit" value="Aktivlashtirish" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>