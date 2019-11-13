<?php

final class PhabricatorPackagesTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Once a publisher is created, its key can not be changed.' => 'Bir yayıncı oluşturulduktan sonra, anahtarı değiştirilemez.',
      'No publishers found.' => 'Yayıncı bulunamadı.',
      'Package name "%s" is not valid: package names must not be more than %s characters long.' => '"%s" paket ismi geçerli değil: paket isimleri %s karakterden uzun olmamalıdır.',
      'Package Key' => 'Paket Anahtarı',
      'Publishers' => 'Yayıncılar',
      'Package key "%s" is not valid: package keys may only contain lowercase latin letters.' => '"%s" paket anahtarı geçerli değil: paket anahtarları sadece küçük harfli harfler içerebilir.',
      'Package Packages' => 'Paket Paketleri',
      'Apply transactions to create a new publisher or edit an existing one.' => 'Yeni bir yayıncı oluşturmak veya işlemleri düzenlemek için işlemleri uygulayın.',
      'Package Publisher' => 'Paket Yayıncısı',
      'Read information about versions.' => 'Sürümleri hakkında bilgi okuyun.',
      '%s changed the name of this version from %s to %s.' => '%s bu sürümün adını %s\'den %s\'e değiştirdi.',
      'Can Create Publishers' => 'Yayıncı Oluşturabilir',
      'Default Publisher Edit Policy' => 'Varsayılan Yayıncı Düzenleme Politikası',
      '%s created this package.' => '%s bu paketi oluşturdu.',
      'Browse Package Publishers' => 'Paket Yayıncılarına Göz At',
      'Publisher name "%s" is not valid: publisher names are required.' => 'Yayıncı adı "%s" geçerli değil: yayıncı adları gerekli.',
      'Version name "%s" is not valid: version names are required.' => 'Sürüm adı "%s" geçerli değil: sürüm adları gerekli.',
      'Edit Version' => 'Sürümü Düzenle',
      'Edit Package Publisher Configurations' => 'Paket Yayıncı Yapılandırmalarını Düzenle',
      'Search for versions by package.' => 'Sürümleri pakete göre arayın.',
      'Edit Package Version Configurations' => 'Paket Sürüm Yapılandırmaları Düzenle',
      'The package key "%s" is already in use by another package provided by this publisher.' => '"%s" paket anahtarı zaten bu yayıncı tarafından sağlanan başka bir paket tarafından kullanılıyor.',
      'Unique key to identify the package.' => 'Paketi tanımlamak için benzersiz bir anahtar.',
      'Search for publishers by name substring.' => 'Ad alt dizgisine göre yayıncıları arayın.',
      'Publish Software' => 'Yazılım Yayınla',
      'Default edit policy for newly created publishers.' => 'Yeni oluşturulan yayıncılar için varsayılan düzenleme politikası.',
      'All Versions' => 'Tüm Sürümler',
      'Version name "%s" is not valid: version names may not start or end with a period or hyphen.' => '"%s" sürüm adı geçerli değil: sürüm adları nokta veya kısa çizgi ile başlayamaz veya bitmeyebilir.',
      'This engine is used to edit Packages versions.' => 'Bu motor, Paket sürümlerini düzenlemek için kullanılır.',
      'Search for packages by name substring.' => 'Paketleri isim alt dizgisine göre arayın.',
      'Publisher key "%s" is not valid: publisher keys must not be more than %s characters long.' => 'Yayıncı anahtarı "%s" geçerli değil: yayıncı anahtarları %s\'den fazla karakter olmamalıdır.',
      'The version "%s" already exists for this package. Each version must have a unique name.' => 'Bu paket için "%s" sürümü zaten var. Her sürümün benzersiz bir adı olmalıdır.',
      'You do not have permission to create publishers.' => 'Yayıncı oluşturma izniniz yok.',
      '%s created this publisher.' => '%s bu yayıncıyı oluşturdu.',
      'This engine is used to edit Packages publishers.' => 'Bu motor, Paket yayıncılarını düzenlemek için kullanılır.',
      'Publisher' => 'Yayıncı',
      'Publisher "%s" is invalid: the publisher must exist and you must have permission to edit it in order to create a new package.' => '"%s" yayıncısı geçersiz: yayıncı mevcut olmalı ve yeni bir paket oluşturmak için düzenleme iznine sahip olmalısınız.',
      'The publisher key "%s" is already in use by another publisher.' => '"%s" yayıncı anahtarı başka bir yayıncı tarafından zaten kullanılıyor.',
      'Package Publishers' => 'Paket Yayıncıları',
      'Name of the publisher.' => 'Yayıncının adı.',
      'Applications and Extensions' => 'Uygulamalar ve Uzantılar',
      'Packages must have a name.' => 'Paketlerin bir adı olmalı.',
      'Edit Version: %s' => 'Sürümü Düzenle: %s',
      'Publisher for this package.' => 'Bu paket için yayıncı.',
      'Publishers must have a name.' => 'Yayıncıların bir adı olmalıdır.',
      'Package name "%s" is not valid: package names are required.' => 'Paket adı "%s" geçerli değil: paket adları gerekli.',
      'Package key "%s" is not valid: package keys must not be more than %s characters long.' => '"%s" paket anahtarı geçerli değil: paket anahtarları en az %s karakter uzunluğunda olmamalıdır.',
      'Publisher key "%s" is not valid: publisher keys may only contain lowercase latin letters.' => 'Yayıncı anahtarı "%s" geçerli değil: yayıncı anahtarları yalnızca küçük latin harfleri içerebilir.',
      'This engine is used to edit Packages packages.' => 'Bu motor, Paketleri düzenlemek için kullanılır.',
      'You must select a package when creating a version' => 'Sürüm oluştururken bir paket seçmelisiniz',
      'The unique key of the publisher.' => 'Yayıncının benzersiz anahtarı.',
      'Create Version' => 'Sürüm Oluştur',
      '%s updated the name for %s from %s to %s.' => '%s, adı %s için %s\'den %s\'e güncelledi.',
      'Version name "%s" is not valid: version names must not be more than %s characters long.' => '"%s" sürüm adı geçerli değil: sürüm adları %s karakterden uzun olmamalıdır.',
      'Unique key to identify the publisher.' => 'Yayıncıyı tanımlamak için benzersiz bir anahtar.',
      'Search for versions by name substring.' => 'Adı alt dize göre sürümleri arayın.',
      'Apply transactions to create a new package or edit an existing one.' => 'Yeni bir paket oluşturmak veya mevcut bir tane düzenlemek için işlemleri uygulayın.',
      'No versions found.' => 'Sürüm bulunamadı.',
      'Default Package Edit Policy' => 'Varsayılan Paket Düzenleme Politikası',
      'Package "%s" is invalid: the package must exist and you must have permission to edit it in order to create a new package.' => '"%s" paketi geçersiz: paket mevcut olmalı ve yeni bir paket oluşturmak için düzenleme iznine sahip olmalısınız.',
      'Versions must have a name.' => 'Sürümlerin bir adı olmalı.',
      'Version name "%s" is not valid: version names may only contain latin letters, digits, periods, and hyphens.' => '"%s" sürüm adı geçerli değil: sürüm adları yalnızca latin harfleri, rakamları, periyotları ve kısa çizgileri içerebilir.',
      'Publisher Key' => 'Yayıncı Anahtarı',
      'Create Publisher' => 'Yayıncı Oluştur',
      'Package for this version.' => 'Bu sürüm için paket.',
      'Read information about publishers.' => 'Yayıncılarla ilgili bilgileri okuyun.',
      'Package key "%s" is not valid: package keys are required.' => '"%s" paket anahtarı geçerli değil: paket anahtarları gerekli.',
      'Apply transactions to create a new version or edit an existing one.' => 'Yeni bir sürüm oluşturmak için işlemleri uygulayın veya mevcut olanı düzenleyin.',
      'Once a package is created, its publisher can not be changed.' => 'Bir paket oluşturulduktan sonra yayıncısı değiştirilemez.',
      'Publishers must have a unique publisher key.' => 'Yayıncıların benzersiz bir yayıncı anahtarı olması gerekir.',
      'Publisher key "%s" is not valid: publisher keys are required.' => 'Yayıncı anahtarı "%s" geçerli değil: yayıncı anahtarı gerekiyor.',
      'Edit Publisher: %s' => 'Yayıncıyı Düzenle: %s',
      'Publisher name "%s" is not valid: publisher names must not be more than %s characters long.' => 'Yayıncı adı "%s" geçerli değil: yayıncı adları %s\'den fazla karakter olmamalıdır.',
      'Name of the version.' => 'Sürümün adı.',
      'The name of the version.' => 'Sürümün adı.',
      '%s changed the name of this publisher from %s to %s.' => '%s, bu yayıncının adını %s\'den %s\'e değiştirdi.',
      'Package Versions' => 'Paket Sürümleri',
      'You must select a publisher when creating a package.' => 'Paket oluştururken bir yayıncı seçmelisiniz.',
      '%s changed the name of this package from %s to %s.' => '%s bu paketin adını %s\'den %s\'e değiştirdi.',
      'All Publishers' => 'Tüm Yayıncılar',
      'Once a package is created, its key can not be changed.' => 'Bir paket oluşturulduktan sonra anahtarı değiştirilemez.',
      'Edit Package Package Configurations' => 'Paket Paket Yapılandırmalarını Düzenle',
      'Default Package View Policy' => 'Varsayılan Paket Görünümü Politikası',
      '%s created this version.' => '%s bu sürümü oluşturdu.',
      'Search for packages by publisher.' => 'Paketleri yayıncıya göre arayın.',
      'Once a version is created, its name can not be changed.' => 'Bir sürüm oluşturulduktan sonra adı değiştirilemez.',
      'Edit Publisher' => 'Yayıncıyı Düzenle',
      'The name of the publisher.' => 'Yayıncının adı.',
      'Once a version is created, its package can not be changed.' => 'Bir sürüm oluşturulduktan sonra, paketi değiştirilemez.',
      'The unique key of the package.' => 'Paketin benzersiz anahtarı.',
      'Read information about packages.' => 'Paketler hakkında bilgi okuyun.',
      'Each package provided by a publisher must have a unique package key.' => 'Yayıncı tarafından sağlanan her paketin benzersiz bir paket anahtarı olması gerekir.',
      'Type a publisher name...' => 'Bir yayıncı adı yazın...',
    );
  }

}
