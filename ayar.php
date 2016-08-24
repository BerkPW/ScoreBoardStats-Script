<?php

###############
## Düzenleme ##
###############
error_reporting(0);

#######################
## Database Ayarları ##
#######################

@mysql_select_db("stt", mysql_connect("localhost","root","root"));

//İlk kısma database de yükledğiniz yerin ismini yazın
//İkinci kısıma mysql bağlantı adresini yazın
//Üçüncü kısıma mysql kullanıcı adını yazın
//Dördüncü kısıma mysql şifrenizi yazın





###################
## Site Ayarları ##
###################

$mbk_d 		= "1"; //1 = Mob öldürme sayısı açık || 0 = Mob öldürme sayısı kapalı

$limit		= "15"; //Tabload gösterilcek oyuncu sayısı

$site_adi	= "PWCraft"; //Bu siteye vermek istediğiniz isim

$tema		= "beyaz"; //beyaz = Temanın açık renkli olması || siyah = Temanın koyu olması

$kafa		= "1"; //1 = Tabload kafaların gözükmesi || 0 = Tabloada kafaların gözükmemesi

?>
