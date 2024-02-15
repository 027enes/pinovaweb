<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Ürün Kategori Ek Verileri' clonable='1' hidden='1' order="99999">
    <cms:editable name="datahiz" label="Hizmetlerimiz Ekveri" desc='' type='group' order='1' >
    <cms:editable name="datatit" label='Hizmetlerimiz Başlık' type='text'  />
    <cms:editable name="datadesc" label='Hizmetlerimiz Açıklama' type='richtext'  />
    <cms:editable name="datares" label='Hizmetlerimiz Kapak Resim' type='image'  />
    </cms:editable>
</cms:template>

<?php COUCH::invoke(); ?>