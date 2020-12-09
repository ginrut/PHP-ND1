<!-- /* 1: Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį: "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */ -->
<?php

$name = 'Vardenis';
$surname = 'Pavardenis';
$birthYear = 1920;
$currentYear = 2020;
$years = $currentYear - $birthYear;

echo "1. <b>Aš esu $name $surname. Man yra $years metai(ų).";
echo '<br> </b>';

// echo "Aš esu $name $surname. Man yra {$birthYear - $currentYear} metai(ų).";   šitaip neveikia :(

// 2. Naudokite funkcija rand() . Sukurkite du kintamuosius ir naudodamiesi // funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

$firstNum = rand(0, 4);
$secondNum = rand(0, 4);

if ($firstNum === 0 || $secondNum === 0){
    echo '2. Dalyba is nulio negalima <br>';
} elseif ($firstNum > $secondNum){
    $result = round($firstNum / $secondNum, 2);
   echo "2. Padalinus $firstNum is $secondNum gauname $result <br>";
} elseif ($secondNum > $firstNum){
    $result = round($secondNum / $firstNum, 2);
    echo "2. Padalinus $secondNum is $firstNum gauname $result <br>";
}
else echo '2. Abu skaiciai vienodi, padalinus viena is kito, gauname 1 <br>';

// 3. Naudokite funkcija rand() . Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$randNum1 = rand(0, 25);
$randNum2 = rand(0, 25);
$randNum3 = rand(0, 25);

if ($randNum1 > $randNum2 && $randNum2 > $randNum3 && $randNum1 > $randNum3){
    echo "3. Num1 = $randNum1, Num2 = $randNum2, Num3 = $randNum3 <br>";
    $midNum = $randNum2;
    echo "3. Vidurine reiksme $midNum <br>";
} elseif ($randNum1 < $randNum2 && $randNum2 < $randNum3 && $randNum1 < $randNum3){
    echo "3. Num1 = $randNum1, Num2 = $randNum2, Num3 = $randNum3 <br>";
    $midNum = $randNum2;
    echo "3. Vidurine reiksme $midNum <br>";
} elseif ($randNum1 < $randNum2 && $randNum2 > $randNum3 && $randNum1 > $randNum3){
    echo "3. Num1 = $randNum1, Num2 = $randNum2, Num3 = $randNum3 <br>";
    $midNum = $randNum1;
    echo "3. Vidurine reiksme $midNum <br>";
} elseif ($randNum1 > $randNum2 && $randNum2 < $randNum3 && $randNum1 < $randNum3){
    echo "3. Num1 = $randNum1, Num2 = $randNum2, Num3 = $randNum3 <br>";
    $midNum = $randNum1;
    echo "3. Vidurine reiksme $midNum <br>";
} elseif ($randNum1 > $randNum2 && $randNum2 < $randNum3 && $randNum1 > $randNum3){
    echo "3. Num1 = $randNum1, Num2 = $randNum2, Num3 = $randNum3 <br>";
    $midNum = $randNum3;
    echo "3. Vidurine reiksme $midNum <br>";
} else
//  ($randNum1 < $randNum2 && $randNum2 > $randNum3 && $randNum1 < $randNum3){
    echo "3. Num1 = $randNum1, Num2 = $randNum2, Num3 = $randNum3 <br>";
    $midNum = $randNum3;
    echo "3. Vidurine reiksme $midNum <br>";
// };

// Algimanto variantas 
// $vienas = rand(0, 25);
// $du = rand(0, 25);
// $trys = rand(0, 25);
// echo "first: $vienas <br>";
// echo "second: $du<br>";
// echo "third: $trys<br>";
// if ($vienas < $du) {​​​​​
//     $tmp = $vienas;
//     $vienas = $du;
//     $du = $tmp;
// }​​​​​
// if ($vienas < $trys) {​​​​​
//     $tmp = $vienas;
//     $vienas = $trys;
//     $trys = $tmp;
// }​​​​​
// if ($du < $trys) {​​​​​
//     $tmp = $du;
//     $du = $trys;
//     $trys = $tmp;
// }​​​​​
// echo 'vidurinis:'. $du;


