<?php
/**
* 
*/
class DownloadController extends AppController {
	
	function index() {
		$this->layout = 'ajax';

		$filename = 'files/curriculo.pdf';
		header("Cache-Control: public");
		header("Content-Description: File Transfer");
		header('Content-disposition: attachment; filename='.basename('Curriculo-Felipe.pdf'));
		header("Content-Type: application/pdf");
		header("Content-Transfer-Encoding: binary");
		header('Content-Length: '. filesize($filename));
		readfile($filename);
	}
}
?>