<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 10px;
            padding: 100px;
            
            margin-top: 50px;
            background-image: url("images/question.jpg");
            background-size: cover;
            background-position: center;
        }
        .question {
            font-size: 40px;
            margin-bottom: 5px;
            margin: 10px;
            padding: 30px;
        }

        .options {
            list-style-type: none;
            padding: 10px;
            margin: 0;
        }

        .options li {
            margin-bottom: 5px;
        }

        .options li input[type="radio"] {
            margin-right: 5px;
        }

        .submit-btn {
            margin-top: 20px;
        }

        .timer {
            font-size: 20px;
            position: absolute;
            top: 10px;
            right: 10px;
            background-color:red;

        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var timerDisplay = document.querySelector(".timer");
            var timeInSeconds = 120; // 2 minutes
            var timerInterval;

            function startTimer() {
                timerInterval = setInterval(updateTimer, 1000);
            }

            function updateTimer() {
                var minutes = Math.floor(timeInSeconds / 60);
                var seconds = timeInSeconds % 60;
                timerDisplay.textContent = "Time Remaining: " + formatTime(minutes) + ":" + formatTime(seconds);

                if (timeInSeconds <= 0) {
                    clearInterval(timerInterval);
                    endTest();
                } else {
                    timeInSeconds--;
                }
            }

            function formatTime(time) {
                return time < 10 ? "0" + time : time;
            }

            function endTest() {
                clearInterval(timerInterval);
                calculateScore();
            }

            var submitBtn = document.querySelector(".submit-btn");
            submitBtn.addEventListener("click", function() {
                clearInterval(timerInterval);
                calculateScore();
            });

            startTimer();

            function calculateScore() {
                var questions = document.querySelectorAll(".question");
                var totalQuestions = questions.length;
                var correctAnswers = 0;

                for (var i = 0; i < questions.length; i++) {
                    var selectedOption = document.querySelector('input[name="option' + (i + 1) + '"]:checked');

                    if (selectedOption !== null && selectedOption.value === questions[i].dataset.correctAnswer) {
                        correctAnswers++;
                    }
                }

                var scoreMessage = "You scored " + correctAnswers + " out of " + totalQuestions + " correct answers.";
                alert(scoreMessage);
                window.location.href = "subjects.php";
            }
        });
    </script>
</head>
<body>
<header><h1>DSA Quiz</h1><header>
    <div class="timer">Time Remaining: 02:00</div>
    <div>
        <?php
            $hostname = 'localhost';
            $database = 'myquizgame';
            $dbUsername = 'root';
            $dbPassword = '';

            $connection = new mysqli($hostname, $dbUsername, $dbPassword, $database);

            if ($connection->connect_error) {
                die('Connection failed: ' . $connection->connect_error);
            }

            $query = "SELECT Question_id, question, option1, option2, option3, option4, correct_answer FROM dsaquiz";
            $result = $connection->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="question" data-correct-answer="' . $row['correct_answer'] . '">'.$row['Question_id'].". ". $row['question'] . '</div>';

                    echo '<ul class="options">';
                    echo '<li><input type="radio" name="option' . $row['Question_id'] . '" value="' . $row['option1'] . '">' . $row['option1'] . '</li>';
                    echo '<li><input type="radio" name="option' . $row['Question_id'] . '" value="' . $row['option2'] . '">' . $row['option2'] . '</li>';
                    echo '<li><input type="radio" name="option' . $row['Question_id'] . '" value="' . $row['option3'] . '">' . $row['option3'] . '</li>';
                    echo '<li><input type="radio" name="option' . $row['Question_id'] . '" value="' . $row['option4'] . '">' . $row['option4'] . '</li>';
                    echo '</ul>';
                }
            }

            $connection->close();
        ?>
        <button class="submit-btn" type="button">Submit</button>
        <button class="submit-btn" type="button" onclick="endTest()">End test</button>

    </div>
    <script>
        function endTest() {
            window.location.href="subjects.php";
        }
    </script>
</body>
</html>
