
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Calculator</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
            margin:0;
            padding:30px;
        }

        .container{
            width:800px;
            margin:auto;
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            color:#0d47a1;
        }

        label{
            font-weight:bold;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:12px;
            background:#0d47a1;
            color:white;
            border:none;
            border-radius:5px;
            font-size:16px;
            cursor:pointer;
        }

        button:hover{
            background:#1565c0;
        }

        table{
            width:100%;
            margin-top:20px;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid #ccc;
        }

        th{
            background:#0d47a1;
            color:white;
            padding:10px;
        }

        td{
            padding:10px;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Employee Salary Calculator</h2>

<form method="POST">

    <label>Employee Name</label>
    <input type="text" name="name" required>

    <label>Basic Salary</label>
    <input type="number" name="basic" required>

    <label>Overtime Hours</label>
    <input type="number" name="hours" required>

    <label>Overtime Rate (per hour)</label>
    <input type="number" name="rate" required>

    <button type="submit" name="compute">
        Calculate Salary
    </button>

</form>


<table>

<tr>
    <th colspan="2">Salary Summary</th>
</tr>

<tr>
    <td>Employee Name</td>
    <td>Juan Dela Cruz</td>
</tr>

<tr>
    <td>Basic Salary</td>
    <td>₱40,000.00</td>
</tr>

<tr>
    <td>Overtime Pay</td>
    <td>₱4,000.00</td>
</tr>

<tr>
    <td>Gross Salary</td>
    <td>₱44,000.00</td>
</tr>

<tr>
    <td>Bonus</td>
    <td>₱2,500.00</td>
</tr>

<tr>
    <td>Tax Deduction</td>
    <td>₱4,400.00</td>
</tr>

<tr>
    <td><strong>Net Salary</strong></td>
    <td><strong>₱42,100.00</strong></td>
</tr>

</table>


</div>

</body>
</html>