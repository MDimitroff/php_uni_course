<?php include "logic.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .withPadding10
        {
            padding: 10px;
        }
        .withPadding5
        {
            padding: 5px;
        }
        section.centerEl 
        {
            width: 300px;
            margin: 0px auto;
        }        
    </style>
</head>
<body>
    <br />
    <section class="centerEl">
        <form method="POST">
            <div class="form-group">
                <label for="firstName">First number</label>
                <input type="number" id="firstNumber" name="firstNumber" class="form-control">
            </div>
            <div class="form-group">
                <label for="secondNumber">Second number</label>
                <input type="number" class="form-control" id="secondNumber" name="secondNumber">
            </div>

            <button type="submit" name="sum" class="btn btn-default">+</button>
            <button type="submit" name="subtract" class="btn btn-default">-</button>
        </form>
    </section>
    <br />
    <section class="centerEl">
        <p>Result: <?php echo calculate(); ?> </p>
        <p>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th class="withPadding10">First number</th>
                        <th class="withPadding10">Second number</th>
                    </tr>
                </thead>
                <?php echo drawRecords(); ?>
            </table>
        </p>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

