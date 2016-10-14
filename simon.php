
/**
 * Created by PhpStorm.
 * User: Jason Steele
 * Date: 4/9/2016
 * Time: 1:53 PM
 */
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Simon</title>
	<link href="lib/css/simon.css" type="text/css" rel="stylesheet" />
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="site.con.js"></script>
    <script>
$(document).ready(function() {
    new Simon("form");
});
	</script>
</head>
<body>
<form><p>
		<input type="button" value="Red">
		<input type="button" value="Green">
		<input type="button" value="Blue">
		<input type="button" value="Yellow">
	</p>
</form>

<audio id="red" src="audio/red.mp3" preload="auto"></audio>
<audio id="green" src="audio/green.mp3" preload="auto"></audio>
<audio id="blue" src="audio/blue.mp3" preload="auto"></audio>
<audio id="yellow" src="audio/yellow.mp3" preload="auto"></audio>
<audio id="buzzer" src="audio/buzzer.mp3" preload="auto"></audio>

</body>
</html>
Here is simon.less:

form p {
    text-align: center;
}

input[type="button"] {
    font-size: 2em;
  width: 5em;
  background-color: lightgrey;
}