/*
  Custom configuration for ckeditor.
 
  Configuration options can be set here. Any settings described here will be
  overridden by settings defined in the $settings variable of the hook. To
  override those settings, do it directly in the hook itself to $settings.
*/
CKEDITOR.editorConfig = function( config )
{
  // config.styleSet is an array of objects that define each style available
  // in the font styles tool in the ckeditor toolbar
  config.stylesSet =
  [
        /* Block Styles */
 
        // Each style is an object whose properties define how it is displayed
        // in the dropdown, as well as what it outputs as html into the editor
        // text area.
        //{ name : 'Paragraph'   , element : 'p' },
        //{ name : 'Heading 2'   , element : 'h2' },
        //{ name : 'Heading 3'   , element : 'h3' },
        //{ name : 'Heading 4'   , element : 'h4' },
        //{ name : 'Float Right', element : 'div', attributes : { 'style' : 'float:right;' } },
        //{ name : 'Float Left', element : 'div', attributes : { 'style' : 'float:left;' } },
        //{ name : 'Preformatted Text', element : 'pre' },
//       { name : 'normal text'   , element : 'div', attributes : { 'font' : 'normal 12px verdana, arial, sans-serif;' } },
//       { name : 'title'   , element : 'div', attributes : { 'font' : 'bold 16px verdana, arial, sans-serif;', 'color':'#587969', 'margin-top':'20px;' } },
//       { name : 'subtitle'   , element : 'div', attributes : { 'font' : 'bold 12px verdana, arial, sans-serif;', 'color':'#000' } },
//       { name : 'green quote'   , element : 'div', attributes : { 'font' : 'normal 12px verdana, arial, sans-serif;', 'color':'#587969', 'margin-top':'10px;', 'margin-bottom':'10px;' } },
		{ name : 'header', element : 'h1', attributes : { 'font' : 'bold 24px century gothic, helvetica, sans-serif;', 'color' : '#587969;', 'letter-spacing' : '1px;', 'margin-bottom' : '15px;'} },
		{ name : 'subheader', element : 'h2', attributes : { 'font' : 'bold 20px century gothic, helvetica, sans-serif;', 'color' : '#6a6256;', 'letter-spacing' : '1px;', 'margin-bottom' : '15px;','padding-top':'15px;'} },
		{ name : 'paragraph', element : 'p', attributes : { 'font' : '13px/20px century gothic, helvetica, sans-serif;', 'color':'#000;','margin-bottom' : '15px;' } },
		{ name : 'quote', element : 'div', attributes :  { 'font' : '14px/21px century gothic, sans-serif;', 'color':'#74624c;','margin-bottom' : '15px;', 'margin-bottom' : '15px;' } },
		{ name : 'image right', element : 'img', attributes :  { 'float' : 'right;', 'display':'inline;','margin-left' : '20px;', 'margin-bottom' : '20px;' } },
		{ name : 'image left', element : 'img', attributes :   { 'float' : 'left;', 'display':'inline;','margin-left' : '20px;', 'margin-bottom' : '20px;' } },		
  ];
 
}