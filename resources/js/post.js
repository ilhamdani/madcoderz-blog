// Author: Nawjesh Soyeb
// Title:Post create Ckeditor configur with laravel file manager
// create at:27/07/2019
$(function(){
    "use strict";
    
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
      height: 400
    };
    
    CKEDITOR.replace('body', options);
});