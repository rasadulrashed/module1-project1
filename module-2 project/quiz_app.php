<?php

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    for ($i = 0; $i < count($questions); $i++) {
        if ($answers[$i] === $questions[$i]['correct']) {
            $score++;
        }
    }
    return $score;
}

// Define quiz questions
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

// Collect user answers
$userAnswers = [];
foreach ($questions as $index => $question) {
    echo $question['question'] . "\n";
    echo "Your answer: ";
    $userAnswers[$index] = readline();
}

// Evaluate score
$score = evaluateQuiz($questions, $userAnswers);

// Display results
echo "\nYou scored " . $score . " out of " . count($questions) . ".\n";

// Provide feedback
if ($score === count($questions)) {
    echo "Excellent job!";
} elseif ($score > count($questions) / 2) {
    echo "Good effort!";
} else {
    echo "Better luck next time!";
}

