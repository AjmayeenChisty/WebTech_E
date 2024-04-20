<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
<style>
    .error {
        color: red;
    }
</style>
</head>
<body>
    <form id="myForm" onsubmit="return validateForm()">
        <label for="day">Day:</label><br>
        <select id="day" name="day">
            <option value="">-- Select Day --</option>
            <!-- Options for days -->
            <?php for ($i = 1; $i <= 31; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select><br>

        <label for="month">Month:</label><br>
        <select id="month" name="month">
            <option value="">-- Select Month --</option>
            <!-- Options for months -->
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select><br>

        <label for="year">Year:</label><br>
        <select id="year" name="year">
            <option value="">-- Select Year --</option>
            <!-- Options for years -->
            <?php for ($i = 1900; $i <= 2016; $i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php } ?>
        </select><br>
        
        <span id="dobError" class="error"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        function validateForm() {
            var day = document.getElementById("day").value;
            var month = document.getElementById("month").value;
            var year = document.getElementById("year").value;
            var dobError = document.getElementById("dobError");

            // Reset error message
            dobError.innerHTML = "";

            // Rule 1: Cannot be empty
            if (day.trim() === "" || month.trim() === "" || year.trim() === "") {
                dobError.innerHTML = "Please select a valid Date of Birth";
                return false;
            }

            // Form is valid
            return true;
        }
    </script>
</body>
</html>
