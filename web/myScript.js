function clickMeAlert() {
	alert("Clicked!");
}

function changeColor() {
	var textbox_id_for_color = "textColor";

	var textbox = document.getElementById(textbox_id_for_color);

	var div_one_id = "changey";

	var div = document.getElementById(div_one_id);

	
	var colorChanged = textbox.value;
	div.style.backgroundColor = colorChanged;

}

$(document).ready(function(){
    $("#one").click(function(){
        $("#div3").fadeIn();

    });
});

$(document).ready(function(){
    $("#two").click(function(){
        $("#div3").fadeOut();

    });
});