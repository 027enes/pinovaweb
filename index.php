<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Anasayfa' order='1' icon='home'>


    <cms:editable name="page"  label="Seo " type='group' order='5' >
        <cms:editable name="meta_title" label='Sayfa Başlığı' type='text' group='page' />
        <cms:editable name="meta_keywords" label='Meta Keywords - 7-8 kelime, virgül ile ayıralım' type='text' group='page' />
        <cms:editable name="meta_description" label='Meta Açıklaması - 180 kelime en fazla' type='textarea' group='page' />
        <cms:editable type='text' name="og_title" label='Og Başlık'  order='104'/>
        <cms:editable type='text' name="og_description" label='Og Açıklama'   order='105'/>
        <cms:editable type='file' name="og_image" label='Og Resim UR'         order='106'/>
    </cms:editable>
</cms:template>

<cms:embed 'header.html' />

    <section id="h-slider">
        <div class="swiper hSlider">
            <div class="swiper-wrapper">
                <cms:pages masterpage="services.php">
                <cms:if hizmetlersli='0'>
                <div class="swiper-slide" style="background-image: url(<cms:show hizkap />)">
                    <div class="bg"></div>
                    <div class="swiper-slide-text container">
                        <h2 class="swiper-slide-title"><cms:show k_page_title /></h2>
                        <div class="swiper-slide-desc">
                            <cms:show hizmetdesc />
                        </div>
                        <a href="<cms:show k_page_link />" class="btn-31">
                          <span class="text-container">
                            <span class="text">İNCELE</span>
                          </span>
                        </a>
                    </div>
                </div>
                </cms:if>
                </cms:pages>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <cms:pages masterpage="about.php">
    <section id="h-about">
        <div class="h-about-row">
            <div class="h-about-text container">
                <span>PİNOVA</span>
                <h2><cms:show haktit /></h2>
                <img src="assets/img/about-logo.png" class="about-logo">
                <div class="hak-desc">
                    <cms:show haktdesc />
                </div>
                <button class="more-button"><a href="<cms:link masterpage='about.php'/>" class="more-btn">Devamını Oku</a></button>
            </div>
            <div class="h-about-img">
                <img src="<cms:show hakimg />">
            </div>
        </div>
    </section>
    </cms:pages>

    <section id="h-services">
        <div class="container">
            <div class="services-title">
                <h2>Hizmetlerimiz</h2>
                <cms:pages masterpage='ayarlar.php'>
                <div class="services-desc">
                    <cms:show hizdesc />
                </div>
                </cms:pages>
            </div>
            <div class="swiper hServices">
                <div class="swiper-wrapper">
                    <cms:folders masterpage='services.php' orderby='weight' order='asc' folder=k_page_name paginate='1'>
                    <div class="swiper-slide">
                        <div class="slider-services-img">
                            <img src="<cms:show k_folder_image />" alt="">
                        </div>
                        <div class="swiper-bg">
                            <h4><cms:show k_page_title /></h4>
                        </div>
                        <div class="slider-services-text">
                            <h4><cms:show k_folder_title /></h4>
                            <div class="slider-services-desc">
                                <cms:show k_folder_desc />
                            </div>
                            <button class="more-button"><a href="<cms:show k_folder_link />" class="more-btn">İncele</a></button>
                        </div>
                    </div>
                    </cms:folders>
                </div>
                <div class="swiperIcon">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Referanslar-->
    <section id="referans">
        <div class="container">
            <h2 class="reference-title">Referanslarımız</h2>
            <div class="swiper referans">
                <div class="swiper-wrapper">
                    <cms:pages masterpage="references.php" include_subfolders='0' >
                    <div class="swiper-slide">
                        <div class="swip-card">
                            <img src="<cms:show gg_image/>" alt="">
                        </div>
                    </div>
                    </cms:pages>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--Referanslar End-->

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>

