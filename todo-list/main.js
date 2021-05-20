$(document).on('click', '.checkbox', function(e){
	e.preventDefault();
	$this =	$(this);

	$this.toggleClass('qqq');
	$this.next().toggleClass('checked');
	
	const id = $(this).attr('data-todo-id');
	const done = $(this).attr('data-done');

	if ( done === '1' ) {
		$(this).attr('data-done', 0);
	} else {
		$(this).attr('data-done', 1);
	}

	$.get('index.php', {
			id: id,
			action: 'checked',
			done: done,
		},
	);
});