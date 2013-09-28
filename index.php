<html>
<head>
		<title>YouTube on Localhost</title>
</head>
<body>



<?php

	//  Ülke Kodları
	$Argentina          = 'AR';
	$Australia          = 'AU';
	$Belgium            = 'BE';
	$Brazil             = 'BR';
	$Canada             = 'CA';
	$Chile              = 'CL';
	$Colombia           = 'CO';
	$CzechRepublic      = 'CZ';
	$Egypt              = 'EG';
	$France             = 'FR';
	$Germany            = 'DE';
	$GreatBritain       = 'GB';
	$HongKong           = 'HK';
	$Hungary            = 'HU';
	$India              = 'IN';
	$Ireland            = 'IE';
	$Israel             = 'IL';
	$Italy              = 'IT';
	$Japan              = 'JP';
	$Jordan             = 'JO';
	$Malaysia           = 'MY';
	$Mexico             = 'MX';
	$Morocco            = 'MA';
	$Netherlands        = 'NL';
	$NewZealand         = 'NZ';
	$Peru               = 'PE';
	$Philippines        = 'PH';
	$Poland             = 'PL';
	$Russia             = 'RU';
	$SaudiArabia        = 'SA';
	$Singapore          = 'SG';
	$SouthAfrica        = 'ZA';
	$SouthKorea         = 'KR';
	$Spain              = 'ES';
	$Sweden             = 'SE';
	$Taiwan             = 'TW';
	$Turkey             = 'TR';
	$UnitedArabEmirates = 'AE';
	$UnitedStates       = 'US';
	

	// ZAMANLAMA
	$bugun              = 'today';
	$hafta              = 'this_week';
	$ay                 = 'this_month';
	$tum_zamanlar       = 'all_time';

	//  Görüntüleme Seçenekleri
	$puan               = 'top_rated';              // En yüksek puan alanlar videolar
	$favori             = 'top_favorites';          // Favorilere eklenen videolar
	$sosyal             = 'most_shared';            // Facebook ve Twitter'da en çok paylaşılan videolar
	$populer            = 'most_popular';           // En popüler YouTube videoları (YouTube algoritmasına göre)
	$yeni               = 'most_recent';            // YouTube'a en son gönderilen videolar
	$yorumlanan         = 'most_discussed';         // En çok yorum alan videolar
	$yanitlanan         = 'most_responded';         // En çok yanıtlanan videolar
	$ozellikli          = 'recently_featured';      // Video sayfasında ve videoda bir özelliği olan videolar
	$trend              = 'on_the_web';             // YouTube Trendlerde yer alan videolar
	$izlenen            = 'most_viewed';            // En çok izlenenler
	$upcoming			= 'upcoming';


echo "<form method='GET' action='sec.php'>
	  <select name='ulke'>
	  						  <option value='$Turkey'>Turkiye</option>
  							  <option value='$UnitedStates'>Amerika</option>
  							  <option value='$Russia'>Rusya</option>
							  <option value='$France'>Fransa</option>
  							  <option value='$Brazil'>Brazilya</option>
  							  <option value='$Spain'>Ispanya</option>
  							  <option value='$UnitedArabEmirates'>Birlesik Arap Emirlikleri</option>
  							  <option value='$Italy'>Italya</option>
  							  <option value='$Japan'>Japonya</option>
  							  <option value='$Egypt'>Misir</option>
  							  <option value='$Canada'>Kanada</option>
  							  <option value='$SouthAfrica'>G. Afrika</option>
  							  <option value='$India'>Hindistan</option>
  							  <option value='$Israel'>Israil</option>
  							   </select>

  	  <select name='zaman'>
  							  <option value='$bugun'>Bugun</option>
  							  <option value='$hafta'>Bu Hafta</option>
  							  <option value='$ay'>Bu Ay</option>
  							  <option value='$tum_zamanlar'>Tum Zamanlar</option></select>


  	  <select name='goruntule'>
   							  <option value='$izlenen'>En Cok Izlenen</option>
 							  <option value='$puan'>Yuksek Puan</option>
  							  <option value='$favori'>Favoriler</option>
  							  <option value='$sosyal'>En Sosyal</option>
  							  <option value='$populer'>Populer</option>
  							  <option value='$yeni'>Yeni</option>
  							  <option value='$yorumlanan'>Yorumlanan</option>
  							  <option value='$yanitlanan'>Yanitlanan</option>
  							  <option value='$ozellikli'>Ozellikli</option>
							  <option value='$trend'>Trendler</option></select>
<input type='submit' value='Tamam'>
</form>";

?>




</body>
</html>




