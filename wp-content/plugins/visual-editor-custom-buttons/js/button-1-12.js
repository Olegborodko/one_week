// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button12', {
        init : function(ed, url) {
            ed.addButton('vecb_button12', {
                title : 'black_block__text_style',image : url+'/icons/brush.png',onclick : function() {
                     ed.selection.setContent('<span class="black_block__text_style">' + ed.selection.getContent() + '</span>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button12', tinymce.plugins.vecb_button12);
})();