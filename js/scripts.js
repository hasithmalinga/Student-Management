

function delete_row(delete_id){
	console.log(delete_id);
	if(confirm('Are you sure ?')){
		$.ajax({
			url: 'delete.php?id=' + delete_id,
			cache: false,
			success: function(data){
				alert('Record deleted successfully');
				window.location.href = "index.php";
			}
		});
	}
}