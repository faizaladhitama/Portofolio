$(document).ready(function () {
	$(".about").children('div').each(function(){
		var cls = "." + $(this).attr('class');
		var cls_list = cls + "-list";
		
		$(cls).on('click','h3',function () {
			$(cls_list).toggle(); 
		});		
	});

	$(".chat-toggle").on("click",function(){
		console.log("click");
		$(".chat-box").toggle();
	});

	fetch("backend.php")
		.then(function(response){
			return response.json();	
		})
		.then(function(data){
			data = data[Math.floor(Math.random()*data.length)];			
			$('blockquote p').html(data.quote);
			$('blockquote cite').html(data.author);
		});
});
