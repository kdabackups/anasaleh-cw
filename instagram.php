<style>
ul.instagram-feeds li {
    display: inline-block;
    width: 32%;
    float: left;
    padding: 1px;
}
ul.instagram-feeds {
    width: 300px;
}
ul.instagram-feeds li img {
    width: 100%;
    /* margin: 19px; */
}
</style>
<?php  
$instaResult = file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=2972339837.60efb76.a78edaab31e9450096f9594fe781a1c6');
$insta = json_decode($instaResult);

 $instagrams = 6;?> <ul class='instagram-feeds'><?php
  for($i=0;$i<6;$i++){
 $instagram_photos = $insta->data[$i]->images->thumbnail->url;
//$instagram_photos = $insta->graphql->user->edge_owner_to_timeline_media;
?> 
   <li> <img src="<?php echo $instagram_photos;?>"> </li>
  
<?php
}    
?> </ul>