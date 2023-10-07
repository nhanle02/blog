$(function () {
    $(document).on('click', '.js-display-modal-delete', function () {
        let $this = $(this),
            action = $this.attr('data-action'),
            $modal = $('#modal-confirm-delete');
        $modal.find('form').attr('action', action);
        $modal.modal('show');
    });
});

const tagName = document.querySelector('.js-handle-name');
const tagSlug = document.querySelector('.js-handle-slug');

tagName.onchange = (e) => { 
    tagSlug.value = e.target.value;
}