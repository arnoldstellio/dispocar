// {app}/js/fckeditor/app_config.js
// Aspect de l'éditeur
FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/silver/' ;
 
// Langue de l'interface
FCKConfig.AutoDetectLanguage = false ;
FCKConfig.DefaultLanguage    = 'fr' ;
 
// Caractères spéciaux
FCKConfig.IncludeLatinEntities = false ;
 
// Boutons actifs
FCKConfig.ToolbarSets["Default"] = [
	['Source','DocProps','-','Save','NewPage','Preview','Print'],
	['Cut','Copy','Paste','PasteText','PasteWord'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','Rule','SpecialChar'],
	['TextColor','BGColor'],
	'/',
	['Style','FontFormat','FontName','FontSize']
] ;


