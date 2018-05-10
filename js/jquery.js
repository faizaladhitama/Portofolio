$(document).ready(function () {
	$("#catur-jawa-img").on('click','img',function () {
		$('#catur-jawa-modal').modal('show'); 
	});

	$("#catur-jawa-img").on('click','img',function () {
		$('#catur-jawa-modal').modal('show'); 
	});

	$("#catur-jawa-img").on('click','img',function () {
		$('#catur-jawa-modal').modal('show'); 
	});

	$(".skills").on('click','h3',function () {
		$('.skill-list').toggle(); 
	});

	$(".educations").on('click','h3',function () {
		$('.education-list').toggle(); 
	});

	$(".courses").on('click','h3',function () {
		$('.course-list').toggle(); 
	});

	$(".works").on('click','h3',function () {
		$('.work-list').toggle(); 
	});
	
	$(".committees").on('click','h3',function () {
		$('.committee-list').toggle(); 
	});
		
	$(".volunteers").on('click','h3',function () {
		$('.volunteer-list').toggle(); 
	});

	fetch("backend.php")
		.then(function(response){
			return response.json();	
		})
		.then(function(data){
			$('blockquote p').html(data.quote);
			$('blockquote cite').html(data.author);
		});
});
