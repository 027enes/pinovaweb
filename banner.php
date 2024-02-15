<?php require_once( 'panel/cms.php' ); ?>
<cms:template title='Banner' order='99' icon='pulse'>
    <cms:editable name="hizmet"  label="Hizmetlerimiz İçerik Alanı" type='group' order='1' >
        <cms:editable name="refban" label='Referanslar Banner' type='image'  />
        <cms:editable name="hizban" label='Hizmetlerimiz Banner' type='image'  />
        <cms:editable name="hakbaner" label='Hakkımızda Banner' type='image'  />
        <cms:editable name="conban" label='İletişim Banner' type='image'  />
    </cms:editable>


</cms:template>

<?php COUCH::invoke(); ?>