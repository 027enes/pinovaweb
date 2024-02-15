<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Hakkımızda' order='88' icon='pulse'>

    <cms:editable name="hakkimizda"  label="Hakkimizda Bilgileri" type='group' order='1' >
        <cms:editable name="haktit" label='Hakkımızda Başlık' type='text'  />
        <cms:editable name="haktdesc" label='Hakkımızda Açıklama' type='richtext'  />
        <cms:editable name="aboutdesc" label='Hakkımızda Banner Açıklama' type='richtext'  />
        <cms:editable name="hakimg" label='Hakkımızda Resim' type='image'  />
    </cms:editable>

    <cms:editable name="misviz"  label="Hakkimizda Misyonumuz - Vizyonumuz" type='group' order='1' >
        <cms:editable name="mis" label='Hakkımızda Misyonumuz' type='richtext'  />
        <cms:editable name="viz" label='Hakkımızda Vizyonumuz' type='richtext'  />
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
    <cms:pages masterpage="banner.php">
<section id="about-bg" style="background-image: url(<cms:show hakbaner />)">
    <div class="about-bg-color"></div>
    <div class="container">
        <div class="about-content-row ">
            <div class="about-content-logo">
                <img src="assets/img/about-logo-cnt.png">
            </div>
            <div class="about-content-text">
                <h2 class="about-title-text">Hakkımızda</h2>
                <div class="about-desc-text">
                    <cms:show aboutdesc/>
                </div>
            </div>
        </div>
    </div>
</section>
    </cms:pages>

<section id="h-about">
    <div class="h-about-row p-about-mob about-page-row">
        <div class="h-about-text container">
            <span>PİNOVA</span>
            <h2><cms:show haktit /></h2>
            <img src="assets/img/about-logo.png" class="about-logo">
            <cms:show haktdesc />
        </div>
        <div class="h-about-img">
            <img src="<cms:show hakimg />">
        </div>
    </div>
</section>

<section class="about-misviz">
    <div class="container">
        <div class="misviz-row">
            <div class="misviz">
                <div class="misviz-title-row">
                    <div class="misviz-icon">
                        <img src="assets/img/icon-misyon.png">
                    </div>
                    <div class="misviz-title">
                        <h2>Misyonumuz</h2>
                    </div>
                </div>
                <div class="misviz-desc">
                    <p><cms:show mis /></p>
                </div>
            </div>

            <div class="misviz-line"></div>

            <div class="misviz">
                <div class="misviz-title-row">
                    <div class="misviz-icon">
                        <img src="assets/img/icon-vizyon.png">
                    </div>
                    <div class="misviz-title">
                        <h2>Vizyonumuz</h2>
                    </div>
                </div>
                <div class="misviz-desc">
                    <p><cms:show viz /></p>
                </div>
            </div>
        </div>

    </div>
</section>

    <cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>