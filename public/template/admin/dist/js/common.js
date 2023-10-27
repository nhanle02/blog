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

if (tagName) {
    tagName.onchange = (e) => { 
        tagSlug.value = e.target.value;
    }
}

$(document).on('click', '.js-remove-file-chosen', function () {
    let $this = $(this),
       chooseFileText = $this.closest('.group-file').find('.custom-file').attr('data-choose-file');
    $this.closest('.group-file').find('.custom-file input').val('');
    $this.closest('.group-file').find('.custom-file .custom-file-label').html(chooseFileText);
    $this.closest('.file-preview').html('');
});
