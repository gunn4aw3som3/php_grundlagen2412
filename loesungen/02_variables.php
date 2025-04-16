<?php

// -----------------------------------------------
// 1. GRUNDLAGEN: Variablen definieren und ausgeben
// -----------------------------------------------

// Aufgabe 1:
// Erstelle eine Variable $vorname mit deinem Namen und gib sie mit echo aus.

$vorname = 'Manuel';


// Aufgabe 2:
// Erstelle drei Variablen mit unterschiedlichen Datentypen (String, Zahl, Boolean).
// Gib alle Werte mit echo aus.
$string = 'string';
$int = 123;
$bool = true;

// -----------------------------------------------
// 2. VARIABLENNAMEN UND KONVENTIONEN
// -----------------------------------------------

// Aufgabe 1:
// Welche der folgenden Variablennamen sind gültig?
// Kommentiere die ungültigen mit // aus.
//$1name = "";
//$_name = "";

//$Name = "";
//$straße = "";
//$my-var = "";
$userName = "";

// Aufgabe 2:
// Benenne die Variable $benutzername nach Snake Case um.
$benutzer_name = "";


// Aufgabe 3:
// Benenne die Variable $benutzername nach Camel Case um.
$benutzerName = "";


// -----------------------------------------------
// 3. VARIABLEN ÜBERSCHREIBEN UND ZUWEISUNGEN
// -----------------------------------------------

// Aufgabe 1:
// Erstelle die Variable $status mit dem Wert "online".
// Ändere später den Wert zu "offline" und gib beide Werte aus.
$status = 'online';
echo $status;
$status = 'offline';
echo $status;



// Aufgabe 2:
// Was wird hier ausgegeben? Erkläre das Ergebnis.
$zahl = 5;
$zahl = $zahl + 3;
echo $zahl;


// -----------------------------------------------
// 4. MATHEMATISCHE OPERATIONEN & KURZSCHREIBUNG
// -----------------------------------------------

// Aufgabe 1:
// Erhöhe den Punktestand um 5.
$punktestand = 10;
//$punktestand = $punktestand + 5;  Das gleiche wie zeile 74
$punktestand += 5;

// Aufgabe 2:
// Verringere den Punktestand um 3.
//$punktestand = $punktestand -3;
$punktestand -= 3;
// Aufgabe 3:
// Verdopple den Punktestand.
//$punktestand = $punktestand + $punktestand;
//$punktestand = $punktestand * 2;
$punktestand *= 2;

// Aufgabe 4:
// Teile den Punktestand durch 2.
//$punktestand = $punktestand / 2;
$punktestand /= 2;

// Aufgabe 5:
// Erhöhe den Punktestand um 1 mit ++.
//$punktestand = $punktestand + 1;
//$punktestand += 1;
//++$punktestand;
$punktestand++;

// Aufgabe 6:
// Verringere den Punktestand um 1 mit --.
//$punktestand = $punktestand - 1;
//$punktestand -= 1;
--$punktestand;

// -----------------------------------------------
// 6. VARIABLEN IN BERECHNUNGEN
// -----------------------------------------------

// Aufgabe 1:
// Erstelle zwei Variablen $preis_pro_stück = 4 und $anzahl = 3.
// Berechne den Gesamtpreis und gib ihn aus.
$preis_pro_stück = 4;
$anzahl = 3;
$gesamt = $preis_pro_stück * $anzahl;  # 4 * 3 = 12
echo $gesamt;



// Aufgabe 2:
// Ändere die Anzahl auf 5 und berechne den neuen Gesamtpreis.
$anzahl = 5;
$gesamt = $preis_pro_stück * $anzahl;  # 4 * 5 = 20
echo $gesamt;
// -----------------------------------------------
// 7. WERTE TAUSCHEN
// -----------------------------------------------

// Aufgabe:
// Erstelle zwei Variablen $a = 5 und $b = 10.
// Tausche die Werte mithilfe einer dritten Variable.

$a = 5;
$b = 10;

$zwischen = $a;
$a = $b;
$b = $zwischen;



// -----------------------------------------------
// 8. BONUS: GEHALTSBERECHNUNG
// -----------------------------------------------

// Aufgabe:
// Berechne das Nettogehalt.
// - Grundgehalt: 2500 €
// - Abzüge: 52% vom Bruttobetrag

$grundgehalt = 2500;
$abzuege_in_pro = 52;
$netto_in_pro = 100 - $abzuege_in_pro;
//$netto_gehalt = $grundgehalt - $grundgehalt /100 * $abzuege_in_pro;

$netto_gehalt = $grundgehalt * $netto_in_pro /100;

echo "\n";
echo $netto_gehalt;
