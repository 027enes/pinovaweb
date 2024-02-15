<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='İletisim' order='99' icon='pulse'>

    <cms:editable name="iletisimbilgileri"  label="İletişim Bilgileri" type='group' order='1' >
        <cms:editable name="adres" label='Adres' type='text'  />
        <cms:editable name="telefon" label='Telefon1' type='text'  />
        <cms:editable name="telefonn" label='Telefon2' type='text'  />
        <cms:editable name="email" label='E-mail' type='text'  />
        <cms:editable name="iframe" label='Iframe' type='text'  desc="Src Kodu Giriniz" />
        <cms:editable name="iletdesc" label='İletişim Banner Açıklama' type='richtext'  />
    </cms:editable>

    <cms:editable name="sosyalmedya"  label="Sosyal Medya" type='group' order='2' >
        <cms:repeatable  name='socials' label='Sosyal Medya'>
            <cms:editable name="socnam" label='Sosyal Medya İsmi' desc="Facebook" type='text'  />
            <cms:editable name="soclinks" label='Sosyal Medya Link' type='text'  />
        </cms:repeatable>
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
<section id="about-bg" style="background-image: url(<cms:show conban />)">
    <div class="about-bg-color"></div>
    <div class="container">
        <div class="about-content-row">
            <div class="about-content-logo">
                <img src="assets/img/about-logo-cnt.png">
            </div>
            <div class="about-content-text">
                <h2 class="about-title-text">İletişim</h2>
                <div class="about-desc-text">
                    <cms:show iletdesc />
                </div>

            </div>
        </div>
    </div>
</section>
</cms:pages>

<section id="contact-content">
    <div class="contacts-row">
        <div class="contact-form-content">
        <div class="contact-bilgiler">
            <h2 class="contact-title">İletişim Bilgilerimiz</h2>
            <div class="contact-address-text">
                <h4>Adres:</h4>
                <p><cms:show adres/></p>
            </div>
            <div class="contact-address-text">
                <h4>Telefon:</h4>
                <div class="contact-phone-row">
                    <a href="tel:<cms:show 'telefon' />"><cms:show telefon /></a>
                    <cms:if 'telefonn'>
                    <span>-</span>
                    <a href="tel:<cms:show 'telefonn' />"><cms:show telefonn /></a>
                    </cms:if>
                </div>
            </div>
            <div class="contact-address-text">
                <h4>E-mail:</h4>
                <a href="mailto:<cms:show email />"><cms:show email /></a>
            </div>
        </div>

        <form class="form-contact">
            <h3 class="form-content-title">İletişim Formu</h3>
            <div class="form-contact-row">
                <div class="form-contact-input">
                    <input type="text" placeholder="İsim - Soyisim" required>
                </div>
                <div class="form-contact-input">
                    <input type="text" placeholder="Telefon" required>
                </div>
                <div class="form-contact-input">
                    <input type="text" placeholder="E-mail" required>
                </div>
            </div>
            <div class="form-content-texterea">
                <textarea id="message" name="message" rows="4" cols="3" placeholder="Mesajınız"></textarea>
            </div>
            <button type="submit" class="form-btn">Gönder</button>
        </form>

    </div>
        <div class="maps">
            <iframe src="<cms:show iframe />" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

    <cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>