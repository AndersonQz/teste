<?php include_once"config.php";?>
<html>
<body>
<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO tbformulario (nome,email) VALUES ('$nome', '$email')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'index.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>