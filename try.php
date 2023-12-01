<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
      font-family: 'Arial', sans-serif;
    }

    #question-container {
      text-align: center;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    #question {
      font-size: 1.8em;
      margin-bottom: 20px;
    }

    .reaction-container {
      display: flex;
      justify-content: space-around;
    }

    .reaction {
      text-align: center;
    }

    .reaction img {
      width: 100px; /* Adjust the size as needed */
      margin-top: 10px;
    }

    .word {
      font-size: 1.2em;
      margin-top: 10px;
    }
  </style>
</head>
<body>

<div id="question-container">
  <p id="question">❓ How are you feeling today? ❓</p>
  <div class="reaction-container">
    <div class="reaction">
      <img class="img1" src="./images/EMOJI/1.png" alt="Feeling">
      <p class="word">Happy</p>
    </div>
    <div class="reaction">
      <img class="img2" src="./images/EMOJI/2.png" alt="Feeling">
      <p class="word">Excited</p>
    </div>
    <div class="reaction">
      <img class="img3" src="./images/EMOJI/3.png" alt="Feeling">
      <p class="word">Relaxed</p>
    </div>
    <div class="reaction">
      <img class="img4" src="./images/EMOJI/4.png" alt="Feeling">
      <p class="word">In Love</p>
    </div>
    <div class="reaction">
      <img class="img5" src="./images/EMOJI/5.png" alt="Feeling">
      <p class="word">Grateful</p>
    </div>
  </div>
</div>

</body>
</html>
