<?php
$Cards = array(
"2H" => 2,
"2D" => 2,
"2C" => 2,
"2S" => 2,
"3H" => 3,
"3D" => 3,
"3C" => 3,
"3S" => 3,
"4H" => 4,
"4D" => 4,
"4C" => 4,
"4S" => 4,
"5H" => 5,
"5D" => 5,
"5C" => 5,
"5S" => 5,
"6H" => 6,
"6D" => 6,
"6C" => 6,
"6S" => 6,
"7H" => 7,
"7D" => 7,
"7C" => 7,
"7S" => 7,
"8H" => 8,
"8D" => 8,
"8C" => 8,
"8S" => 8,
"9H" => 9,
"9D" => 9,
"9C" => 9,
"9S" => 9,
"10H" => 10,
"10D" => 10,
"10C" => 10,
"10S" => 10,
"JH" => 10,
"JD" => 10,
"JC" => 10,
"2S" => 10,
"QH" => 10,
"QD" => 10,
"QC" => 10,
"QS" => 10,
"KH" => 10,
"KD" => 10,
"KC" => 10,
"KS" => 10,
"AH" => 1,
"AD" => 1,
"AC" => 1,
"AS" => 1
);

$CardFace = array(
"2H" => "imgs/hearts/2.png",
"2D" => "imgs/diamonds/2.png",
"2C" => "imgs/clubs/2.png",
"2S" => "imgs/spades/2.png",
"3H" => "imgs/hearts/3.png",
"3D" => "imgs/diamonds/3.png",
"3C" => "imgs/clubs/3.png",
"3S" => "imgs/spades/3.png",
"4H" => "imgs/hearts/4.png",
"4D" => "imgs/diamonds/4.png",
"4C" => "imgs/clubs/4.png",
"4S" => "imgs/spades/4.png",
"5H" => "imgs/hearts/5.png",
"5D" => "imgs/diamonds/5.png",
"5C" => "imgs/clubs/5.png",
"5S" => "imgs/spades/5.png",
"6H" => "imgs/hearts/6.png",
"6D" => "imgs/diamonds/6.png",
"6C" => "imgs/clubs/6.png",
"6S" => "imgs/spades/6.png",
"7H" => "imgs/hearts/7.png",
"7D" => "imgs/diamonds/7.png",
"7C" => "imgs/clubs/7.png",
"7S" => "imgs/spades/7.png",
"8H" => "imgs/hearts/8.png",
"8D" => "imgs/diamonds/8.png",
"8C" => "imgs/clubs/8.png",
"8S" => "imgs/spades/8.png",
"9H" => "imgs/hearts/9.png",
"9D" => "imgs/diamonds/9.png",
"9C" => "imgs/clubs/9.png",
"9S" => "imgs/spades/9",
"10H" => "imgs/hearts/10.png",
"10D" => "imgs/diamonds/10.png",
"10C" => "imgs/clubs/10.png",
"10S" => "imgs/spades/10.png",
"JH" => "imgs/hearts/11.png",
"JD" => "imgs/diamonds/11.png",
"JC" => "imgs/clubs/11.png",
"JS" => "imgs/spades/11.png",
"QH" => "imgs/hearts/12.png",
"QD" => "imgs/diamonds/12.png",
"QC" => "imgs/clubs/12.png",
"QS" =>"imgs/spades/12.png",
"KH" => "imgs/hearts/13.png",
"KD" => "imgs/diamonds/13.png",
"KC" => "imgs/clubs/13.png",
"KS" => "imgs/spades/13.png",
"AH" => "imgs/hearts/1.png",
"AD" => "imgs/diamonds/1.png",
"AC" => "imgs/clubs/1.png",
"AS" => "imgs/spades/1.png"
);

$inc = 0;
shuffle($Cards);

function deal()
{
    global $Cards , $inc;
    return ($Cards[$inc++]); 
}

function newGame()
{
     global $inc;
     shuffle($Cards);
     $inc = 0;
}

function getVal($value)
{
    global $Cards;
    return $Cards[$value];
}

function getFace($face)
{
    global $CardFace;
    return $CardFace[$face];
}
    
?>