// Mareko variamntas:
// $num1 = rand(0, 25);
// $num2 = rand(0, 25);
// $num3 = rand(0, 25);
// echo "$num1, $num2, $num3, vidurinio kintamojo reikšmė: ";

// if ($num1 == $num2) {​​
//     echo $num1;
// }​​ elseif ($num2 == $num3) {​​
//     echo $num2;
// }​​ elseif ((($num1 <=> $num2) + ($num3 <=> $num1))) {​​
//     echo $num1;
// }​​ elseif ((($num2 <=> $num1) + ($num3 <=> $num2))) {​​
//     echo $num2;
// }​​ elseif ((($num3 <=> $num1) + ($num2 <=> $num3))) {​​
//     echo $num3;
// }​​

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.
// Triangle Inequality Theorem: a+b > c, a+c > b, and b+c > a;

$lineA = rand(1, 10);
$lineB = rand(1, 10);
$lineC = rand(1, 10);

if ($lineA + $lineB > $lineC && $lineA + $lineC > $lineB && $lineC + $lineB > $lineA){
    echo "4. Trikampis galimas. A krastines ilgis $lineA, B krastines ilgis $lineB, C krastines ilgis $lineC <br>";
} else echo "4. Trikampis negalimas. A krastines ilgis $lineA, B krastines ilgis $lineB, C krastines ilgis $lineC <br>";

// 5.Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$numb1 = rand(0, 2);
$numb2 = rand(0, 2);
$numb3 = rand(0, 2);
$numb4 = rand(0, 2);

$null = 0;
$one = 0;
$two = 0;

if ($numb1 === 0 ) {
    $null++;
} elseif($numb1 === 1 ){
    $one++;
} else ($numb1 === 2){
    $two++
};

if($numb2 === 0 ){
    $null++;
} elseif($numb2 === 1 ){
    $one++;
} else($numb2 === 2){
    $two++
};

if($numb3 === 0 ) {
    $null++;
} elseif($numb3 === 1 ){
    $one++;
} elseif($numb3 === 2){
    $two++;
}; 

if($numb4 === 0 ) {
    $null++;
} elseif($numb4 === 1 ){
    $one++;
} elseif($numb4 === 2){
    $two++;
};

echo "5. Nuliu yra $null, vienetu yra $one, dvejetu yra $two <br>";

// Marek variantas<br>5...............................<br>';

// $num1 = rand(0, 2);
// $num2 = rand(0, 2);
// $num3 = rand(0, 2);
// $num4 = rand(0, 2);
// $count0 = $count1 = $count2 = 0;
// ${​​'count' . $num1}​​++;
// ${​​'count' . $num2}​​++;
// ${​​'count' . $num3}​​++;
// ${​​'count' . $num4}​​++;
// echo "0 kartų: $count0<br> 1 kartų: $count1 <br> 2 kartų: $count2";

// 6. Naudokite funkcija rand() . Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$number = rand (1, 6);
echo "6. Random numeber $number in h tag <br>";
echo "<h3>$number<h3> <br>";

// 7. Naudokite funkcija rand() . Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.

$numbr1 = rand(-10, 10);
$numbr2 = rand(-10, 10);
$numbr3 = rand(-10, 10);

if ($numbr1 < 0){
    echo "<font color='green'>7. First number is $numbr1.</font> <br>";
} elseif ($numbr1 === 0){
    echo "<font color='red'>7. First number is $numbr1.</font> <br>";
} else  
    echo "<font color='blue'>7. First number is $numbr1.</font> <br>";

if ($numbr2 < 0){
    echo "<font color='green'>7. Second number is $numbr2.</font> <br>";
} elseif ($numbr2 === 0){
    echo "<font color='red'>7. Second number is $numbr2.</font> <br>";
} else  
    echo "<font color='blue'>7. Second number is $numbr2.</font> <br>";

if ($numbr3 < 0){
    echo "<font color='green'>7. Third number is $numbr3.</font> <br>";
} elseif ($numbr3 === 0){
    echo "<font color='red'>7. Third number is $numbr3.</font> <br>";
} else  
    echo "<font color='blue'>7. Third number is $numbr3.</font> <br>";


