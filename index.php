<!DOCTYPE html>
<html lang="en">

 <head>
  <title>Sara's CircleCI Test</title>
 </head>

 <body>

<script>
	function changeMessage(){
document.getElementById("replaceText").innerHTML = "You clicked the button!";
	var messageChanged=true;
	return test(messageChanged);
}
</script>

<p id="replaceText">"Hello CircleCI Team!"</p>

	 <div>
	 	<button type="submit" name="clickHere" value="JS Button" id="testButton" onClick='changeMessage()'>Click here!</button>
	</div>



<script>

function test(messageChanged){
	if(messageChanged===true){
	console.log(true);
	} else {
	console.log(false);
	}

}
</script>

 </body>
</html>