
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script>
function computeLoan()
{
 var amount = document.getElementById('amount').value;
 var interest_rate = document.getElementById('interest_rate').value;
 var months = document.getElementById('months').value;
 var interest = (amount * (interest_rate * .01))/months;
 var payment = ((amount/months)+interest).toFixed(2);
 payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","); 
 document.getElementById('payment').innerHTML = "Monthly Payment  = Tk " + payment;
 
}
</script>
</head>
<body>
<p>Loan amount: <input id="amount" type="number" min="1" max="100000" onchange="computeLoan()"> &#2547; </p>
<p>Interest rate: <input id="interest_rate" type="number" min="0" max="10" value="10" step=".1" onchange="computeLoan()"> % </p>
<p>Months: <input id="months" type="number" min="1" max="72" value="1" step="1" onchange="computeLoan()"> </p>
<h2 id="payment"></h2>
</body>
</html>