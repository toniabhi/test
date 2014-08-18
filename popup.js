$(document).ready(function(){ 
	console.log("JQUERY is ready");
	setTimeout(openPopup,2000);
$("#modal-open-button").click(function(e){
	console.log('$("#modal-open-button").click');
	openPopup();
});
$("#modal-close-button").click(function(e){
	console.log('$("#modal-close-button").click');
	closePopup();
});
$("#overlay-bg").click(function (e) {
	console.log('$("#overlay-bg").click');
	closePopup();	// body...
});
$(window).resize(function () {
	updatePopup();
});
});
function openPopup () {
	$("#modal-open-button").prop("disabled",true);
	$("#popup-content").fadeIn();
	$("#overlay-bg").fadeIn();
	updatePopup();  
	// body...
}
function closePopup () {
	$("#modal-open-button").prop("disabled",false);
	$("#modal-open-button").fadeIn();
	$("#popup-content").fadeOut();
	$("#overlay-bg").fadeOut();
	// body...
}
function updatePopup()
{
	var $popupContent=$("#popup-content");
	var	top="50px"; 
	var	left=($(window).width()-$popupCohttp://localhost/test/abhi.htmlntent.outerWidth())/2;
	$popupContent.css({'top':top,'left':left});

}
