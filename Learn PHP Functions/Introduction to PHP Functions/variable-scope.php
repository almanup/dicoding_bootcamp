<?php
//Alman Azizi
$language = "PHP";
$topic = "scope";
//2255201001
function generateLessonName($concept)
{
    global $language;
    return $language . ": " . $concept;
}

echo generateLessonName($topic);
//Kelas B