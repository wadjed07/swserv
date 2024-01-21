<?php
// Receive account number from HTML form or MQL5 request
$account_no = empty($_POST["account_no"]) ? "" : $_POST["account_no"];

// Validate account number (same logic as before)
$valid_accounts = array(
    139311076
);
$result = in_array((int)$account_no, $valid_accounts);

// Send response back to HTML or MQL5
if ($result) {
    echo "success";
} else {
    echo "Invalid account number";
}
?>
