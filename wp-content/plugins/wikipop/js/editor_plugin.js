(function() {
    tinymce.create('tinymce.plugins.WikipopPlugin', {
        init: function(ed, url) {
            ed.addCommand('mceWikipop',
            function() {
	            ed.windowManager.open({
					file : url + '/window.php?s='+ed.selection.getContent({format : 'text'}),
					width : 240,
					height : 170,
					inline : 1,
					title : 'Wikipop'
				});
            });

            ed.addButton('wikipopButton', {
                title: 'Wikipop',
                cmd: 'mceWikipop',
                image: url + '/../images/wikipop_icon.gif'
            });
        },

        getInfo: function() {
            return {
                longname: 'Wikipop',
                author: 'Matthew Healy',
                authorurl: 'http://www.matthewhealy.net/',
                infourl: 'http://www.matthewhealy.net/projects/wikipop',
                version: tinymce.majorVersion + "." + tinymce.minorVersion
            };
        }
    });

    tinymce.PluginManager.add('wikipop', tinymce.plugins.WikipopPlugin);
})();