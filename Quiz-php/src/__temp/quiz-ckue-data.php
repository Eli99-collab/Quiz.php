<?php
echo "hello";
function qchris_data() {
    return array(
        'introduction' => qchris_introductionData(),
        'questions' => qchris_questionData(),
        'report' => qchris_reportData()
    );
}

function qchris_introductionData() {
    return array(
        'title' => "My First Quiz",
        'description' => "Just do it ...",
        'imageURL' => "/yasser_Quiz/images/MSC-Splendida-2.jpg",
        'nextAction' => 'question.php',
        'questionID' => 'q0'
    );
}

function qchris_questionData() {
    return array(
        'q0' => qchris_q0(),
        'q1' => qchris_q1(),
        'q2' => qchris_q2(),
        'q3' => qchris_q3(),
        'q4' => qchris_q4(),
        'q5' => qchris_q5(),
        'q6' => qchris_q6(),
        'q7' => qchris_q7(),
        'q8' => qchris_q8(),
    );  

}

function qchris_q0() {
    return array(
        'text' => "Wie heißt die Hauptstadt der Slowakei?",
        'answers' => array(
            array("Sofia", 0),
            array("Prag", 0),
            array("Bratislava", 1),
            array("Ljubljan", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q1'
    );
}

function qchris_q1() {
    return array(
        'text' => "Wie viele Zähne hat ein erwachsener Mensch normalerweise?",
        'answers' => array(
            array(26, 0),
            array(30, 0),
            array(32, 1),
            array(36, 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q2'
    );
}
function qchris_q2() {
    return array(
        'text' => "Wer wählt den Bundespräsidenten?",
        'answers' => array(
            array("Bundeskanzler", 0),
            array("Bundestag", 0),
            array("Bundesrat", 0),
            array("Bundesversammlung", 1)
            
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q3'
        
    );
}
function qchris_q3() {
    return array(
        'text' => "Wofür steht die Abkürzung KGaA?",
        'answers' => array(
            array("Kreditgesellschaft auf Aktien", 0),
            array("Kommanditgesellschaft auf Aktien", 1),
            array("Kardinalgesellschaft auf Aktien", 0),
            array("Kompetenzgesellschaft auf Aktien", 0) 
          
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q4'
        
    );
} 
function qchris_q4() {
    return array(
        'text' => "Wie hoch ist die Mehrwertsteuer in Deutschland? (Vor der Senkung durch das Konjukturpaket?",
        'answers' => array(
            array("16 Prozent", 0),
            array("17 Prozent", 0),
            array("18 Prozent", 0),
            array("19 Prozent", 1)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q5'
    );
} 
function qchris_q5() {
    return array(
        'text' => "Welches Land ist kein ständiges Mitglied im Sicherheitsrat der Vereinten Nationen?",
        'answers' => array(
            array("USA", 0),
            array("Russland", 0),
            array("Deutschland", 1),
            array("China", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q6'
    );
}
function qchris_q6() {
    return array(
        'text' => "Which of these animals does not hibernate?",
        'answers' => array(
            array("Squirrel", 1),
            array("bat", 0),
            array("Hedgehog", 0),
            array("Dormouse", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q7'
    );
}
function qchris_q7() {
    return array(
        'text' => "In which unit is the electrical resistance measured?",
        'answers' => array(
            array(" Ohm", 1),
            array(" volts", 0),
            array("Amps", 0),
            array("watts", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q8'
    );
}
function qchris_q8() {
    return array(
        'text' => "What is the name of the capital of Thuringia?",
        'answers' => array(
            array(" Magdeburg, ", 0),
            array("Erfurt ", 1),
            array("Dresden", 0),
            array("Potsdam", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q9'
    );
}

function qchris_q9() {
    return array(
        'text' => "Which Animal has 500 Teeth?",
        'answers' => array(
            array("shark", 0),
            array("Dinosaur", 0),
            array("Nigersaurus", 1),
            array("Camels", 0)
            
        ),
        'nextAction' => 'report.php'
        
    );
}
function qchris_reportData() {
    return array(
        'title' => "Tier Quiz",
        'text' => "That was a  performance!",
        'feedback_40' => "lousy",
        'feedback_60' => "mediocre",
        'feedback_80' => "super!!!",
        'imageURL' => "/src/images/bild.jpg"
    );
}


?>