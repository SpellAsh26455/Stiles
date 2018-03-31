<html>
<head>
<script type="text/javascript">
	function go()
	{
var javascriptVariable = "John";
window.location.href = "index.php?name=" + javascriptVariable;
}
</script>
</head>
<body>
<button onclick="go()">Add</button>
<?php
$q= "<h1><script>document.writeln(p1);</script></h1>";
echo $q;
?>
</body>
</html>
