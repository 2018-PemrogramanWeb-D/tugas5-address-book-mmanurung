$(document).ready(function(){
	//show loaderImage
	$('#loaderImage').hide();
	//show contacts on page load
	showContacts();
	$(document).on('submit','#addContact', function(){
		$('#loaderImage').show();
		$.post("add_contact.php", $(this).serialize())
			.done(function(data)){
				console.log(data);
				$('#addModal').foundation('reveal','close');
				showContacts();
			});
			return false
	})
});
//show contatcs
function showContacts(){
	console.log('Showing contacs....');
	setTimeout("$('#pageContent').load('contacs.php',function(){$('loaderImage').hide();})",1000);
}