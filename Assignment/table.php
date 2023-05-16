<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Basic_salary</th>
            <th>Travelling_allowance</th>
            <th>dearness_allowance</th>
            <th>total_salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "connection.php";

            $sql = "SELECT * FROM employee";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc())
                {
                    $id = $row['id'];
                    $name = $row['name'];
                    $salary = $row['basic_salary'];
                    $TA = $row['traveling_allowance'];
                    $DA = $row['dearness_allowance'];
                    $total = $row['total_salary'];
                    echo '<tr>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$salary.'2</td>
                            <td>'.$TA.'</td>
                            <td>'.$DA.'</td>
                            <td>'.$total.'</td>
                        </tr>';
                }
            } else{
                echo "no records found";
            }
        ?>
    </tbody>
</table>
    
</body>
</html>