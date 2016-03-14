<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title> Php Quiz </title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>


<body>

  <form action="process.php" method="post" id="1">

  <ol>
    <li>
        <h3> What does 'HTML' stand for? </h3>
        <div>
          <input type="radio" name='answerOne' id='answerOne' value='a'/>
          <label for="answerOnea"> A) Hyper text markup language </label>

          <input type="radio" name='answerOne' id='answerOne' value='b'/>
          <label for="answerOneb"> B) Happy text markup language </label>

          <input type="radio" name='answerOne' id='answerOne' value='c'/>
          <label for="answerOnec"> C) Hard text markup language </label>
        </div>
    </li>

    <li>
        <h3> What originally did 'PHP' stand for? </h3>
        <div>
          <input type="radio" name='answerTwo' id='answerTwo' value='a'/>
          <label for="answerTwoa"> A)Package Hunt Process </label>

          <input type="radio" name='answerTwo' id='answerTwo' value='b'/>
          <label for="answerTwob"> B) Pow Ham Pow</label>

          <input type="radio" name='answerTwo' id='answerTwo' value='c'/>
          <label for="answerTwoc"> C) Personal Home Page </label>
        </div>
    </li>

    <li>
        <h3> What does 'CSS' stand for? </h3>
        <div>
          <input type="radio" name='answerThree' id='answerThree' value='a'/>
          <label for="answerThreea"> A)Circus Sale Simpsons </label>

          <input type="radio" name='answerThree' id='answerThree' value='b'/>
          <label for="answerThreeb"> B) Cascading Snake Sheet</label>

          <input type="radio" name='answerThree' id='answerThree' value='c'/>
          <label for="answerThreec"> C) Cascading Style Sheet</label>
        </div>
    </li>

    <input type="submit" value="submit" name="submit">
  </ol>



  </form>
</body>
</html>
