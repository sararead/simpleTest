casper.options.viewportSize = {width: 1024, height: 768};
casper.test.begin("Text Change Test", 1, function buttonTest(test) {
    casper.start("https://sara-circleci.herokuapp.com/", function() {
      //Click Button
      casper.click('#testButton');

      //Check for text change

      test.assertSelectorHasText('#replaceText', "You clicked the button!");
    }).run(function() {
        test.done();
    });
});
