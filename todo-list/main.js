$(document).on('click', '.checkbox', function(e){
	e.preventDefault();
	const id = $(this).attr('data-todo-id');
	var $inputCheckbox = document.getElementById('test');

	$.post('check.php', {
			id: id
		},
		(data) => {
			if(data != 'error'){
				const h2 = $(this).next();
				if('1' === data ){
					h2.removeClass('checked');
					
				} else {
					h2.addClass('checked');
					
				}
			}
		}
	);
});