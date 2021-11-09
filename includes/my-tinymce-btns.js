tinymce.PluginManager.add('my_cta_link_button', function( editor, url ) {
    editor.addButton( 'my_cta_link_button', {
      text: "CTA Arrow Link",
      title: "Insert CTA Arrow Link",
      onclick: function() {
        editor.windowManager.open( {
          title: 'Insert CTA Arrow Link',
          width: 500,
          height: 300,
          body: [
          {
            type: 'textbox',
            name: 'url',
            label: 'URL'
          },
          {
            type: 'textbox',
            name: 'text',
            label: 'Link Text'
          },
          {
            type: 'checkbox',
            name: 'newtab',
            label: ' ',
            text: 'Open link in new tab',
            checked: false
          },
          {
            type: 'checkbox',
            name: 'align',
            label: ' ',
            text: 'Align center',
            checked: false
          }],
          onsubmit: function( e ) {
            // let $content = '<a href="' + e.data.url + '" class="btn' + (e.data.style !== 'default' ? ' ' + e.data.style : '') + '"' + (!!e.data.newtab ? ' target="_blank"' : '' ) + '>' + e.data.label + '</a>';
            //let $content = '<div class="flex ' + (!!e.data.align ? 'justify-center' : '' ) + '"><a href="' + e.data.url + '" class="arrow-link"' + (!!e.data.newtab ? ' target="_blank"' : '' ) + '>' + e.data.text + '<div class="arrow-link__arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 27"><path d="M38.5.5l13 13m-13 13l13-13m-51 0h50" fill="none" stroke="#ea168c" stroke-linecap="square" /></svg></div></a></div>';
            let $content = '[cta_link text="' + e.data.text + '" url="' + e.data.url + '" newtab="' + (!!e.data.newtab ? 'true' : 'false' ) + '" align="' + (!!e.data.align ? 'center' : '' ) + '"]';
            editor.insertContent( $content );
          }
        });
      }
    });
  }); 