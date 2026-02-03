<?php
    $message = '';
    $pagetitle = 'Simple Interest';
    require_once 'assets/header.php';
?>
    <h1>Loan Calculator</h1>
    <div class="calculator-section">
        <div class="inputs-section">
            <form method="POST">
                <div class="form-group">
                    <label>Loan Amount (₦)</label>
                    <input type="number" name="amount">
                </div>
                <div class="form-group">
                    <label>Interest Rate (%)</label>
                    <input type="number" name="interest">
                </div>
                <div class="form-group">
                    <label>Term (Years)</label>
                    <input type="number" name="years">
                </div>
                <button type="submit" name="calculate">Calculate</button>
            </form>
        </div>
        
        <div class="outputs-section">
            <?php
            $amount = 0;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $principal = (float)$_POST['amount'];
                $interest = (float)$_POST['interest'] / 100;
                $years = (float)$_POST['years'];
                if(empty($principal) || empty($interest) || empty($years)) {
                    $message = 'Please fill in all fields.';
                } else {
                    $amount = $principal + ($principal * $interest * $years);
                }
                }
                ?>
            <div class="result-item">
                <div><?= $message ?></div>
                <div class="monthly">
                    <span>Monthly Payment</span>
                    <strong>₦<?= number_format($amount/12, 2) ?></strong>
                </div>
                <div class="yearly">
                    <span>Yearly Payment</span>
                    <strong>₦<?= number_format($amount, 2) ?></strong>
                </div>
            </div>
        </div>
    </div>
</body>
</html>