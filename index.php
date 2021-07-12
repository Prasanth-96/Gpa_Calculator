<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#5d6b9c" />
  <title>CGPA Result Forecaster</title>
  <!--FONT-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet" />
  <!-- FAVICON -->
  <link rel="shortcut icon" href="./images/calculator-logo-72.png" type="image/x-icon" />
  <!--STYLESHEET-->
  <link rel="stylesheet" href="./css/style.css" />
  <!--MANIFEST-->
  <link rel="manifest" href="manifest.json" />
  <link rel="apple-touch-icon" href="images/calculator-logo.png" />
</head>

<body>
  <noscript>JavaScript is required to use this page</noscript>

  <main class="container">
    <div class="bg"></div>
    <div class="title">
      <h1>GPA Calculator</h1>
      <p>
        Here Add your Score to calculate GPA
      </p>
      <button class="help">Need help?</button>
    </div>

    <div class="overall-output">
      <div>
        <div class="error" aria-label="hidden">
          <p>Please fill All input field</p>
        </div>
        <section class="calc__main">
          <div class="calc__main__heading">
            <div class="modal">
              <h2>Please fill the form</h2>
              <p id="formError"></p>
              <form action="/" method="GET">
                <div>
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" placeholder="First name" required autocomplete="name" />
                </div>
                <div>
                  <label for="years">Years of Program:</label>
                  <input type="number" name="years" id="years" placeholder="4 years" required />
                </div>
                <button type="submit" class="submitBtn">Submit</button>
              </form>
            </div>
            <h2>
              <span class="semester">1st</span> Semester -

            </h2>

            <div>

              <label for="numAdd">Enter Number of Courses/Subjects to be added:</label>
              <input type="number" name="numAdd" class="numAdd" value="2" /><br>

            </div>
          </div>

          <div class="display">
            <div class="display__heading">
              <h3>Course Code</h3>
              <h3>Credit Unit</h3>
              <h3>Grade</h3>
            </div>

            <div class="display__output">
              <div class="display__output__container">
                <input type="text" name="courseCode" class="courseCode" placeholder="e.g. Course 1" />

                <select class="creditUnit">
                  <option value="0">0</option>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>

                <select class="grade">
                  <option value="A+">A+</option>
                  <option value="A">A</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B">B</option>
                  <option value="B-">B-</option>
                  <option value="C+">C+</option>
                  <option value="C">C</option>
                  <option value="C-">C-</option>
                  <option value="D">D</option>
                  <option value="F">F</option>
                </select>
              </div>
              <div class="display__output__container">
                <input type="text" name="courseCode" class="courseCode" placeholder="e.g. Course 1" />

                <select class="creditUnit">
                  <option value="0">0</option>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>

                <select class="grade">
                  <option value="A+">A+</option>
                  <option value="A">A</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B">B</option>
                  <option value="B-">B-</option>
                  <option value="C+">C+</option>
                  <option value="C">C</option>
                  <option value="C-">C-</option>
                  <option value="D">D</option>
                  <option value="F">F</option>
                </select>
              </div>
            </div>
          </div>

          <div class="cal__btns">
            <button class="add">Add</button>
            <button class="calculate">Calculate</button>
            <button class="undo">Undo</button>
          </div>
        </section>

        <section class="calc__display">
          <div>
            <h3>Total Unit</h3>
            <p class="totalUnit">0</p>
          </div>
          <div>
            <h3>GPA</h3>
            <p class="gpaScore">0</p>
          </div>
          <div>
            <h3>CGPA</h3>
            <p class="cgpaScore">0</p>
          </div>
        </section>

        <section class="resultContinue result__continue">
          <h4>Would you like to calculate for another level?</h4>
          <div>
            <button class="yesBtn">Yes</button>
            <button class="noBtn">No - Forecast Score</button>
          </div>
        </section>

        <section class="displayResult display__result modalResult-bg"></section>

        <!-- <div class="modal-bg">
            <div class="modal">
              <h2>Please fill the form</h2>
              <p id="formError"></p>
              <form action="/" method="GET">
                <div>
                  <label for="name">Name:</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="First name"
                    required
                    autocomplete="name"
                  />
                </div>
                <div>
                  <label for="years">Years of Program:</label>
                  <input
                    type="number"
                    name="years"
                    id="years"
                    placeholder="4 years"
                    required
                  />
                </div>
                <button type="submit" class="submitBtn">Submit</button>
              </form>
            </div>
          </div> -->

        <div id="modal">
          <div class="guide-modal">
            <button aria-label="close modal" class="cancelBtn">
              &times;
            </button>
            <div class="modal__content">
              <h2>How to use <span>CGPA Result Forecaster</span></h2>
              <ul>
                <li>
                  <b>&star;</b> Add the number of columns you want (i.e. the
                  number of courses you want to calculate for) by clicking on
                  the <kbd>Enter</kbd> key or the <span>Add</span> button.
                </li>
                <li>
                  <b>&star;</b> Enter the course code for your respective
                  courses.
                </li>
                <li>
                  <b>&star;</b> Select the corresponding credit units and
                  grades score.
                </li>
                <li>
                  <b>&star;</b> Click on <span>Calculate</span> to calculate
                  your GPA and CGPA. You should now see your GPA and CGPA
                  displayed below.
                </li>
                <li>
                  <b>&star;</b>
                  If you wish to undo the current calculation, click on the
                  <span>Undo</span> button.
                </li>
                <li>
                  <b>&star;</b> After calculation, a pop up will appear.
                </li>
                <li>
                  <b>&star;</b> If you want to calculate your GPA/CGPA for
                  another semester, simply click on <span>Yes</span>, else
                  click on <span>No - Forecast Score</span> to display your
                  average score to end up with a 1st, 2nd upper/lower class.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>

  </footer>

  <script src="main.js"></script>
</body>

</html>