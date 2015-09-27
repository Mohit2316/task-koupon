/*Scripts Used in Pages
@ author:KrishnaSai Chintala*/
function disableme(){
document.getElementById("ded").disabled=true;
document.getElementById("ded").value="2099-12-31";
}
function enableme(){
document.getElementById("ded").disabled=false;
document.getElementById("ded").value="";
}
window.onload = function () {
	(function () {
		document.getElementById("items3").setAttribute("disabled","");
		document.getElementById("items3").value=".";
		document.getElementById("items4").setAttribute("disabled","");
		document.getElementById("items4").value=".";
		document.getElementById("items5").setAttribute("disabled","");
		document.getElementById("items5").value=".";
	}());
};
function disableItem(){
	document.getElementById("items1").setAttribute("disabled","");
	document.getElementById("items1").value=".";
	document.getElementById("items2").setAttribute("disabled","");
	document.getElementById("items2").value=".";
	document.getElementById("items3").removeAttribute("disabled");
	document.getElementById("items3").value="";
	document.getElementById("items4").removeAttribute("disabled");
	document.getElementById("items4").value="";
	}
function enableItem(){
	document.getElementById("items1").removeAttribute("disabled");
	document.getElementById("items1").value="";
	document.getElementById("items2").removeAttribute("disabled");
	document.getElementById("items2").value="";
	document.getElementById("items3").setAttribute("disabled","");
	document.getElementById("items3").value=".";
	document.getElementById("items4").setAttribute("disabled","");
	document.getElementById("items4").value=".";
	}
$(document).ready(function(){
	 $("div[id=people_panel]").click(function(){
		$(this).next().find("#koupon_panel").slideToggle("fast");
	 });
});

$(document).ready(function(){
	$("#area").click(function(){
		var userfollow = document.getElementById("followcheck").checked;
		var userprev = document.getElementById("previouscheck").checked;
		if((userfollow)&&(userprev)){
			document.getElementById("next-button").disabled=false;
			document.getElementById("benfer").value=3;
			alert(document.getElementById("benfer").value());
		}
		else if(userfollow){
			document.getElementById("next-button").disabled=false;
			document.getElementById("benfer").value=1;
			alert(document.getElementById("benfer").value());
		}
		else if(userprev){
			document.getElementById("next-button").disabled=false;
			document.getElementById("benfer").value=2;
			alert(document.getElementById("benfer").value());
		}
		else{
			document.getElementById("next-button").disabled=true;
		}
	});
	$("#kpn_code_val").click(function(){
			$("#random").children("i").removeClass("checked");
			$("#predef").addClass("checked");
	});
	$("#random").click(function(){
			$("#random").children("i").addClass("checked");
			$("#predef").removeClass("checked");
			document.getElementById("kpn_code_val").value="";
	});
	$("#volume_val").click(function(){
			$("#unlimited").children("i").removeClass("checked");
			$("#limited").addClass("checked");
	});
	$("#unlimited").click(function(){
			$("#unlimited").children("i").addClass("checked");
			$("#limited").removeClass("checked");
			document.getElementById("volume_val").value="";
	});
});