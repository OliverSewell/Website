function print(message) {
  document.write(message);
}

  var questions = [
    ['What color is the sky ?' , 'blue'],
    ['How many states in the usa ?' , 50],
    ['What is 7 x 9 ?' , 63],
    ['Does 932 + 1432 = 2367 ?' , 'false'],
    ['What shape is a 50p ?' , 'heptagon'],
    ['What is 12 x 12 ?' , 144],
    ['How many weeks in a year ?' , 52]
  ];

  var correctAnswers = 0;
  var question;
  var answer;
  var response;
  var html;

  var incorrectAnswers = 0;

  for (var i = 0; i < questions.length; i++) {
    question = questions[i][0];
      answer = questions[i][1];
    response = prompt(question);

      if(response == answer) {
        correctAnswers += 1;
      }

      if(response != answer) {
        incorrectAnswers += 1;
      }
  }

  var questionsAndAnswers = questions.join('<br>');

  html = "You got " + correctAnswers + " questions correct and " + incorrectAnswers + " incorrect <br>";
  html += " <p><br> Here are the correct answers:  <br></p>" + questionsAndAnswers;
  print(html);
