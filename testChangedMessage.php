<html>
<head>
  <meta charset="utf-8">
  <title>qunit test</title>
 
  <link rel="stylesheet" href="https://code.jquery.com/qunit/qunit-2.4.0.css">
  <script src="https://code.jquery.com/qunit/qunit-2.4.0.js"></script>
  <script src="index.php"></script>

  <script>
    
  	
 	var replacementText = QUnit.start("index.php", function(){
        QUnit.click("#testButton");
  			 return document.getElementById("replaceText").innerHTML;
  			});

  	QUnit.test("Test Message Change", function(assert, replacementText){
  		var testChangedMessage = "You clicked the button!";
  		/** var replacementText = function(){
  			"#testButton".trigger('click');
  			 return document.getElementById("replaceText").innerHTML;
  			}; **/

  		assert.equal(replacementText, testChangedMessage);
      done();
  	});



  </script>

  </head>
<body>
 
<div id="qunit"></div>
 
</body>
</html>