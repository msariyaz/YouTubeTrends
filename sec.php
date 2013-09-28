<html>
  <head>
	<title>YouTube on Localhost</title>
  </head>
  <body>


	<?php

	// Zaman ve görüntüleme seçenekleri
	// https://developers.google.com/youtube/2.0/developers_guide_protocol_video_feeds
	// https://developers.google.com/youtube/2.0/developers_guide_protocol_api_query_parameters#timesp

	$ulke=$_GET['ulke'];
	$tarih=$_GET['zaman'];
	$goruntu=$_GET['goruntule'];


	// Ayarlanabilir API Bağlantısı
	// Örnek Bağlantı   = "http://gdata.youtube.com/feeds/api/standardfeeds/US/most_viewed?time=today";
	$feedURL            = "http://gdata.youtube.com/feeds/api/standardfeeds/$ulke/$goruntu?time=$tarih";

	
	// read feed into SimpleXML object
	if ( $sxml = simplexml_load_file($feedURL) ) {

	} else {
		header('Location: http://127.0.0.1/index.php');

	}
	  
	echo "<a href='http://127.0.0.1/index.php'> <img src='" . $sxml->logo . "''> </a>";     //YouTube LOGOSU
	echo "<h1> $sxml->title </h1>";     // Başlık



	?> 


	<?php



	// iterate over entries in feed
	foreach ($sxml->entry as $entry) {
	  // get nodes in media: namespace for media information
	  $media = $entry->children('http://search.yahoo.com/mrss/');
	  
	  // get video player URL
	  $attrs = $media->group->player->attributes();
	  $watch = $attrs['url']; 
	  
	  // get video thumbnail
	  $attrs = $media->group->thumbnail[0]->attributes();
	  $thumbnail = $attrs['url']; 
			
	  // get <yt:duration> node for video length
	  $yt = $media->children('http://gdata.youtube.com/schemas/2007');
	  $attrs = $yt->duration->attributes();
	  $length = $attrs['seconds']; 
	  
	  // get <yt:stats> node for viewer statistics
	  $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
	  $attrs = $yt->statistics->attributes();
	  $viewCount = $attrs['viewCount']; 

/*
	  // get <yt:rating> Like ve Dislike Sayıları
	  $yt = $entry->children('http://gdata.youtube.com/schemas/2007');
	  $attrs = $yt->rating->attributes();
	  $numDislikes = $attrs['numDislikes'];     //Dislike Sayısı
	  $numLikes = $attrs['numLikes'];           //Like Sayısı

	  // Video Adresi
	  $attrs = $media->group->content->attributes();
	  $FullScreenLink = $attrs['url']; 
*/


	  
	  
/*      
	  // get <gd:rating> node for video ratings
	  $gd = $entry->children('http://schemas.google.com/g/2005'); 
	  if ($gd->rating) {
		$attrs = $gd->rating->attributes();
		$rating = $attrs['average']; 
	  } else {
		$rating = 0; 
	  }
*/


	  ?>

		<a href="<?php echo $watch; ?>"><?php echo $media->group->title; ?></a><br><br>

		<!--<iframe width="640" height="360" src="http://www.youtube.com/embed/YXV_OU2loWs?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
-->

		<a target="_blank" href="<?php echo $FullScreenLink; ?>"><img src="<?php echo $thumbnail;?>" />	</a><br>
		

		<br><?php echo $media->group->description; ?><br><br>


		  YouTube Username:     <?php echo $entry->author->name; ?> <br/>
		  Duration:             <?php printf('%0.2f', $length/60); ?> min. <br/>
		  Views:                <?php echo $viewCount; ?> <br/>
		  
<!--      Rating:               <?php echo $rating; ?>--><br><br>


	<?php  }   ?>
  </body>
</html>
