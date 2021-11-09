jQuery(document).ready(function($) {
    tinymce.create('tinymce.plugins.custom_mce_plugin', {
        init : function(editor, url) {
				
			editor.addButton('custom_mce_button', {
					text: 'Short Codes',
					icon: false,
					type: 'listbox',
					values: [
						{
                        text: '[tuvan]',
                        onclick: function() {
                           editor.insertContent('[tuvan]');
                                  }
                        },
						{
                        text: '[tuvantt]',
                        onclick: function() {
                           editor.insertContent('[tuvantt]');
                                 }
						},
						{
                        text: '[sdt]',
                        onclick: function() {
                           editor.insertContent('[sdt]');
                                  }
                        },
						{
						text: '[diachi]',
                        onclick: function() {
                           editor.insertContent('[diachi]');
                                  }
                        },
						{
						text: '[open_time]',
                        onclick: function() {
                           editor.insertContent('[open_time]');
                                  }
                        } ,{
                        text: '[tenpk]',
                        onclick: function() {
                            editor.insertContent('[tenpk]');
                        }
                        },
                        {
                        text: '[khuvucpk]',
                        onclick: function() {
                          editor.insertContent('[khuvucpk]');
                        }
                        }
					]
			});
        },   
    });

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('custom_mce_button', tinymce.plugins.custom_mce_plugin);
});


