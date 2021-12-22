$('form input[data-type=clear]').on('click', (e) => {
    var $form = $(e.target).parents('form');
    $(':input', $form)
        .not(':button, :submit, :reset, :hidden')
        .val('')
        .prop('checked', false)
        .prop('selected', false);

    $form.trigger('submit');
});

/*
$('a[data-del-confim]').on('click', (e) => {
    if (!confirm('?')) {
        e.preventDefault();
    }
});
*/

$('input[type=button][data-action]').on('click', (e) => {
    if (!confirm('?')) {
        return;
    }

    var $this = $(e.target);
    var $form = $this.parents('form');
    $form.find('input[type=hidden][name=act]').val($this.data('action'));
    $form.trigger('submit');
});