// Rositos variantas:
//     $f = rand(-10, 10);
//     $s = rand(-10, 10);
//     $t = rand(-10, 10);

//     $fColor = ($f < 0) ? "green" : ($f == 0 ? "red" : "blue");
//     $sColor
//      = ($s < 0) ? "green" : ($s == 0 ? "red" : "blue");
//     $tColor = ($t < 0) ? "green" : ($t == 0 ? "red" : "blue");

//     echo "<p> <font color=$fColor>$f</font> </p>", 
//         "<p> <font color=$sColor>$s</font> </p>", 
//         "<p> <font color=$tColor>$t</font> </p>";

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite rand() funkcija nuo 5 iki 3000.

$zvakiuKiekis = rand(5, 3000);

If ($zvakiuKiekis > 1000){
    $naujaKaina = $zvakiuKiekis * 0.97;
    echo "8. Nupirko $zvakiuKiekis zvakiu uz $naujaKaina EUR <br>";
} elseif ($zvakiuKiekis > 2000){
    $naujaKaina = $zvakiuKiekis * 0.96;
    echo "8. Nupirko $zvakiuKiekis zvakiu uz $naujaKaina EUR <br>";
} else echo "8. Nupirko $zvakiuKiekis uz $zvakiuKiekis EUR <br>";

// 9. Naudokite funkcija rand() . Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$number1 = rand(0, 100);
$number2 = rand(0, 100);
$number3 = rand(0, 100);

$average = ($number1 + $number2 + $number3) / 3;
echo "9A. Pirmas skaicius = $number1, antras skaicius = $number2, trecias skaicius $number3. Vidurkis= $average <br>";

// antra dalis uzdavinio, nesigavo 

// if ($number1 < 10 || $number1 > 90){
//     $average2 = ($number2 + $number3) / 2;
//     echo "9B. Pirmas skaicius = $number1, antras skaicius = $number2, trecias skaicius $number3. Vidurkis, neskaiciuojant pirmo= $average2 <br>";
// } elseif ($number2 < 10 || $number2 > 90){
//     $average2 = ($number1 + $number3) / 2;
//     echo "9B. Pirmas skaicius = $number1, antras skaicius = $number2, trecias skaicius $number3. Vidurkis, neskaiciuojant antro= $average2 <br>";
// } else ($number3 < 10 || $number3 > 90){
//     $average2 = ($number1 + $number2) / 2;
//     echo "9B. Pirmas skaicius = $number1, antras skaicius = $number2, trecias skaicius $number3. Vidurkis, neskaiciuojant trecio= $average2 <br>";
// };

// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand() . Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$valanda = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 50);
$pridetosSekundes = rand(0, 300);

echo "10A. Laikrodis rodo: $valanda val., $minutes min, $sekundes s. <br>";

$laikas = $valanda. $minutes. $sekundes;
$laikasSekundemis = $valanda * 3600 + $minutes * 60 + $sekundes;
$pridetinisLaikas= $laikasSekundemis + $pridetosSekundes;

$naujaValanda = $pridetinisLaikas / 3600 % 60;
$naujaMinutes = $pridetinisLaikas / 60 % 60;
$naujaSekundes = $pridetinisLaikas % 60;

echo "10B. Naujas laikas, pridejus $pridetosSekundes s: $naujaValanda val., $naujaMinutes min., $naujaSekundes s. <br>";

// 11. Naudokite funkcija rand() . Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA .

$raNum1 = rand(1000, 9999);
$raNum2 = rand(1000, 9999);
$raNum3 = rand(1000, 9999);
$raNum4 = rand(1000, 9999);
$raNum5 = rand(1000, 9999);
$raNum6 = rand(1000, 9999);

echo "11. $raNum1, $raNum2, $raNum3, $raNum4, $raNum4, $raNum5, $raNum6 <br>";

$minToMax = array($raNum1, $raNum2, $raNum3, $raNum4, $raNum4, $raNum5, $raNum6);
sort($minToMax);
print_r ($minToMax);

