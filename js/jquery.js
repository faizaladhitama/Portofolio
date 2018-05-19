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

function send(user, message){
	if(user == "guest"){
		var textarea = $(".chat-write textarea");
		if(textarea.val() != undefined && textarea.val() != ""){
			$(".chat-history").append('\
				<div class="chat-item text-right">\
					<div class="sender-name">\
						Guest\
					</div>\
					<div class="sender-message">\
						'+textarea.val()+'\
					</div>\
				</div>');			
		}
	}else{
		$(".chat-history").append('\
			<div class="chat-item">\
				<div class="sender-name">\
					ALBIS\
				</div>\
				<div class="sender-message">\
					'+message+'\
				</div>\
			</div>');
	}
}
