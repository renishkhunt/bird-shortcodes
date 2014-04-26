(function() {
  tinymce.PluginManager.add('birdShortcodes', function(editor, url) {
    editor.addButton('bird_shortcodes_button', {
      title: 'Bird Shortcodes',
      icon: 'icon bird_shortcodes_icon',
      type: 'menubutton',
      menu: [
        // Columns (Bootstrap)
        {
          text: 'Columns',
          menu: [
            {
              text: 'Two Columns',
              value: '[row][two_column]First column[/two_column][two_column]Second column[/two_column][/row]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Three Columns',
              value: '[row][three_column]First column[/three_column][three_column]Second column[/three_column][three_column]Third column[/three_column][/row]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Four Columns',
              value: '[row][four_column]First column[/four_column][four_column]Second column[/four_column][four_column]Third column[/four_column][four_column]Fourth column[/four_column][/row]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Six Columns',
              value: '[row][six_column]First column[/six_column][six_column]Second column[/six_column][six_column]Third column[/six_column][six_column]Fourth column[/six_column][six_column]Fifth column[/six_column][six_column]Sixth column[/six_column][/row]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            }
          ]
        },
        // end Columns
        // Information boxes
        {
          text: 'Info Box',
          value: '[info_box color="blue" width="100%" float="left" text_align="left"]Text in the information box[/info_box]',
          onclick: function() {
            editor.insertContent(this.value());
          }
        },
        // Divider
        {
          text: 'Divider',
          value: '[divider color="blue" type="solid" width="100%" height="1px" float="left"][/divider]',
          onclick: function() {
            editor.insertContent(this.value());
          }
        },
        // Text highlighting
        {
          text: 'Highlight text',
          value: '[highlight color="red"]Highlighting text[/highlight]',
          onclick: function() {
            editor.insertContent(this.value());
          }
        },
        // Tabs
        {
          text: 'Tabs',
          menu: [
            {
              text: 'Two Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Three Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][tab3]Tab 3[/tab3][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][tab_content3]Tab content 3[/tab_content3][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Four Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][tab3]Tab 3[/tab3][tab4]Tab 4[/tab4][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][tab_content3]Tab content 3[/tab_content3][tab_content4]Tab content 4[/tab_content4][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Five Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][tab3]Tab 3[/tab3][tab4]Tab 4[/tab4][tab5]Tab 5[/tab5][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][tab_content3]Tab content 3[/tab_content3][tab_content4]Tab content 4[/tab_content4][tab_content5]Tab content 5[/tab_content5][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Six Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][tab3]Tab 3[/tab3][tab4]Tab 4[/tab4][tab5]Tab 5[/tab5][tab6]Tab 6[/tab6][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][tab_content3]Tab content 3[/tab_content3][tab_content4]Tab content 4[/tab_content4][tab_content5]Tab content 5[/tab_content5][tab_content6]Tab content 6[/tab_content6][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Seven Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][tab3]Tab 3[/tab3][tab4]Tab 4[/tab4][tab5]Tab 5[/tab5][tab6]Tab 6[/tab6][tab7]Tab 7[/tab7][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][tab_content3]Tab content 3[/tab_content3][tab_content4]Tab content 4[/tab_content4][tab_content5]Tab content 5[/tab_content5][tab_content6]Tab content 6[/tab_content6][tab_content7]Tab content 7[/tab_content7][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Eight Tabs',
              value: '[nav][tab1]Tab 1[/tab1][tab2]Tab 2[/tab2][tab3]Tab 3[/tab3][tab4]Tab 4[/tab4][tab5]Tab 5[/tab5][tab6]Tab 6[/tab6][tab7]Tab 7[/tab7][tab8]Tab 8[/tab8][/nav][tabs_content][tab_content1]Tab content 1[/tab_content1][tab_content2]Tab content 2[/tab_content2][tab_content3]Tab content 3[/tab_content3][tab_content4]Tab content 4[/tab_content4][tab_content5]Tab content 5[/tab_content5][tab_content6]Tab content 6[/tab_content6][tab_content7]Tab content 7[/tab_content7][tab_content8]Tab content 8[/tab_content8][/tabs_content]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            }
          ]
        },
        // Accordion
        {
          text: 'Accordion',
          menu: [
            {
              text: 'One Section',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Two Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Three Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][accordion_section number="3" title="Title 3"]The text of section 3[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Four Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][accordion_section number="3" title="Title 3"]The text of section 3[/accordion_section][accordion_section number="4" title="Title 4"]The text of section 4[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Five Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][accordion_section number="3" title="Title 3"]The text of section 3[/accordion_section][accordion_section number="4" title="Title 4"]The text of section 4[/accordion_section][accordion_section number="5" title="Title 5"]The text of section 5[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Six Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][accordion_section number="3" title="Title 3"]The text of section 3[/accordion_section][accordion_section number="4" title="Title 4"]The text of section 4[/accordion_section][accordion_section number="5" title="Title 5"]The text of section 5[/accordion_section][accordion_section number="6" title="Title 6"]The text of section 6[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Seven Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][accordion_section number="3" title="Title 3"]The text of section 3[/accordion_section][accordion_section number="4" title="Title 4"]The text of section 4[/accordion_section][accordion_section number="5" title="Title 5"]The text of section 5[/accordion_section][accordion_section number="6" title="Title 6"]The text of section 6[/accordion_section][accordion_section number="7" title="Title 7"]The text of section 7[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            },
            {
              text: 'Eight Sections',
              value: '[accordion][accordion_section number="1" title="Title 1"]The text of section 1[/accordion_section][accordion_section number="2" title="Title 2"]The text of section 2[/accordion_section][accordion_section number="3" title="Title 3"]The text of section 3[/accordion_section][accordion_section number="4" title="Title 4"]The text of section 4[/accordion_section][accordion_section number="5" title="Title 5"]The text of section 5[/accordion_section][accordion_section number="6" title="Title 6"]The text of section 6[/accordion_section][accordion_section number="7" title="Title 7"]The text of section 7[/accordion_section][accordion_section number="8" title="Title 8"]The text of section 8[/accordion_section][/accordion]',
              onclick: function(e) {
                e.stopPropagation();
                editor.insertContent(this.value());
              }
            }
          ]
        },
        // Font Awesome Icons
        {
          text: 'Font Awesome Icons',
          value: '[icon type="fa-star" size="14px" color="black"][/icon]',
          onclick: function() {
            editor.insertContent(this.value());
          }
        },
        // Buttons
        {
          text: 'Button',
          value: '[button href="#" target="_self" color="red" width="10%" icon=""]Button[/button]',
          onclick: function() {
            editor.insertContent(this.value());
          }
        }
      ]
    });
  });
})();
