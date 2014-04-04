<?
App::uses('AppModel', 'Model');
class FormField extends AppModel {
	const STRING  = 1;
	const INT = 2;
	const FLOAT = 3;
	const DATE = 4;
	const DATETIME = 5;
	const TEXTAREA = 6;
	const CHECKBOX = 7;
	const SELECT = 8;
	const EMAIL = 9;
	const URL = 10;
	const UPLOAD_FILE = 11;
	const EDITOR = 12;
	
	
}
