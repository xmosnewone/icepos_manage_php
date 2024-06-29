<?php
namespace util;
class Word
{
	public function start()
	{
		ob_start();
		echo '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns="http://www.w3.org/TR/REC-html40">';
	}
	public function save($path)
	{
		echo "</html>";
		$data = ob_get_contents();
		ob_end_clean();
		$this->wirtefile ($path,$data);
	}
	public function wirtefile ($fn,$data)
	{
		$fp=fopen($fn,"wb");
		fwrite($fp,$data);
		fclose($fp);
	}
}