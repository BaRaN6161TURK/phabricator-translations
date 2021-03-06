<?php

final class PhabricatorSettingsTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12 saat, 2:34 PM',
      'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Bir revizyon güncellendiğinde, Phabricator eski versiyondaki satır içi yorumları yeni değişikliklere ilerletmeye çalışır. Yorumların bir yerde sabit kalmasını tercih ederseniz bu davranışı devre dışı bırakabilirsiniz.',
      'Default (%s)' => 'Varsayılan (%s)',
      'You haven\'t added any contact numbers to your account.' => 'Hesabınıza hiç kişi numarası eklemediniz.',
      'Conpherence Column Visible' => 'Conpherence Sütunu Görünür',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Bu web tarayıcısı masaüstü bildirimlerini desteklemiyor. Bu tercihten bağımsız olarak, yalnızca tarayıcıya bu tarayıcı için uygulama bildirimleri gönderilir.',
      'Choose Factor Type' => 'Faktör Türünü Seçin',
      'Page Titles' => 'Sayfa Başlıkları',
      'Personal Account Settings' => 'Kişisel Hesap Ayarları',
      'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
      'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have such an editor, Phabricator can generate links that you can click to open files locally.
    These special variables are supported:
    | Value | Replaced With |
    |-------|---------------|
    | `%%f`  | Filename |
    | `%%l`  | Line Number |
    | `%%r`  | Repository Callsign |
    | `%%%%`  | Literal `%%` |
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.' => 'Pek çok metin editörü `editor://` gibi özel protokoller için URI işleyicileri olarak yapılandırılabilir. Böyle bir düzenleyiciniz varsa, Phabricator dosyaları yerel olarak açmak için tıklayabileceğiniz bağlantılar oluşturabilir.
    Bu özel değişkenler desteklenir:
    | Değeri | İle Değiştirildi |
    |-------|---------------|
    | `%%f`  | Dosya Adı |
    | `%%l`  | Satır Numarası |
    | `%%r`  | Depo Çağrı Atama |
    | `%%%%`  | Kelimesi Kelimesine `%%` |
    Editör yapılandırmasıyla ilgili eksiksiz talimatlar için, bkz. **[[ %s | %s ]]**.',
      'Global Default Settings' => 'Genel Varsayılan Ayarlar',
      'Self Actions' => 'Öz Eylemler',
      'Choose which language you would like the Phabricator UI to use.' => 'Fiziksel Özellikleri Kullanıcı Arayüzünün hangi dili kullanmasını istediğinizi seçin.',
      'Email Notifications' => 'E-posta Bildirimleri',
      'Show Unified Diffs' => 'Birleştirilmiş Farkları Göster',
      'Diff Preferences' => 'Farklı Tercihleri',
      'Saturday' => 'Cumartesi',
      'Change Primary Address' => 'Birincil Adresi Değiştir',
      'Send Stamps' => 'Pul Gönder',
      'Show Older Inlines' => 'Daha Eski Satırları Göster',
      'Select the format you prefer for editing dates.' => 'Tarihleri düzenlemek için tercih ettiğiniz formatı seçin.',
      'On Small Screens' => 'Küçük Ekranlarda',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'Bir doğrulama e-postası gönderildi. Adresinizi doğrulamak için e-postadaki bağlantıya tıklayın.',
      'Enable Email Notifications' => 'E-posta Bildirimlerini Etkinleştir',
      'Edit Multiple Files' => 'Birden Çok Dosyayı Düzenleyin',
      'Edit global default settings for all users.' => 'Tüm kullanıcılar için genel varsayılan ayarları düzenleyin.',
      'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => '**"Re:" Öneki** ekle ayarı, yanıt olmasalar bile tüm iletilerin önüne "Re:" ekler. Mac OS X\'te **Mail.app** kullanıyorsanız, bu posta geçirmeyi iyileştirebilir.
    | Ayar                | Örnek Posta Konusu
    |------------------------|----------------
    | "Re:" Önekini Etkinleştir  | `Re: [Differential] [Accepted] D123: Example Revision`
    | "Re:" Önekini Devre Dışı Bırak | `[Differential] [Accepted] D123: Example Revision`',
      'No settings panels are available.' => 'Hiçbir ayar paneli mevcut değil.',
      'Empty string is not a valid setting for "%s".' => 'Boş dize "%s" için geçerli bir ayar değil.',
      'Adjust Timezone' => 'Saat Dilimini Ayarla',
      'Show Filetree' => 'Dosya Ağacını Göster',
      '%s updated her profile' => '%s profilini güncelledi (kadın)',
      'Add Contact Number' => 'İrtibat Numarası Ekleyin',
      'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => '**Değişken Konular** etkin durumdayken, çoğu posta konusu satırı, bir görevi sonlandıran bir kişi hakkında bildirimde bulunmak için içeriğinin kısa bir açıklamasını içerir.
    | Ayar                   | Örnek Posta Konusu
    |------------------------|----------------
    | Değişen Konular        | `[Maniphest] [Closed] T123: Example Task`
    | Konuları Değiştirmeyin | `[Maniphest] T123: Example Task`
    Bu, postayı daha kullanışlı hale getirebilir, ancak bazı istemciler bu mesajları işlerken zorlanırlar. Bu seçeneğin devre dışı bırakılması, konu satırlarını daha az kullanışlı hale getirme pahasına ipliği geliştirebilir.',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => '"%s" değeri "%s" ayarı için geçerli değil: geçerli değerler %s.',
      'You can opt to receive plain text email from Phabricator instead of HTML email. Plain text email works better with some clients.' => 'HTML e-postası yerine Phabricator\'dan düz metin e-posta almayı seçebilirsiniz. Düz metin e-posta bazı müşterilerle daha iyi çalışır.',
      'Extra Settings' => 'Ekstra Ayarlar',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Bu adresi silmek istediğinize emin misiniz? Artık oturum açmak için kullanamazsınız.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Kaynak kodu dahil, monospaced metin gösterilirken kullanılan yazı tipini özelleştirebilirsiniz. `13px Consolas` gibi bir geçerli CSS fontu bildirimi girmelisiniz:',
      'Enable Self Action Mail' => 'Kendi Eylem Postasını Etkinleştir',
      'You haven\'t added any SSH Public Keys.' => 'Herhangi bir SSH Genel Anahtarı eklemediniz.',
      'All Messages' => 'Tüm Mesajlar',
      'This browser has been granted permission to send desktop notifications for this Phabricator instance.' => 'Bu tarayıcıya, bu Phabricator örneği için masaüstü bildirimleri gönderme izni verildi.',
      'Save Preference' => 'Tercihi Kaydet',
      'Email Format' => 'E-posta Formatı',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'Tarayıcınız saat dilimi ve profil saat dilimi şu anda kabul edildi (%s).',
      'Edit Authentication Factor' => 'Kimlik Doğrulama Faktörünü Düzenle',
      'Changing your password will terminate any other outstanding login sessions.' => 'Parolanızı değiştirmek, diğer olağanüstü oturum açma oturumlarını sonlandırır.',
      'You have no linked accounts.' => 'Bağlantılı hesabınız yok.',
      'Active Login Sessions' => 'Aktif Giriş Seansları',
      'Edit Global Settings' => 'Genel Ayarları Düzenle',
      'Ignore Conflict' => 'Çakışmayı Yoksayla',
      'Vary Subjects' => 'Değişen Konular',
      'Delete Authentication Factor' => 'Kimlik Doğrulama Faktörünü Sil',
      '%s updated their profile' => '%s profilini güncelledi (tarafsız cinsiyet)',
      'Current Setting' => 'Şimdiki Ayar',
      'Provider: %s' => 'Sağlayıcı: %s',
      'Use Variable-Width Font' => 'Değişken Genişlik Yazı Tipi Kullan',
      'Use Plain Text: [Differential]' => 'Düz Metin Kullan: [Differential]',
      '⚪ Ignore' => '⚪ Yoksay',
      'Date Format' => 'Tarih Formatı',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => 'Tarayıcınızın saat dilimi (%s), profil saatinizden (%s) farklı. Bu çatışmayı yok sayabilir veya profil ayarınızı müşterinize uyacak şekilde ayarlayabilirsiniz.',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Bu kurulumda yapılandırılmış aktif MFA sağlayıcı yok. Yeni MFA faktörleri ekleyebilmek için en az bir sağlayıcı yapılandırılmalı ve etkin olmalıdır.',
      'Select the format you prefer for editing and displaying time.' => 'Zamanı düzenlemek ve görüntülemek için tercih ettiğiniz formatı seçin.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'Tarayıcınızla profil zaman dilimi ayarları arasındaki uyuşmazlık göz ardı edilir.',
      'Terminate All Sessions' => 'Tüm Oturumları Sonlandır',
      'Your account is linked with all available providers.' => 'Hesabınız tüm mevcut sağlayıcılarla bağlantılı.',
      'Timezone Ignored Offset' => 'Saat Dilimi Ofset Yoksayıldı',
      'External Accounts' => 'Dış Hesaplar',
      'If you disable **Self Actions**, Phabricator will not notify you about actions you take.' => '**Kendi Eylemler**\'i devre dışı bırakırsanız, Phabricator yaptığınız eylemleri size bildirmez.',
      'Verification Email Sent' => 'Doğrulama E-postası Gönderildi',
      'Add External Account' => 'Dış Hesap Ekle',
      'Mail Headers and Body' => 'Posta Başlıkları ve Gövde',
      'You haven\'t added any authentication factors to your account yet.' => 'Henüz hesabınıza herhangi bir kimlik doğrulama faktörü eklemediniz.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Yeni bir şifre ayarlamak için, giriş ekranından bir şifre sıfırlama bağlantısı isteyin ve ardından talimatları izleyin.',
      'Multi-Factor Auth' => 'Çok Faktörlü Kimlik Doğrulama',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'Kullanıcı Arabiriminde textareas\'ta monospaced veya değişken genişlikli bir font kullanmayı seçebilirsiniz. Textareas, diğer şeylerin yanı sıra açıklamaları düzenlemek ve yorum yazmak için kullanılır.',
      'Disable Self Action Mail' => 'Kendinden İşlemli Postayı Devre Dışı Bırak',
      'Filetree Visible' => 'Görünebilir Dosya Ağacı',
      'Grant Permission' => 'İzin Al',
      'Edit Settings Configurations' => 'Ayarları Yapılandırmaları Düzenle',
      'Monospaced Textareas' => 'Monospaced Textareas',
      'Really remove the authentication factor %s from your account?' => '%s kimlik doğrulama faktörü hesabınızdan gerçekten kaldırılsın mı?',
      'Mail Headers' => 'Posta Başlıkları',
      'Old Password' => 'Eski Parola',
      'Conpherence Column Minimize' => 'Conpherence Sütunu Küçült',
      'Display Preferences' => 'Tercihleri Göster',
      'Add Auth Factor' => 'Yetkilendirme Faktörü Ekle',
      'You don\'t have any active sessions.' => 'Etkin oturumunuz yok.',
      'Changes saved.' => 'Değişiklikler kaydedildi.',
      'Authentication factors must have a name to identify them.' => 'Kimlik doğrulama faktörleri, onları tanımlayacak bir isme sahip olmalıdır.',
      'Diffusion Blame' => 'Yayınım Suçla',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'Masaüstü bildirimleri göndermek için izin isteyen iletişim kutusu izin vermeden kapatıldı. Sadece başvuru bildirimleri gönderilecektir.',
      'Really delete address \'%s\'?' => '\'%s\' adresi gerçekten silinsin mi?',
      'Another user already has this email.' => 'Başka bir kullanıcı bu e-postayı zaten aldı.',
      'Change primary email address?' => 'Birincil e-posta adresi değiştirilsin mi?',
      'Monospaced Font' => 'Monospaced Yazı Tipi',
      'HTML Email' => 'HTML E-posta',
      'Global Defaults' => 'Genel Varsayılanlar',
      'Conpherence Sound' => 'Conpherence Sesi',
      'Enable "Re:" Prefix' => '"Re:" Önekini Etkinleştir',
      'Phabricator can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Phabricator, web tarayıcınıza veya masaüstünüze gerçek zamanlı bildirimler gönderebilir. Bu gerçek zamanlı güncellemeleri nereden almak istediğinizi seçin.',
      'Change Timezone' => 'Saat Dilimini Değiştir',
      'DarkConsole Visible' => 'DarkConsole Görünür',
      'DarkConsole is a debugging console for developing and troubleshooting Phabricator applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole, Phabricator uygulamalarını geliştirmek ve sorun gidermeye yönelik bir hata ayıklama konsoludur. DarkConsole\'u etkinleştirdikten sonra, açıp kapatmak için klavyenizdeki {nav `} tuşuna basın.',
      'You are adding too many email addresses to your account too quickly.' => 'Hesabınıza çok hızlı bir şekilde çok fazla e-posta adresi ekliyorsunuz.',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'E-posta ile gönderildiğinde ve bildirildiğinde kişiselleştirmek için **Uygulama Ayarları** ayarını yapabilirsiniz.
    | Ayar | Efekt
    | ------- | -------
    | ;E-posta | Bir e-posta ve bir bildirim alacaksınız, ancak bildirim "oku" olarak işaretlenecek.
    | Bildirim | Sadece okunmamış bir bildirim alacaksınız.
    | Yoksay | Hiçbir şey almayacaksınız.
    Bir güncelleme birkaç değişiklik yaparsa (bir göreve CC\'ler eklemek, onu kapatmak ve bir yorum eklemek gibi), değişikliklerden herhangi birinin iletmek üzere yapılandırıldığı en güçlü bildirimi alırsınız.
    Bu tercihler **sadece** bağlı olduğunuz nesneler için geçerlidir (örneğin, bir gözden geçirici olduğunuz Revizyonlar veya CC’de bulunduğunuz görevler). Başka nesneler oluşturulduğunda e-posta uyarıları almak için, [[ /herald/ | Herald Kuralları ]] yapılandır.',
      'You must enter your current password.' => 'Mevcut şifrenizi girmelisiniz.',
      'Europe: 28-02-2000' => 'Avrupa: 28-02-2000',
      'Enable Filetree' => 'Dosya Ağacı Etkinleştir',
      'The old password you entered is incorrect.' => 'Girdiğiniz eski şifre yanlış.',
      '◐ Notify' => '◐ Bildirim',
      'This browser has denied permission to send desktop notifications for this Phabricator instance. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'Bu tarayıcı, bu Phabricator örneği için masaüstü bildirimleri gönderme iznini reddetti. Bu ayarın nasıl temizleneceğini bulmak için tarayıcı ayarlarınıza / belgelerinize bakın, yapın ve ardından izin vermek için bu sayfayı tekrar ziyaret edin.',
      '%s updated his profile' => '%s profilini güncelledi (erkek)',
      'You can change your date and time preferences in Settings.' => 'Tarih ve saat tercihlerinizi Ayarlar\'dan değiştirebilirsiniz.',
      'Some editors support opening multiple files with a single URI. You can specify the behavior of your editor here.' => 'Bazı editörler, tek bir URI ile birden fazla dosyayı açmayı destekler. Editörünüzün davranışını burada belirleyebilirsiniz.',
      'Timezone Calibrated' => 'Saat Dilimi Kalibre Edildi',
      'Limited Translations' => 'Sınırlı Tercümeler',
      'Email Delivery' => 'E-posta Teslimatı',
      'Send Test Notification' => 'Test Bildirimi Gönder',
      'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'Monospaced font değeri "%s" güvensiz. Yalnızca harfler, sayılar, boşluklar, virgüller, periyotlar, kısa çizgiler, eğik çizgiler ve çift tırnak işaretleri girebilirsiniz.',
      'Edit settings for your personal account.' => 'Kişisel hesabınız için ayarları düzenleyin.',
      'Create Settings' => 'Ayarlar Oluştur',
      'Use Unicode Glyphs: ⚙' => 'Unicode Glifleri Kullan: ⚙',
      'Editor Link' => 'Editör Bağlantısı',
      'Silly Translations' => 'Aptalca Tercümeler',
      'Send Plain Text Email' => 'Düz Metin E-posta Gönder',
      'DarkConsole' => 'DarkConsole',
      'Filetree Width' => 'Dosya Ağacı Genişliği',
      'Phabricator normally shows diffs in a side-by-side layout on large screens and automatically switches to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Phabricator normalde büyük ekranlarda yan yana bir düzende farklılıklar gösterir ve otomatik olarak küçük ekranlarda (cep telefonları gibi) birleşik görünüme geçer. Büyük ekranlarda bile birleştirilmiş farkları tercih ederseniz, bunları tüm ekranlarda kullanmak için seçebilirsiniz.',
      'Supported, Separated by Spaces' => 'Desteklenen, Alanlarla Ayrılmış',
      'Search Scope' => 'Arama Kapsamı',
      'Email Preferences' => 'E-posta Tercihleri',
      'You don\'t have any active tokens.' => 'Aktif jetonunuz yok.',
      'Send another copy of the verification email to %s?' => 'Doğrulama e-postasının başka bir kopyası %s\'ye gönderilsin mi?',
      '24 Hour, 14:34' => '24 saat, 14:34',
      'If you disable **Email Notifications**, Phabricator will never send email to notify you about events. This preference overrides all your other settings.
    //You will still receive some administrative email, like password reset email.//' => '**E-posta Bildirimleri**\'ni devre dışı bırakırsanız, Phabricator etkinlikler hakkında sizi bilgilendirmek için asla e-posta göndermez. Bu tercih, diğer tüm ayarlarınızı geçersiz kılar.
    //Parola sıfırlama e-postası gibi yine bir yönetim e-postası alacaksınız.//',
      'Disable "Re:" Prefix' => '"Re:" Önekini Devre Dışı Bırak',
      'Conpherence Widget Pane Visible' => 'Conpherence Widget Bölmesi Görünür',
      'Disable Filetree' => 'Dosya Ağacı Devre Dışı Bırak',
      'Disable Email Notifications' => 'E-posta Bildirimlerini Devre Dışı Bırak',
      'Phabricator uses unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Phabricator mevcut uygulamanın kompakt bir gösterimini sağlamak için sayfa başlıklarında unicode glifleri kullanır. Bu glifler sisteminizde görüntülenmiyorsa, düz metin yerine kullanabilirsiniz.',
      'Expired' => 'Süresi Doldu',
      'No Notifications' => 'Bildirim Yok',
      'Password Algorithms' => 'Parola Algoritmaları',
      'This browser has not yet granted permission to send desktop notifications for this Phabricator instance.' => 'Bu tarayıcı henüz bu Phabricator örneği için masaüstü bildirimleri gönderme izni vermedi.',
      'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Şifreniz şu anda bu yüklemede bulunmayan bir algoritma kullanılarak şifrelenmiştir.',
      'Send HTML Email' => 'HTML E-postası Gönder',
      'Translation' => 'Çeviri',
      'UTC+%d' => 'UTC+%s',
      'Settings %d' => 'Ayarlar %s',
      'Time Format' => 'Zaman Formatı',
      'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'Masaüstü bildirimleri için izin verilmedi. Sadece başvuru bildirimleri gönderilecektir.',
      'Send Notifications' => 'Bildirimleri Gönder',
      'Number' => 'Sayı',
      'Permanently Linked' => 'Kalıcı Bağlantılı',
      'Account Setup Issues' => 'Hesap Kurulumu Sorunları',
      'Authentication Factors' => 'Kimlik Doğrulama Faktörleri',
      'Web and Desktop' => 'Web ve Masaüstü',
      'Sunday' => 'Pazar',
      'US: 2/28/2000' => 'US: 2/28/2000',
      'User Guide: Configuring an External Editor' => 'Kullanım Kılavuzu: Dış Düzenleyiciyi Yapılandırma',
      'You have no account setup issues.' => 'Hesap kurulum sorunlarınız yok.',
      'Personal Settings' => 'Kişisel Ayarlar',
      'Web Only' => 'Sadece Web',
      'Disable Vary Subjects' => 'Değişen Konuları Devre Dışı Bırak',
      'Developer/Test Translations' => 'Geliştirici/Test Tercümesi',
      'User Preferences' => 'Kullanıcı Tercihleri',
      'No Sounds' => 'Ses Yok',
      'Create Global Defaults' => 'Küresel Varsayılanlar Oluştur',
      'Enable Vary Subjects' => 'Değişen Konuları Etkinleştir',
      'No MFA Providers' => 'MFA Sağlayıcısı Yok',
      'There is no known application setting with key "%s".' => '"%s" anahtarlı bilinen bir uygulama ayarı yok.',
      'Choose the default sound behavior for new Conpherence rooms.' => 'Yeni Conpherence odaları için varsayılan ses davranışını seçin.',
      'Policy Favorites' => 'Politika Sık Kullanılanları',
      'If you have difficulty reading the Phabricator UI, this setting may make Phabricator more accessible.' => 'Phabricator Kullanıcı Arayüzünü okumakta zorluk çekiyorsanız, bu ayar Phabricator\'ı daha erişilebilir hale getirebilir.',
      'Conpherence Notifications' => 'Conpherence Bildirimleri',
      'Friday' => 'Cuma',
      'Timezone "%s" is not a valid timezone identifier.' => '"%s" saat dilimi geçerli bir saat dilimi tanımlayıcısı değil.',
      'Select your local timezone.' => 'Yerel saat diliminizi seçin.',
      'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Not: Bir e-posta adresini hesabınızdan kaldırmak, ödenmemiş parola sıfırlama bağlantılarını geçersiz kılar.',
      'Click "Save Preference" to persist these changes.' => 'Bu değişiklikleri devam ettirmek için "Tercihi Kaydet"i tıklayın.',
      'Week Starts On' => 'Hafta Başlıyor',
      'Remove Factor' => 'Faktörü Kaldır',
      'Editor link has an invalid or missing protocol. You must use a whitelisted editor protocol from this list: %s. To add protocols, update "%s" in Config.' => 'Editör bağlantısında geçersiz veya eksik bir protokol var. Bu listeden beyaz listeye alınmış bir editör protokolü kullanmalısınız: %s. Protokol eklemek için, "%s" yapılandırmasını güncelleyin.',
      'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Hesabınızda şu anda bir şifre ayarlanmamış. Parola sıfırlama işlemini gerçekleştirerek bir şifre seçebilirsiniz.',
      'Disabled (an administrator has disabled login for this account provider).' => 'Devre Dışı (bir yönetici bu hesap sağlayıcı için giriş yapmayı devre dışı bıraktı).',
      'If you change your primary address, Phabricator will send all email to %s.' => 'Birincil adresinizi değiştirirseniz, Phabricator tüm e-postayı %s\'a gönderir.',
      'Send Another Verification Email?' => 'Başka Bir Doğrulama E-postası Gönderilsin mi?',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Algoritma uygulaması eksik olduğundan, şifreniz kullanılamaz veya güncellenemez.',
      'Verify' => 'Onayla',
      'Edit Settings: %s' => 'Ayarları Düzenle: %s',
      'Add "Re:" Prefix' => '"Re:" Öneki Ekle',
      'Desktop Only' => 'Sadece Masaüstü',
      'Account Settings' => 'Hesap Ayarları',
      'Add Authentication Factor' => 'Kimlik Doğrulama Faktörü Ekle',
      'Choose which day a calendar week should begin on.' => 'Bir takvim haftasının hangi günden başlayacağını seçin.',
      'Account Activity Logs' => 'Hesap Etkinlik Günlükleri',
      'Date and Time' => 'Tarih ve Zaman',
      'Use Monospaced Font' => 'Monospaced Yazı Tipini Kullan',
      'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'Saklanan şifrenizin karma değeri arttırılabilir. Her ikisini de yükseltmek için: çıkış yapın ve şifrenizi kullanarak giriş yapın; veya şifrenizi değiştirin.',
      'Save Preferences' => 'Tercihleri Kaydet',
      '⚫ Email' => '⚫ E-posta',
      'New Setting' => 'Yeni ayar',
      'Pronoun' => 'Zamir',
      'Choose the default notification behavior for Conpherence rooms.' => 'Conpherence odaları için varsayılan bildirim davranışını seçin.',
      'DarkConsole Tab' => 'DarkConsole Sekmesi',
      'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Not: Birincil e-posta adresinizi değiştirmek, ödenmemiş parola sıfırlama bağlantılarını geçersiz kılar.',
      'Sessions and Logs' => 'Oturumlar ve Kayıtlar',
      'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Birincil e-posta adresiniz doğrulanmadı. Doğrulayana kadar e-posta alamazsınız.',
      'Pinned Applications' => 'Sabitlenmiş Uygulamalar',
      'Revoke All' => 'Tümünü İptal Et',
      'No settings panel group with key "%s" exists!' => '"%s" anahtarlı ayar paneli grubu mevcut değil!',
      'When viewing a revision or commit, you can enable a sidebar showing affected files. When this option is enabled, press {nav %s} to show or hide the sidebar.' => 'Bir revizyonu veya taahhüdü görüntülerken, etkilenen dosyaları gösteren bir kenar çubuğunu etkinleştirebilirsiniz. Bu seçenek etkinleştirildiğinde, kenar çubuğunu göstermek veya gizlemek için {nav %s} tuşuna basın.',
      'Linked Accounts and Authentication' => 'Bağlı Hesaplar ve Kimlik Doğrulama',
      'UTC-%d' => 'UTC-%s',
      'Choose the pronoun you prefer.' => 'Tercih ettiğiniz zamiri seçin.',
      'Conflict Ignored' => 'İhtilaf Yok Sayıldı',
      'This engine is used to edit settings.' => 'Bu motor ayarları düzenlemek için kullanılır.',
      'Default (Unknown, "%s")' => 'Varsayılan (Bilinmiyor, "%s")',
      'Primary Email Unverified' => 'Birincil E-posta Doğrulanmamış',
      'HiSec' => 'HiSec',
    );
  }

}
