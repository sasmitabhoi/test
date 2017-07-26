<?php header('Access-Control-Allow-Origin: *'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$( document ).ready(function() {
  ajaxRecommendation();
});

function ajaxRecommendation(){
 	 var news='';
	  var j=0;
	  $.ajax({
	        url: "http://192.168.1.110:8484/jenirman/Reports/recommendationReport",
	    }).then(function(data) {
	    	//alert(data);
	      $.each(data.result.sasmita, function(k, v){
			  alert(v);
			});
	//$('.breakingnewsstrip').append(news);
	    });
}
</script>