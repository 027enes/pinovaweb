<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Ayarlar' order='99' icon='pulse'>

    <cms:editable name="ayarlar"  label="Ayarlar Bilgileri" type='group' order='1' >
        <cms:editable name="refdesc" label='Referanslar Banner Açıklama' type='richtext'  />
        <cms:editable name="hizdesc" label='Hizmetler Banner Açıklama' type='richtext'  />
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
<?php COUCH::invoke(); ?>