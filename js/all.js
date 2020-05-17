
function lof(x)
{
	location.href=x
}

function del(table, id){
	$pop = confirm("雀定要刪除?");
	if($pop){
		$.post("./api/del.php",{table,id},function(res){
			location.reload();
		})
	}

}

function show(table, id, sh){
	$.post("./api/show.php",{table, id, sh},function(){
		location.reload();
	})
}

function sw(table, id, id2){
	$.post("./api/switch.php",{table, id, id2},function(){
		location.reload();
	})
};

function lof(url){
	location.href=url;
}