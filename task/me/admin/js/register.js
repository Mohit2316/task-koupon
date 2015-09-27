Element.prototype.remove = function() {
    this.parentElement.delay("300").removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = 0, len = this.length; i < len; i++) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}
var removed=[];
var add_count=1;	
function remove_me(element,no){
		$(element).parent().parent().parent().parent().remove();
		removed.push(no);
		//alert(no);
	}
$(document).ready(function(){
	$(".pr_add").hide();
	document.getElementById("address_line1").removeAttribute("data-required");
	document.getElementById("city").removeAttribute("data-required");
	document.getElementById("state").removeAttribute("data-required");
	document.getElementById("country").removeAttribute("data-required");
	
	$("#enable_add").click(function(){
		$("#catn").hide();
		document.getElementById("address_line1").setAttribute("data-required","true");
		document.getElementById("city").setAttribute("data-required","true");
		document.getElementById("state").setAttribute("data-required","true");
		document.getElementById("country").setAttribute("data-required","true");
		$(".pr_add").slideDown("slow");
	});
	$("#disable_add").click(function(){
		$("#catn").show();
		$(".pr_add").slideUp("slow");
		document.getElementById("address_line1").removeAttribute("data-required");
		document.getElementById("city").removeAttribute("data-required");
		document.getElementById("state").removeAttribute("data-required");
		document.getElementById("country").removeAttribute("data-required");
		document.getElementsByClassName("add").remove();
		add_count=1;
	});

	$("#add_loc").click(function(){
	add_count++;
	var city=$("#city").val();
	var state=$("#state").val();
	var country=$("#country").val();
	$("<div class='add'><div class='col-sm-12'><section class='panel'><header class='panel-heading font-bold'>Address "+add_count+"<div class='btn btn-danger btn-xs' onClick='remove_me(this,"+add_count+")' style='float:right;'>Remove</div></header><div class='panel-body'><div class='form-group'> <label class='col-lg-2 control-label'>Mobile<font color='red'> *</font></label><div class='col-sm-9'>  <input type='text' data-type='number' data-required='true' name='mobile"+add_count+"' id='mobile"+add_count+"' class='form-control' placeholder='like 9999999999'></div></div><div class='line line-dashed line-lg pull-in'></div>  <div class='form-group'> <label class='col-lg-2 control-label'>Address</label><div class='col-sm-9'><input type='text' class='form-control' name='address_line1"+add_count+"' id='address_line1"+add_count+"' data-required='true' placeholder='Door No.'><br><input type='text' class='form-control' name='address_line2"+add_count+"' id='address_line2"+add_count+"' placeholder='Street'><br><input type='text' class='form-control' name='address_line3"+add_count+"' id='address_line3"+add_count+"' placeholder='Road, Landmark'></div></div><div class='line line-dashed line-lg pull-in'></div> <div class='form-group'> <label class='col-lg-2 control-label'>City<font color='red'> *</font></label><div class='col-sm-9'><input type='text' class='form-control' name='city"+add_count+"' value="+city+"  placeholder='like Hyderabad' disabled></div></div><div class='line line-dashed line-lg pull-in'></div> <div class='form-group'> <label class='col-lg-2 control-label'>State<font color='red'> *</font></label><div class='col-sm-9'><input type='text' class='form-control' name='state"+add_count+"' data-required='true' value="+state+" placeholder='like Andhra Pradesh'disabled></div></div><div class='line line-dashed line-lg pull-in'></div> <div class='form-group'> <label class='col-lg-2 control-label'>Country<font color='red'> *</font></label><div class='col-sm-9'><input type='text' class='form-control' name='country"+add_count+"' value="+country+" data-required='true' placeholder='like India'disabled></div></div><div class='line line-dashed line-lg pull-in'></div> <div class='form-group'> <label class='col-lg-2 control-label'>Lattitude</label><div class='col-sm-9'><input type='text' data-type='number' name='latitude"+add_count+"' class='form-control' placeholder='like 9'></div></div><div class='line line-dashed line-lg pull-in'></div> <div class='form-group'> <label class='col-lg-2 control-label'>Longitude</label><div class='col-sm-9'><input type='text' data-type='number' name='longitude"+add_count+"' class='form-control' placeholder='like 59'></div></div></div></div><div class='line line-dashed line-lg pull-in'></div> </div>").insertBefore("#add_loc");
	});
	
	$("#reg_me").click(function(){
	$("#fields").val(add_count);
	//alert($("#fields").val());
		if($('#bTypeOn').is(':checked')) {	
			var web=$("#website").val();
			if(web==""){
				$("#error").html("Please fill WebSite Address.");
				return false;
			}
			$("#address_line1").val("");
			$("#address_line2").val("");
			$("#address_line3").val("");
			$("#city").val("");
			$("#state").val("");
			$("#country").val("");
		}
		if($('#bType').is(':checked')) { 
			var add1=$("#address_line1").val();
			if(add1==""){
				$("#error").html("Please fill Primary Address properly.");
				//$("#address_line1").focus();
				return false;
			}
			for ( var i = 2; i <= add_count; i++ ) {
				if(removed.indexOf(i)==-1)	{
					//alert(i);
					var alladd1=$("#address_line1"+i).val();
					if(alladd1==""){
						$("#error").html("Please fill Address"+i+" properly.");
						//$("#address_line1").focus();
						return false;
					}
					var mobilenos=$("#mobile"+i).val();
					var reg_mob = /^([7-9]{1,1})+([0-9]{9,9})$/; 
					if(mobilenos==""){
						$("#error").html("Please fill Phone No of Address"+i+" properly.");
						//$("#address_line1").focus();
						return false;
					} 
					if(reg_mob.test(mobilenos)==false){
						$("#error").html("Enter valid mobile number.");
						return false;
					}
				}
			}
		
		}
	});
});