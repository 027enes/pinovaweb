<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Hizmetlerimiz' order='99' icon='pulse'  clonable='1' dynamic_folders='1' folder_masterpage='services-data.php'>
    <cms:config_list_view orderby='weight' order='asc'>
        <cms:field 'k_selector_checkbox' />
        <cms:field 'k_page_title' sortable='0' />
        <cms:field 'k_up_down' />
        <cms:field 'k_actions' />
    </cms:config_list_view>
    <cms:editable name="hizmet"  label="Hizmetlerimiz İçerik Alanı" type='group' order='1' >
        <cms:editable name="hizmetdesc" label='Hizmetlerimiz Açıklama' type='richtext'  />
        <cms:editable name="hizbanres" label='Hizmetlerimiz Banner Resim' type='image'  />
        <cms:editable name="hizkap" label='Hizmetlerimiz Kapak Resim' type='image'  />
        <cms:repeatable  name='hizmets' label='Hizmetlerimiz Görsel Alanı'>
            <cms:editable name="hizgor" label='Hizmetler Göreseller' type='image'  />
        </cms:repeatable>
        <cms:editable  name="hizmetlersli" label="Slider da Göster" desc=""
                       opt_values='Var=0 | Yok=1' opt_selected='1' type='radio'/>
    </cms:editable>


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

    <cms:if k_is_home>
        <section class="services">
            <div class="services-row">

                <cms:folders masterpage='services.php' orderby='weight' order='desc' childof=k_folder_name depth='1' include_custom_fields="1">
                    <div class="services-item" style="background-image: url(<cms:show k_folder_image />)">
                        <div class="services-item-text">
                            <h2><cms:show k_folder_title /></h2>
                            <a href="<cms:show k_folder_link />" class="services-item-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <cms:pages masterpage='contact.php'>
                        <div class="services-rez">
                            <h5>Bilgi & Rezervasyon</h5>
                            <a href="tel:+9<cms:show telefon />"><cms:show telefon /></a>
                        </div>
                        </cms:pages>
                    </div>
                </cms:folders>
            </div>
        </section>
    </cms:if>

    <cms:if k_is_folder>
        <cms:pages masterpage='banner.php'>
        <section id="about-bg" style="background-image: url(<cms:show hizban />)">
            <div class="about-bg-color"></div>
            <div class="container">
                <div class="about-content-row">
                    <div class="about-content-logo">
                        <img src="assets/img/about-logo-cnt.png">
                    </div>
                    <div class="about-content-text">
                        <h2 class="about-title-text"><cms:show k_folder_title /></h2>
                        <div class="about-desc-text">
                            <cms:show hizmetdesc />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </cms:pages>
        <section class="project-content">
            <div class="container">
                <div class="project-title">
                    <div class="project-line"></div>
                    <div class="project-text">
                        <h2>Projeler</h2>
                    </div>
                </div>

                <cms:pages folder=k_folder_name orderby='weight' order='asc'>
                <div class="project-items-row">
                    <div class="project-items">
                        <div class="project-items-img">
                            <img src="<cms:show hizkap/>">
                        </div>
                        <div class="slider-services-text">
                            <h4><cms:show k_page_title /></h4>
                            <div class="slider-services-desc">
                                <cms:show hizmetdesc />
                            </div>
                            <button class="more-button"><a href="<cms:show k_page_link />" class="more-btn">İncele</a></button>
                        </div>
                    </div>
                </div>
                </cms:pages>

            </div>
        </section>

    </cms:if>

    <cms:if k_is_page>
        <section id="about-bg" style="background-image: url(<cms:show hizbanres />)">
            <div class="about-bg-color"></div>
            <div class="container">
                <div class="about-content-row">
                    <div class="about-content-logo">
                        <img src="assets/img/about-logo-cnt.png">
                    </div>
                    <div class="about-content-text">
                        <h2 class="about-title-text"><cms:show k_page_title /></h2>
                        <div class="about-desc-text">
                            <cms:show hizmetdesc />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="project-content">
            <div class="container">
                <div class="project-title">
                    <div class="project-line"></div>
                    <div class="project-text">
                        <h2>Proje Görselleri</h2>
                    </div>
                </div>
                <div class="project-items-row">
                    <cms:show_repeatable 'hizmets'>
                        <div class="project-item">
                            <img src="<cms:show hizgor />" alt="<cms:show k_page_title />">
                        </div>
                    </cms:show_repeatable>
                </div>
            </div>
        </section>
    </cms:if>
    <cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>