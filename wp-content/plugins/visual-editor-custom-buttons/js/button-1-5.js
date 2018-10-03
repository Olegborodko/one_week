// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button5', {
        init : function(ed, url) {
            ed.addButton('vecb_button5', {
                title : 'zoom text',image : url+'/icons/justify.png',onclick : function() {
                     ed.selection.setContent('<span class="zoom_text">' + ed.selection.getContent() + '</span>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button5', tinymce.plugins.vecb_button5);
})();