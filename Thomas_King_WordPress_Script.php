<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WordPress Script</title>
</head>

<body>
	
	---------------------
	
    PART 2:
	
	The correct way to add jquery to a wordpress website. I would add this code to the header.php between <head></head>:
	
	
	add_action('wp_enqueue_scripts', 'load_js');
	
	function load_js{} {
		wp_deregister_script{'jquery' };
		wp_register_script{'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' };
		wp_enqueue_script{'jquery' };
	}
	
	---------------------
	
</body>
</html>