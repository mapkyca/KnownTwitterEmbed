<script>
    $(document).ready(function() {
	$('div.twitter-embed').each(function(index) {
	    var url = $(this).attr('data-url');
	    var div = $(this);
	    
	     $.ajax({
		url: "https://api.twitter.com/1/statuses/oembed.json?url="+url,
		dataType: "jsonp",
		success: function(data){
		    div.html(data['html']);
		}
	    });
	});
    });
</script>