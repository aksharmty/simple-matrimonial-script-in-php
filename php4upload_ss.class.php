<?php
/*

- PHP4 Image upload script

*/

class imageupload
{
	//pblic variables
	var $path = '';
	var $errorStr = '';
	var $imgurl = '';

	//private variables
	var $_errors = array();
	var $_params = array();
	var $_lang = array();
	var $_maxsize = 1048576;

	var $_im_status = false;

	//public methods
	function imageupload ()
	{
		//require 'photouploadconfig.php';
		
		
require 'Successstoryphotoupload.php';

		
		$this->_types = $types;
		$this->_lang = $lang;
		$this->_upload_dir = $upload_dir;
		$this->_maxsize = $maxsize;

		$this->path = $PHP_SELF;
		
		if (is_array($_FILES['__upload']))
		{
			$this->_params = $_FILES['__upload'];
			if (function_exists('exif_imagetype'))
				$this->_doSafeUpload();
			else
				$this->_doUpload();

			if (count($this->_errors) > 0)
				$this->_errorMsg();
		}
	}

	function allowTypes ()
	{
		$str = '';
		if (count($this->_types) > 0) {
			$str = 'Allowed types: (';
			$str .= implode(', ', $this->_types);
			$str .= ')';
		}

		return $str;
	}

	// private methods
	function _doSafeUpload ()
	{
		preg_match('/\.([a-zA-Z]+?)$/', $this->_params['name'], $matches);
		if (exif_imagetype($this->_params['tmp_name']) && in_array(strtolower($matches[1]), $this->_types))
		{
			if ($this->_params['size'] > $this->_maxsize)
				$this->_errors[] = $this->_lang['E_SIZE'];
			else
				$this->_im_status = true;

			if ($this->_im_status == true)
			{
				$ext = substr($this->_params['name'], -4);
				$this->new_name = md5(time()).$ext;

				move_uploaded_file($this->_params['tmp_name'], $this->_upload_dir.$this->new_name);

			$this->imgurl =$this->new_name;
				
			//$this->imgurl = .$this->new_name;
				
				
			}
		}
		else
			$this->_errors[] = $this->_lang['E_TYPE'];
	}

	function _doUpload ()
	{
	
	
	
	
	
	
	
		preg_match('/\.([a-zA-Z]+?)$/', $this->_params['name'], $matches);
		if(in_array(strtolower($matches[1]), $this->_types))
		{
			if ($this->_params['size'] > $this->_maxsize)
				$this->_errors[] = $this->_lang['E_SIZE'];
			else
				$this->_im_status = true;

			if ($this->_im_status == true)
			{
				$ext = substr($this->_params['name'], -3);
				$this->new_name = md5(time()).$ext;

				move_uploaded_file($this->_params['tmp_name'], $this->_upload_dir.$this->new_name);

				$this->imgurl = 'http://'.$_SERVER['HTTP_HOST'].preg_replace('/\/([^\/]+?)$/', '/', $_SERVER['PHP_SELF']).$this->_upload_dir.'/'.$this->new_name;
				
				
				

				
				
				
				
				
				
			}
		}
		else
			$this->_errors[] = $this->_lang['E_TYPE'];
	}

	function _errorMsg()
	{
		$this->errorStr = implode('<br />', $this->_errors);
	}
}

?>