<?php

    function calculate()
    {
        if(isset($_POST["firstNumber"]) 
            && isset($_POST["secondNumber"])
            && is_numeric($_POST["firstNumber"])
            && is_numeric($_POST["secondNumber"]))
        {
            $result = 0;
            if(isset($_POST["sum"]))
            {
                $result = $_POST["firstNumber"] + $_POST["secondNumber"];
            }
            else
            {
                $result = $_POST["firstNumber"] - $_POST["secondNumber"];
            }

            // Save numbers in db
            save($_POST["firstNumber"], $_POST["secondNumber"]);

            return $result;
        }
        else
        {
            return " ";
        }
    }

    function drawRecords()
    { 
        $conn = getDbConnection();
        $sql = "SELECT FirstNumber, SecondNumber FROM numbers";
        $result = $conn->query($sql);  
        
        while($row = $result->fetch_assoc()) 
        {
            echo "<tr>";
                echo "<td class='withPadding5'>" . $row['FirstNumber'] . "</td>";
                echo "<td class='withPadding5'>" . $row['SecondNumber'] . "</td>";
            echo "</tr>";
        }       
        
        $conn->close();
    }

    function Save($num1, $num2)
    {
        $conn = getDbConnection();
        $sql = "INSERT INTO numbers (FirstNumber, SecondNumber) VALUES ($num1, $num2)";
        $conn->query($sql);
        
        $conn->close();       
    }

    function getDbConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "university";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        return $conn;
    }
?>