<?php

final class PhabricatorPholioTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'This mock will be closed.' => 'Bu sahte kapanacak.',
      'This image will be removed from the mock.' => 'Bu görüntü sahteden kaldırılacak.',
      '%s replaced %s with %s.' => '%s, %s\'i %s ile değiştirdi.',
      'Edit Mock: %s' => 'Sahte Düzenle: %s',
      'View Mock' => 'Sahte Görüntüle',
      'Review Mocks and Design' => 'Sahteler ve Tasarım İncele',
      '%s added %d image(s): %s.' => '%s, %s resim ekledi: %s.',
      'Close Mock' => 'Sahteyi Kapat',
      '%s closed mock %s.' => '%s, %s sahteyi kapattı.',
      'A mock\'s status changes.' => 'Bir sahtenin durumu değişir.',
      'Open Mocks' => 'Sahteleri Aç',
      'No image attached!' => 'Resim eklenmedi!',
      '%s closed this mock.' => '%s bu sahteyi kapattı.',
      '%s removed %s task(s) for %s: %s.' => '%s, %3$s için %2$s görevini kaldırdı: %s.',
      '%s created this mock.' => '%s bu sahteyi oluşturdu',
      'Pholio Mocks' => 'Pholio Sahteleri',
      '%s removed %d image(s): %s.' => '%s, %s resim kaldırdı: %s.',
      '%s edited task(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s görev düzenlendi, %s ekledi: %s; %s kaldırıldı: %s.',
      'Undo' => 'Geri Al',
      'React to mocks being created or updated.' => 'Oluşturulan veya güncellenen sahtelere tepki verin.',
      'Image ("%s") does not specify which image it replaces.' => 'Resim ("%s") hangi resmin yerini alacağını belirtmiyor.',
      'Upload sets of images for review with revision history and inline comments.' => 'Gözden geçirme geçmişi ve satır içi yorumlarla inceleme için resim setleri yükleyin.',
      'Pholio' => 'Pholio',
      'Image ("%s") belongs to the wrong object ("%s", expected "%s").' => 'Resim ("%s") yanlış nesneye ait ("%s", "%s" bekleniyor).',
      '%s updated the mock\'s description.' => '%s, sahte tanımını güncelledi.',
      '%s updated image descriptions of %s.' => '%s, %s\'in görüntü tanımlarını güncelledi.',
      'File is not viewable.' => 'Dosya görüntülenemez.',
      'Edit Inline Comment' => 'Satır İçi Yorumu Düzenle',
      '%s added an inline comment to %s.' => '%s, %s\'e satır içi yorum ekledi.',
      'You can not query for inline comments without also querying for images.' => 'Resimler için sorgulamadan satır içi yorumları sorgulayamazsınız.',
      'Someone comments on a mock.' => 'Biri sahte hakkında yorum yapıyor.',
      'Uploading Image...' => 'Resim Yükleniyor...',
      'History Beckons' => 'İşaret Geçmişi',
      'Mock Fields' => 'Sahte Alanlar',
      'Pholio Mock' => 'Pholio Sahtesi',
      'Open Pholio Mock' => 'Pholio Sahteyi Aç',
      'Create Mock' => 'Sahte Oluştur',
      'All Mocks' => 'Tüm Sahteler',
      'Click here, or drag and drop images to add them to the mock.' => 'Buraya tıklayın veya görüntüleri sahteye eklemek için sürükleyip bırakın.',
      'A mock\'s owner can always view and edit it.' => 'Sahte sahibinin sahibi her zaman görüntüleyebilir ve düzenleyebilir.',
      'Interacting with Pholio Mocks' => 'Pholio Sahteler ile etkileşime girme',
      'Upload Complete...' => 'Yükleme Tamamlandı...',
      'Things before they were cool.' => 'Her şey yolunda gitmeden önce.',
      'Current Revision' => 'Güncel Revizyon',
      '[Pholio]' => '[Pholio]',
      'New Inline Comment' => 'Yeni Satır İçi Yorum',
      '%s opened mock %s.' => '%s, %s sahte açtı.',
      'Mock Description' => 'Sahte Açıklaması',
      '%s edited task(s), added %s: %s; removed %s: %s.' => '%s görevi düzenlendi, %s ekledi: %s; %s kaldırıldı: %s.',
      '%s updated an image\'s (%s) description.' => '%s, bir resmin (%s) açıklamasını güncelledi.',
      'Open Mock' => 'Sahte Aç',
      'Replaced image ("%s") belongs to the wrong mock ("%s", expected "%s").' => 'Değiştirilen resim ("%s") yanlış sahteye ait ("%s", "%s" bekleniyor).',
      'Other mock activity not listed above occurs.' => 'Yukarıda listelenmeyen diğer ahtes etkinliği gerçekleşir.',
      'MOCK DETAIL' => 'SAHTE DETAYI',
      '%s opened this mock.' => '%s bu sahteyi açtı.',
      'Mock History' => 'Sahte Geçmişi',
      'Email Commands: Mocks' => 'E-posta Komutları: Sahteler',
      'No image exists with PHID "%s".' => 'PHID "%s" ile hiçbir resim yok.',
      '%s renamed an image (%s) from %s to %s.' => '%s, %3$s ile %4$s arası bir görüntüyü (%2$s) yeniden adlandırdı.',
      '%s updated an image\'s (%s) sequence.' => '%s, bir resmin (%s) sırasını güncelledi.',
      '%s updated image sequence of %s.' => '%s, %s görüntü dizisini güncelledi.',
      '%s added inline comment(s).' => '%s satır içi yorum ekledi.',
      'Mock image names must not be longer than %s character(s).' => 'Sahte görüntü adları %s karakterden uzun olmamalıdır.',
      'Unknown (ID %d)' => 'Bilinmiyor (Kod %s)',
      'Edit Mock' => 'Sahte Düzenle',
      'By %s on %s' => '%s\'den %s\'e göre',
      'Mocks must have a name.' => 'Sahteler bir isim olmalı.',
      'Image "%s":' => 'Resim "%s":',
      'Close Pholio Mock' => 'Pholio Sahteyi Kapat',
      '%s updated images of %s.' => '%s, %s\'in resimleri güncelledi',
      '%s added %s task(s) for %s: %s.' => '%s, %3$s için %2$s görev ekledi: %s.',
      'You must add at least one image to the mock.' => 'Sahte en az bir resim eklemelisiniz.',
      'This page documents the commands you can use to interact with mocks in Pholio.' => 'Bu sayfa Pholio\'daki sahte cihazlarla etkileşimde bulunmak için kullanabileceğiniz komutları belgeler.',
      'Unable to load replacement image ("%s"): %s' => 'Yedek resim yüklenemiyor ("%s"): %s',
      '%s renamed this mock from %s to %s.' => '%s bu sahteyi %s\'ye %s\'e değiştirdi.',
      'Test rules which run when a mock is created or updated.' => 'Bir sahte oluşturulduğunda veya güncellendiğinde çalışan test kuralları.',
      'Inline Comment' => 'Satır İçi Yorum',
      'Mock names must not be longer than %s character(s).' => 'Sahte isimler, %s karakterden uzun olmamalıdır.',
      '%s updated the image names of %s.' => '%s, %s\'in resim adlarını güncelledi.',
      'Unable to load replaced image ("%s"): %s' => 'Değiştirilen resim yüklenemiyor ("%s"): %s',
      'This mock will become open again.' => 'Bu sahte yine açılacaktır.',
      'Create a Mock' => 'Bir Sahte Oluştur',
      '%s edited image(s), added %d: %s; removed %d: %s.' => '%s resim düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
      'Mock images or descriptions change.' => 'Sahte görüntüler veya açıklamaları değiştirin.',
    );
  }

}