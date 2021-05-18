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
				let style = h2.siblings('.checkbox');
				if('1' === data ){
					h2.removeClass('checked');
					style.removeClass('qqq');
					
				} else {
					h2.addClass('checked');
					style.addClass('qqq');
				}
			}
		}
	);
});