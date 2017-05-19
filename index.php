<html>
 <head>
<style>
svg{
	height : 100%;
	width  : 100%;
}

svg {
	transition        : stroke-dashoffset 0.66s ease-out;
	stroke-dasharray  : 400;
	stroke-dashoffset : 0;
}

svg:hover{
	stroke-dashoffset:400;
}
</style>
 </head>
 <body>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 259.91937 212.55713" >
		<path d="M13 213c0-156 235-155 234 0M0 13h259M130 213l-1-200" 
			stroke="#28a9d9" fill="none" strokeWidth="25"
		/> 
	</svg>

 <?php echo 'App Version: 10.2. Pod IP: '; ?>
 <?php echo $_SERVER['SERVER_ADDR']; ?>
 <?php echo ' PHP Version: ' . phpversion(); ?>
 </body>
</html>
