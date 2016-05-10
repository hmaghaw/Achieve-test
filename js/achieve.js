function getData(color_id){
	jQuery.ajax({
		  method: "POST",
		  url: "ajax.php",
		  data: { id: color_id }
		})
		.done(function (msg){
			jQuery("#count_"+color_id).val(msg);
			jQuery("#span_count_"+color_id).text(msg);
			})
		.fail();
}
function getTotal(){
	var sum=0;
	jQuery(".colorCount").each(function(index,obj){
		sum+=parseInt(obj.value);
	});
	jQuery("#total").text(sum);
}