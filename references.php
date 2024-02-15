<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Referanslar' clonable='1' dynamic_folders='1' gallery='1' order='4'>


    <cms:editable
            name="gg_image"
            label="Logolar"
            desc="Logo Yükle"
            width="500"
            show_preview='1'
            preview_height='200'
            type="image"
    />

    <cms:editable
            name="gg_thumb"
            assoc_field="gg_image"
            label="Image Thumbnail"
            desc="Thumbnail of image above"
            width='115'
            height='115'
            enforce_max='1'
            type="thumbnail"
    />

</cms:template>
<cms:embed 'header.html' />
<cms:pages masterpage="banner.php">
<section id="about-bg" style="background-image: url(<cms:show refban />)">
    <div class="about-bg-color"></div>
    <div class="container">
        <div class="about-content-row">
            <div class="about-content-logo">
                <img src="assets/img/about-logo-cnt.png">
            </div>
            <div class="about-content-text">
                <h2 class="about-title-text">Hakkımızda</h2>
                <cms:pages masterpage="ayarlar.php">
                <div class="about-desc-text">
                    <cms:show refdesc />
                </div>
                </cms:pages>
            </div>
        </div>
    </div>
</section>
</cms:pages>
<section class="References">
        <div class="container">
            <div class="project-title">
                <div class="project-line"></div>
                <div class="project-text">
                    <h2>Referanslar</h2>
                </div>
            </div>
        </div>

        <div class="References-in flex wrap">
            <cms:pages include_subfolders='0' >
                <div class="References-item">
                    <img src="<cms:show gg_image/>" alt="">
                </div>
            </cms:pages>
        </div>
</section>

    <cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>