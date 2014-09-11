<?php
	function date_convert($date)
	{
		$month_number = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
		$month_name = array('Jan', 'Feb', 'Már', 'Ápr', 'Máj', 'Jún', 'Júl', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
		return str_replace($month_number, $month_name, $date);
	}
	
	function language($language,$var,$cat = ""){
		$lang = parse_ini_file("language/".$language."/language.ini", true);
		if(empty($cat))
		{
			return $lang[$var];
		}
		else
		{
			return $lang[$cat][$var];
		}
	}
	
	function menu_active_block($url, $name, $language){
		if($name == 'dates')
		{
			if($_SERVER['SCRIPT_NAME'] == LOCATION.$url)
			{
				return '<div class="menu_item active" style="width:190px;"><a href="'.$url.'">'.language($language, $name, 'Menu').'</a></div>';
			}
			else
			{
				return '<div class="menu_item" style="width:190px;"><a href="'.$url.'">'.language($language, $name, 'Menu').'</a></div>';
			}
		}
		else
		{
			if($_SERVER['SCRIPT_NAME'] == LOCATION.$url)
			{
				return '<div class="menu_item active"><a href="'.$url.'">'.language($language, $name, 'Menu').'</a></div>';
			}
			else
			{
				return '<div class="menu_item"><a href="'.$url.'">'.language($language, $name, 'Menu').'</a></div>';
			}
		}
	}
	
	function trim_text($input, $length, $ellipses = true, $strip_html = true) {
		//ha ha paraméternek van értéke kiveszi a HTML elemeket
		if ($strip_html) {
			$input = strip_tags($input);
		}
		//csak akkor vágjuk le ha hosszabb mind amit mi szeretnénk
		if (strlen($input) <= $length) {
			return $input;
		}
		//megkeressük az utolsó space -t
		$last_space = strrpos(substr($input, 0, $length), ' ');
		$trimmed_text = substr($input, 0, $last_space);
		//betesszük a levágást jelző karaktereket
		if ($ellipses) {
			$trimmed_text .= ' ...';
		}
		//a levágott szöveg
		return $trimmed_text;
	}
	
	function replace_special($text){
		$ekezetesek = array('á', 'é', 'í', 'ó', 'ő', 'ö', 'ú', 'ü', 'ű', ' ', 'Á', 'É', 'Í', 'Ó', 'Ő', 'Ö', 'Ú', 'Ü', 'Ű');
		$normal = array('a', 'e', 'i', 'o', 'o', 'o', 'u', 'u', 'u', '_', 'A', 'E', 'I', 'O', 'O', 'O', 'U', 'U', 'U');
		return strtolower(str_replace($ekezetesek, $normal, $text));
	}
	
	function delTree($dir) { 
		$files = array_diff(scandir($dir), array('.','..')); 
		foreach ($files as $file) { 
		  (is_dir("$dir/$file") && !is_link($dir)) ? delTree("$dir/$file") : unlink("$dir/$file"); 
		} 
		return rmdir($dir); 
	}

    function checkexist($varname, $messagetext){
        $db = count($varname);
        $end = 'true';
        for($i = 0; $i < $db; $i++)
        {
            if(empty($_POST[$varname[$i]]))
            {
                return $messagetext[$i].' megadása kötelező!';
            }
        }
        if($end == 'true')
        {
            return 'true';
        }
    }
?>