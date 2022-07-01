<!DOCTYPE html>
<html lang="pl">
<H2>Hotel</H2>
<form action="w2-result.php" method="POST">
<label for="name">Imie</label><br>
<input type="text" name="name" required><br>
<label for="surname">Nazwisko</label><br>
<input type="text" name="surname" required><br>
<label for="addressa">Adres 1</label><br>
<input type="text" name="addressa" required><br>
<label for="addressb">Adres 2</label><br>
<input type="text" name="addressb" required><br>
<label for="peoplenb">Liczba osob</label><br>
<select name="people" id="people">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select><br>
<label for="email">E-mail</label><br>
<input type="text" name="email" required><br>
<label for="end">Data powrotu</label><br>
<input type="date" name="end" value="" min="" max="" required><br>
<label for="card">Numer karty kredytowej</label><br>
<input type="text" name="card"><br>
<label for="amenities">Udogodnienia</label><br>
<select name="amenities">
    <option value="" default></option>
    <option value="child">Łozeczko dla dziecka</option>
    <option value="ac">Klimatyzacja</option>
    <option value="parking">Parking</option>
</select><br>
<input type="submit" value="Wyslij"><br>
</form>
<?php

?>
</body>
</html>