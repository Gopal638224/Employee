<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .view {
            display: block;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Employee Details</h2>

    <form action="save_employee.php" method="POST">

        <label>Employee Name</label>
        <input type="text" name="employee_name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Phone</label>
        <input type="text" name="phone">

        <label>Department</label>
        <select name="department">
            <option value="">Select Department</option>
            <option value="HR">HR</option>
            <option value="IT">IT</option>
            <option value="Finance">Finance</option>
            <option value="Marketing">Marketing</option>
            <option value="Sales">Sales</option>
        </select>

        <label>Designation</label>
        <input type="text" name="designation">

        <label>Salary</label>
        <input type="number" name="salary" step="0.01">

        <label>Joining Date</label>
        <input type="date" name="joining_date">

        <button type="submit">Save Employee</button>

    </form>

    <a class="view" href="employees.php">
        View Employees
    </a>

</div>

</body>
</html>