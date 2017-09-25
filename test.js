test.begin("Text Change Test", 1, function(){
  start("https://sara-circleci.herokuapp.com", function(){
        document.getElementById("testButton").click();
        var replacementText = document.getElementById("replaceText").innerHTML;
        var testChangedMessage = "You clicked the button!";

        test.equals(replacementText, testChangedMessage);
    }).run(funtion(){
      test.done();
    });
});
