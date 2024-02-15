<?php

    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

    ///////////EDIT BELOW THIS////////////////////////////////////////

    // Header
    $t['greeting'] = 'Merhaba';
    $t['view_site'] = 'Siteyi Gör';
    $t['logout'] = 'Çıkış';
    $t['javascript_msg'] = 'Tarayıcınız javascript desteklemiyor.';
    $t['add_new'] = 'Yeni';
    $t['add_new_page'] = 'Yeni Sayfa';
    $t['add_new_user'] = 'Yeni Kullanıcı';
    $t['view'] = 'Görüntüle';
    $t['list'] = 'Listele';
    $t['edit'] = 'Düzenle';
    $t['delete'] = 'Sil';
    $t['delete_selected'] = 'Seçilileri Sil';
    $t['advanced_settings'] = 'Gelişmiş Ayarlar';

    // Sidebar
    $t['comment'] = 'Yorum';
    $t['comments'] = 'Yorumlar';
    $t['manage_comments'] = 'Yorum Yönetimi';
    $t['users'] = 'Kullanıcılar';
    $t['manage_users'] = 'Kullanıcı Yönetimi';

    // List pages
    $t['view_all_folders'] = 'Tüm Kategoriler';
    $t['filter'] = 'Filtrele';
    $t['showing'] = 'Göster';
    $t['title'] = 'Başlık';
    $t['folder'] = 'Kategori';
    $t['date'] = 'Tarih';
    $t['actions'] = 'İşlem';
    $t['no_pages_found'] = 'Sayfa bulunamadı';
    $t['published'] = 'Paylaş';
    $t['unpublished'] = 'Paylaşılmadı';
    $t['confirm_delete_page'] = 'Sayfayı silmek istediğinize emin misiniz ?'; // No question mark please
    $t['confirm_delete_selected_pages'] = 'Seçili sayfaları silmek istediğinize emin misiniz?';
    $t['remove_template'] = 'Temayı sil';
    $t['template_missing'] = 'Tema kayıp';
    $t['prev'] = 'Önceki'; // Pagination button
    $t['next'] = 'Sonraki'; // Pagination button

    // Pages
    $t['welcome'] = 'Hoşgeldiniz';
    $t['no_regions_defined'] = 'Düzenlenebilir alan bulunamadı';
    $t['no_templates_defined'] = 'Temalar yönetilemiyor';
    $t['access_level'] = 'Erişim Düzeyi';
    $t['superadmin'] = 'Süper Admin';
    $t['admin'] = 'Administrator';
    $t['authenticated_user_special'] = 'Özel Kullanıcı';
    $t['authenitcated_user'] = 'Giriş yapmış kullanıcı';
    $t['unauthenticated_user'] = 'Herkes';
    $t['allow_comments'] = 'Kullanıcıların yorum yapmasına izin ver';
    $t['status'] = 'Durum';
    $t['name'] = 'İsim';
    $t['title_desc'] = 'Sistem tarafından oluşturulan adı kullanmak için bu alanı boş bırakın';
    $t['required'] = 'gerekli'; // Required field
    $t['required_msg'] = 'Zorunlu alan boş bırakılamaz';
    $t['browse_server'] = 'Sunucuyu gez';
    $t['view_image'] = 'Resmi göster';
    $t['thumb_created_auto'] = 'Otomatik olarak oluşturulacak';
    $t['recreate'] = 'Yeniden oluştur';
    $t['thumb_recreated'] = 'Küçük resim yeniden oluşturuldu';
    $t['crop_from'] = 'Kırpma';
    $t['top_left'] = 'Sol üst';
    $t['top_center'] = 'Üst orta';
    $t['top_right'] = 'Sağ üst';
    $t['middle_left'] = 'Orta sol';
    $t['middle'] = 'Orta';
    $t['middle_right'] = 'Orta sağ';
    $t['bottom_left'] = 'Sol alt';
    $t['bottom_center'] = 'Alt orta';
    $t['bottom_right'] = 'Alt sağ';
    $t['view_thumbnail'] = 'Küçük Resmi Görüntüle';
    $t['field_not_found'] = 'Alan bulunamadı!';
    $t['delete_permanently'] = 'Kalıcı olarak sil?';
    $t['view_code'] = 'Kodu Görüntüle';
    $t['confirm_delete_field'] = 'Bu alanı kalıcı olarak silmek istediğinizden emin misiniz?';
    $t['save'] = 'Kaydet';

    // Comments
    $t['all'] = 'Tümü';
    $t['unapprove'] = 'Onaylamayı iptal et';
    $t['unapproved'] = 'Onaylanmadı';
    $t['approve'] = 'Onayla';
    $t['approved'] = 'Onaylandı';
    $t['select-deselect'] = 'Tümünü Seç/Seçimi Kaldır';
    $t['confirm_delete_comment'] = 'Bu yorumu silmek istediğinizden emin misiniz?';
    $t['confirm_delete_selected_comments'] = 'Seçili yorumları silmek istediğinizden emin misiniz?';
    $t['bulk_action'] = 'Seçilenlerle toplu işlem';
    $t['apply'] = 'Uygula';
    $t['submitted_on'] = 'Gönderildi';
    $t['email'] = 'Email Adres';
    $t['website'] = 'Website';
    $t['duplicate_content'] = 'Yinelenen içerik';
    $t['insufficient_interval'] = 'Yorumlar arasında yeterli aralık yok';

    // Users
    $t['user_name_restrictions'] = 'Yalnızca küçük harflere, sayılara, kısa çizgiye ve alt çizgiye izin verilir';
    $t['display_name'] = 'Görünen isim';
    $t['role'] = 'Rol';
    $t['no_users_found'] = 'Kullanıcı bulunamadı';
    $t['confirm_delete_user'] = 'Kullanıcıyı silmek istediğinizden emin misiniz?'; // No question mark please
    $t['confirm_delete_selected_users'] = 'Seçili kullanıcıları silmek istediğinizden emin misiniz?';
    $t['disabled'] = 'Engelli';
    $t['new_password'] = 'Yeni Şifre';
    $t['new_password_msg'] = 'Şifreyi değiştirmek isterseniz yenisini yazın. Aksi takdirde burayı boş bırakın.';
    $t['repeat_password'] = 'Şifreyi tekrar girin';
    $t['repeat_password_msg'] = 'Yeni şifrenizi tekrar yazın.';
    $t['user_name_exists'] = 'Kullanıcı adı zaten var';
    $t['email_exists'] = 'E-posta adresi zaten var';

    // Login
    $t['user_name'] = 'Kullanıcı adı';
    $t['password'] = 'Şifre';
    $t['login'] = 'Giriş';
    $t['forgot_password'] = 'Şifremi unuttum?';
    $t['prompt_cookies'] = 'Bu CMS yi kullanmak için çerezler etkinleştirilmelidir';
    $t['prompt_username'] = 'Lütfen kullanıcı adınızı girin';
    $t['prompt_password'] = 'Lütfen şifrenizi giriniz';
    $t['invalid_credentials'] = 'Geçersiz kullanıcı adı veya şifre';
    $t['account_disabled'] = 'Hesap Devre Dışı';
    $t['access_denied'] = 'Erişim reddedildi';
    $t['insufficient_privileges'] = 'İstenen sayfayı görüntülemek için yeterli ayrıcalığınız yok. Bu sayfayı görmek için oturumu kapatmanız ve yeterli ayrıcalıklarla oturum açmanız gerekir.';

    // Password recovery
    $t['recovery_prompt'] = 'Lütfen kullanıcı adınızı veya e-posta adresinizi gönderin.<br/>Şifrenizi e-posta ile alacaksınız.';
    $t['name_or_email'] = 'Kullanıcı Adınız veya E-posta Adresiniz';
    $t['submit'] = 'Gönder';
    $t['submit_error'] = 'Lütfen kullanıcı adınızı ya da e-posta adresinizi girin';
    $t['no_such_user'] = 'Böyle bir kullanıcı yok';
    $t['reset_req_email_subject'] = 'Şifre sıfırlama istendi';
    $t['reset_req_email_msg_0'] = 'Aşağıdaki site ve kullanıcı adı için şifrenizi sıfırlamak için bir istek alındı';
    $t['reset_req_email_msg_1'] = 'Talebin sizin tarafınızdan yapıldığını doğrulamak için lütfen aşağıdaki adresi ziyaret edin, aksi halde bu e-postayı dikkate almayın.';
    $t['email_failed'] = 'E-posta gönderilemedi';
    $t['reset_req_email_confirm'] = 'Size bir onay e-postası gönderildi.<br/>Lütfen e-posta gelen kutunuzu kontrol edin.';
    $t['invalid_key'] = 'Geçersiz anahtar';
    $t['reset_email_subject'] = 'Yeni parolanız';
    $t['reset_email_msg_0'] = 'Aşağıdaki site ve kullanıcı adı için şifreniz sıfırlandı';
    $t['reset_email_msg_1'] = 'Giriş yaptıktan sonra şifrenizi değiştirebilirsiniz.';
    $t['reset_email_confirm'] = 'Şifreniz sıfırlandı.<br/>Lütfen yeni şifre için e-postanızı kontrol edin.';

    // Maintenance Mode
    $t['back_soon'] = '<h2>Bakım Modu</h2><p>Rahatsızlık için özür dilerim.<br/>Web sitemiz şu anda planlı bakımdan geçiyor.<br/><b>Lütfen bir süre sonra tekrar deneyin.</b></p>';


    // Addendum to Version 1.1 /////////////////////////////////////
    // Admin Panel
    $t['admin_panel'] = 'Yönetim Paneli';
    $t['login_title'] = 'Sistem Yönetimi';

    // Folders
    $t['no_folders'] = 'Tanımlanmış kategori yok';
    $t['select_folder'] = 'Kategori Seç';
    $t['folders'] = 'Kategoriler';
    $t['manage_folders'] = 'Kategorileri Yönet';
    $t['add_new_folder'] = 'Yeni bir kategori ekle';
    $t['parent_folder'] = 'Ana Kategori';
    $t['weight'] = 'Ağırlık';
    $t['weight_desc'] = 'Değer ne kadar yüksekse, alt kategori listede görünecektir. Negatif olarak ayarlanabilir.';
    $t['desc'] = 'Tanım';
    $t['image'] = 'Resim';
    $t['cannot_be_own_parent'] = 'Kendi ebeveyni olamaz';
    $t['name_already_exists'] = 'Bu isim zaten var';
    $t['pages'] = 'Sayfalar';
    $t['none'] = 'Hiçbiri';
    $t['confirm_delete_folder'] = 'Klasörü silmek istediğinizden emin misiniz?'; // No question mark please
    $t['confirm_delete_selected_folders'] = 'Seçili klasörleri silmek istediğinizden emin misiniz?';

    // Drafts
    $t['draft_caps'] = 'TASLAK'; // Upper case
    $t['draft'] = 'Taslak';
    $t['drafts'] = 'Taslaklar';
    $t['create_draft'] = 'Taslak oluştur';
    $t['create_draft_msg'] = 'Bu sayfanın bir kopyasını oluşturun (değişiklikleri kaydettikten sonra)';
    $t['manage_drafts'] = 'Taslakları Yönet'; // Plural
    $t['update_original'] = 'Orijinali Güncelle';
    $t['update_original_msg'] = 'Bu taslağın içeriğini orijinal sayfaya kopyalayın (ve taslağı silin)';
    $t['recreate_original'] = 'Orijinali Yeniden Oluştur';
    $t['no_drafts_found'] = 'Taslak bulunamadı';
    $t['original_page'] = 'Orijinal Sayfa';
    $t['template'] = 'Tema/Şablon';
    $t['modified'] = 'Değiştirilmiş'; // Date of last modification
    $t['preview'] = 'Ön izleme';
    $t['confirm_delete_draft'] = 'Bu taslağı silmek istediğinizden emin misiniz?'; // No question mark please
    $t['confirm_delete_selected_drafts'] = 'Seçili taslakları silmek istediğinizden emin misiniz?';
    $t['confirm_apply_selected_drafts'] = 'Seçili taslakları uygulamak istediğinizden emin misiniz?';
    $t['view_all_drafts'] = 'Tüm taslakları görüntüle';
    $t['original_deleted'] = 'ORİJİNAL SİLİNDİ'; // Upper case

    // Addendum to Version 1.2 /////////////////////////////////////
    // Nested Pages
    $t['parent_page'] = 'Üst sayfa';
    $t['page_weight_desc'] = 'Değer ne kadar yüksekse, sayfa aşağıda listede görünecektir. Negatif olarak ayarlanabilir.';
    $t['active'] = 'Aktif';
    $t['inactive'] = 'Etkin değil';
    $t['menu'] = 'Menü';
    $t['menu_text'] = 'Menü Metni';
    $t['show_in_menu'] = 'Menüde göster';
    $t['not_shown_in_menu'] = 'Menüde gösterilmiyor';
    $t['leave_empty'] = 'Sayfa başlığını kullanmak için boş bırakın';
    $t['menu_link'] = 'Menü Link';
    $t['link_url'] = 'Bu sayfa aşağıdaki konuma işaret ediyor';
    $t['link_url_desc'] = 'Boş bırakılabilir';
    $t['separate_window'] = 'Ayrı pencerede aç';
    $t['pointer_page'] = 'İşaretçi Sayfası';
    $t['points_to_another_page'] = 'Başka bir sayfaya işaret ediyor';
    $t['points_to'] = 'Noktalar';
    $t['redirects'] = 'Yönlendirmeler';
    $t['masquerades'] = 'Sahta tavır';
    $t['strict_matching'] = 'Bu bağlantının altındaki tüm sayfalar için menüde seçili olarak işaretle';
    $t['up'] = 'Yukarı taşı';
    $t['down'] = 'Aşağı taşı';
    $t['remove_template_completely'] = 'Tamamen kaldırmak için bu şablonun tüm sayfalarını ve taslaklarını silin';
    $t['remove_uncloned_template_completely'] = 'Tamamen kaldırmak için bu şablonun tüm taslaklarını silin';

    // Addendum to Version 1.2.5 /////////////////////////////////////
    // Gallery
    $t['bulk_upload'] = 'Yükle';
    $t['folder_empty'] = 'Bu klasör boş. Resim eklemek için lütfen yukarıdaki yükle düğmesini kullanın.';
    $t['root'] = 'Kök';
    $t['item'] = 'Resim'; // Single
    $t['items'] = 'Resimler'; // Multiple
    $t['container'] = 'Klasör'; // Single
    $t['containers'] = 'Klasörler'; // Multiple

    //
    $t['columns_missing'] = 'Bazı sütunlar eksik!';
    $t['confirm_delete_columns'] = 'Eksik sütunları kalıcı olarak silmek istediğinizden emin misiniz?';
    $t['add_row'] = 'Satır Ekle';

    // 2.0
    $t['left'] = 'Sola taşı';
    $t['right'] = 'Sağa taşı';
    $t['crop'] = 'Kırp';
    $t['menu_templates'] = 'Temalar';
    $t['menu_modules'] = 'Administration';
    $t['cancel'] = 'Kapat';
    $t['selected'] = 'Seçili';
    $t['add'] = 'Ekle';
    $t['remove'] = 'Kaldır';
    // 2.1
    $t['tiles_missing'] = 'Bazı yapı taşı eksik';
    $t['confirm_delete_tiles'] = 'Eksik yapıtaşlarını kalıcı olarak silmek istediğinizden emin misiniz?';
    $t['add_above'] = 'Yukarıya Ekle';
    $t['confirm_delete_row'] = 'Bu satırı sil?';
    $t['no_data_message'] = '- Veri yok -';
    $t['ok'] = 'TAMAM';
    $t['globals'] = 'Globaller';
    $t['manage_globals'] = 'Globalleri Yönet';
    $t['bulk_action_with_selected'] = 'Seçilenlerle toplu işlem';
    $t['month01'] = 'Ocak';
    $t['month02'] = 'Şubat';
    $t['month03'] = 'Mart';
    $t['month04'] = 'Nisan';
    $t['month05'] = 'Mayıs';
    $t['month06'] = 'Haziran';
    $t['month07'] = 'Temmuz';
    $t['month08'] = 'Ağustos';
    $t['month09'] = 'Eylül';
    $t['month10'] = 'Ekim';
    $t['month11'] = 'Kasım';
    $t['month12'] = 'Aralık';
