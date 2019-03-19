jQuery.noConflict();

jQuery(document).ready(function($) {
    $('#tag_edit').tagsInput(
        {width:'300px', height: 'auto', maxTagCount:2}
    );
});