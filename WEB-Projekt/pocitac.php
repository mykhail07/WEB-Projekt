
<?php
$nazev = "Herní PC";
$vyrobce = "Lenovo";
$ram = 16;
$uloziste = 1.5;
$ssd = true;
$operacniSystem = "Windows 11";

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Profil mého počítače</title>
</head>
<body>

<?php
echo "<h1>Profil mého počítače</h1>";

echo "<p><strong>Název počítače:</strong> $nazev</p>";
echo "<p><strong>Výrobce:</strong> $vyrobce</p>";
echo "<p><strong>Operační paměť RAM:</strong> $ram GB</p>";
echo "<p><strong>Velikost úložiště:</strong> $uloziste TB</p>";
echo "<p><strong>Má SSD:</strong> " . ($ssd ? "Ano" : "Ne") . "</p>";
echo "<p><strong>Operační systém:</strong> $operacniSystem</p>";

echo "<h2>Datové typy</h2>";

echo "<p>";
var_dump($nazev);
echo "</p>";

echo "<p>";
var_dump($vyrobce);
echo "</p>";

echo "<p>";
var_dump($ram);
echo "</p>";

echo "<p>";
var_dump($uloziste);
echo "</p>";

echo "<p>";
var_dump($ssd);
echo "</p>";

echo "<p>";
var_dump($operacniSystem);
echo "</p>";
?>

</body>
</html>
