$(document).on('click', '.checkbox', function(e){
	e.preventDefault();
	$this =	$(this);

	$this.toggleClass('qqq');
	$this.next().toggleClass('checked');
	const id = $(this).attr('data-todo-id');

	$.get('index.php', {
			id: id,
			action: 'checked',
		},
	);
});