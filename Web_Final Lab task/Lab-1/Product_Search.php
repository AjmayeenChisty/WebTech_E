<!DOCTYPE html>
<html>
<body>
    <?php
    
    $conn = mysqli_connect('localhost:', 'root', '', '');
    $sql = "SELECT Name, BuyingPrice, SellingPrice FROM ProductInfo WHERE Displayable = 'yes'";
    $result = mysqli_query($conn, $sql);
    

    if (mysqli_num_rows($result) > 0) {
        echo "<form method=\"post\"><fieldset><legend>SEARCH</legend>
        <input type=\"text\" name=\"search\"> <input type=\"submit\" value=\"Search\"> <br><br>
        
        <table border=1 width = 20%>
                <tr>
                    <th>Name</th>
                    <th>Profit</th>
                    <th>Manage</th>
                </tr>";

                if(isset($_POST['search'])){
                    $search = $_POST['search'];
                    $sql = "SELECT Name, BuyingPrice, SellingPrice FROM ProductInfo WHERE Displayable = 'yes' and Name = '$search'";
                    $result = mysqli_query($conn, $sql);
                }
                else {
                $sql = "SELECT Name, BuyingPrice, SellingPrice FROM ProductInfo WHERE Displayable = 'yes'";
                $result = mysqli_query($conn, $sql);
                }

                

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row["Name"];
            $bPrice = $row["BuyingPrice"];
            $sPrice = $row["SellingPrice"];
            $profit = $sPrice - $bPrice;

            echo "<tr>
                    <td>$name</td>
                    <td>$profit</td>
                    <td>
                        <a href=\"Edit.php?id=$name\">Edit</a> |
                        <a href=\"Delete.php?id=$name\">Delete</a>
                    </td>
                </tr>";
        }
        echo "</table></fieldset>";
    } else {
        echo "No products found.";
    }
    ?>
</body>
</html>