<?php

function get_vk_browser($url='',$uagent=''){
	if(empty($uagent)){$uagent = "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)";}
	$ch = curl_init( $url );
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_USERAGENT, $uagent);  // useragent
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$err = curl_errno( $ch );
	if(!empty($err)){
		$html='';
	}
	$html = curl_exec($ch);
	curl_close( $ch );
	return $html;
};


	$token = '1bfc828742cd6bf2de9adf82d27921b19f671cb73ca65327daacd6f15be9270f38f8bda82b06a7f8090a8';
	$board_getComments = 'https://api.vk.com/method/photos.get?owner_id=-154864687&album_id=247785027&count=100&access_token='.$token.'&v=5.68';
	$board_getComments_result = get_vk_browser($board_getComments);
?>

<script type="text/javascript">
var album = '<?php echo $board_getComments_result;?>';
var data = eval("(" + album + ")");
console.log(data.response.count);
</script>
