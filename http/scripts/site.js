function set_parent(cat_id) {
		$('#parent_id').val(cat_id);
		return false;
}

function addcomment() {
	$.post("index.php?page=json&action=addcomment",
	{id:$("#id").val(),
	 email:$("#email").val(),
	 comment_text:$("#text").val()},
	 function(data) {
	 	refreshcomment();
	 },
	 "json"
	 );
	 //alert("Go-go-go!");
}

function refreshcomment() {
	$("#comments").empty();
	$.post(
	"index.php?page=json&action=comments",
	{id:$("#id").val()},
	function (data) {
		//foreach (i in data) {
		for (i in data) {
			$("#comments").append(data[i].email+" : "+data[i].text+"<br />");
		}
	},
	"json"
	);
	return false;
}

function getprod() {
	id=$("#proddd").val();
	alert(id*1000);
	$.post('index.php?page=json&action=getprod',{product_id:id},function(data) {alert(data.name_product	);},"json");
	return false;
}


function hi() {
//	alert("Hi!");
//if ($("#TEST").)
$("#TEST").css("background-color", "#ff5533");
$("#TEST").css("width", "300px");
$("#TEST").css("height", "150px");
$("#TEST").css("float", "right");
return false;
}

function bye() {
$("#TEST").css("background-color", "#eeeeff");
$("#TEST").css("width", "200px");
$("#TEST").css("height", "100px");
$("#TEST").css("float", "left");
return false;
}

function divcopy() {
	alert($("#parent").html());
	//$(body).append($("#parent").html());//TEST!
	return false;
}

function add_cnt() {
	//$("#TEST").append("<p>HELLO!!!</p>");
	$("#TEST").append("<a>TEST</a>");
	return false;
}
	
function clean() {
	$("#TEST").empty();
	return false;
}	

function del() {
	return false;
}

function mul() {
	x=$("#x").val();
	y=$("#y").val();
	$('#res').val(x*y);
	return false;
}

function divide() {
	x=$("#x").val();
	y=$("#y").val();
	$('#res').val(x/y);
	return false;
}

function plus() {
	x=parseInt($("#x").val());
	y=parseInt($("#y").val());
	$('#res').val(x+y);
	return false;
}

function substr() {
	x=$("#x").val();
	y=$("#y").val();
	$('#res').val(x-y);
	return false;
}

/*$(document).ready(function ()
{
	alert('Ready!');
}
);*/