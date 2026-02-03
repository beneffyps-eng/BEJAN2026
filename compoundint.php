<?php
$pagetitle = 'Simple Interest';
require_once "assets/header.php";
echo "<h1>Compound Interest</h1>";

$A="";
$P="";
$r="";
$n="";
$t="";
if(isset($_POST['calculate'])){
    $P=$_POST['invest'];
    $r=$_POST['interest'];
    $n=$_POST['payment'];
    $t=$_POST['Duration'];
    $A=$P * (1 + $r /$n) ** ($n * $t);
}
?>
<body>
    <form action="compoundint.php" method="post">
        <label>Initial Investment</label>
        <input type="text" name="invest"  value="<?php echo $P; ?>"><br><br>

        <label>Interest Rate</label>
        <input type="text" name="interest" value="<?php echo $r; ?>"><br><br>
        
        <label>Payment Sequense</label>
        <input type="text" name="payment" value="<?php echo $n; ?>"><br><br>

        <label>Investment Duration</label>
        <input type="text" name="Duration" value="<?php echo $t; ?>"><br><br>

        <label>Answer</label>
        <input type="text" name="result" value="<?php echo $A; ?>">

        <input type="submit" name="calculate">
    </form>
</body>