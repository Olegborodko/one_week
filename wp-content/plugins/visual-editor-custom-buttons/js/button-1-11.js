// JavaScript Document

function getBaseURL () {
   return location.protocol + '//' + location.hostname + 
      (location.port && ':' + location.port) + '/';
}

(function() {
    tinymce.create('tinymce.plugins.vecb_button11', {
        init : function(ed, url) {
            ed.addButton('vecb_button11', {
                title : 'h4',image : url+'/icons/heading_3.png',onclick : function() {
                     ed.selection.setContent('<h4 class="h4">' + ed.selection.getContent() + '</h4>');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vecb_button11', tinymce.plugins.vecb_button11);
})();