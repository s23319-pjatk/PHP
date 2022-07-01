<!DOCTYPE html>
<html lang="pl">
<body>
<H2>Zadanie 1</H2>
<form action="#" method="POST">
    <label for="liczba1">Liczba 1</label>
    <label>
        <input type="text" name="a">
    </label><br>
    <label for="liczba2">Liczba 2</label>
    <label>
        <input type="text" name="b">
    </label><br>
    <label>
        <select name="dzwigowy">
            <option value="dodawanie">Dodawanie</option>
            <option value="odejmowanie">Odejmowanie</option>
            <option value="mnozenie">Mnozenie</option>
            <option value="dzielenie">Dzielenie</option>
        </select>
    </label><br>
    <input type="submit" value="Oblicz">
</form>
<?php
$a = intval($_POST["a"]);
$b = intval($_POST["b"]);
$dzwig = $_POST["dzwigowy"];
if (isset($a, $b, $dzwig)) {
  echo "Wynik: ";
  switch ($dzwig) {
    case "dodawanie":
     echo $a + $b;
     break;
    case "odejmowanie":
     echo $a - $b;
     break;
    case "mnozenie":
     echo $a * $b;
     break;
    case "dzielenie":
     echo $a / $b;
     break;
    default:
    echo "Nieprawidlowa wartosc";
  }
}
?>
</body>
</html>