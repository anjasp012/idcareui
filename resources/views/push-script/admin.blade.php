<script>
    var CSRFToken = '<?= csrf_token() ?>';
    // console.log(CSRFToken);
    var CKEditorOptions = {
        filebrowserImageBrowseUrl: '/filemanager?type=Images',
        filebrowserImageUploadUrl: '/filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/filemanager?type=Files',
        filebrowserUploadUrl: '/filemanager/upload?type=Files&_token=' + CSRFToken,
        extraPlugins: 'justify,preview,simplebutton',
        // skin: 'office2013',
    };
    // CKEDITOR.config.contentsCss = ['/stisla/dist/assets/modules/ckeditor/skins/office2013/editor.css'];
    CKEDITOR.plugins.addExternal('justify', '/stisla/dist/assets/modules/ckeditor/plugins/justify/',
        'plugin.js');
    CKEDITOR.plugins.addExternal('preview', '/stisla/dist/assets/modules/ckeditor/plugins/preview/',
        'plugin.js');
    CKEDITOR.plugins.addExternal('simplebutton',
        '/stisla/dist/assets/modules/ckeditor/plugins/simplebutton/',
        'plugin.js');

    CKEDITOR.replace('body', CKEditorOptions);
</script>
