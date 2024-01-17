<?php
    include('nav.php');
?>
<form action="bread3.php" method="POST" enctype="multipart/form-data">
    <center>
        <table>
            <tr>
                <td>Product-id:</td> <td><input name="PID" type="number"></td>
            </tr>
            <tr>
                <td>Parent-name:</td> <td><input name="PN" type="text"></td>
            </tr>
            <tr>
                <td>Price:</td> <td><input name="p" type="number"></td>
            </tr>
            <tr>
                <td>Description:</td> <td><input name="d" type="text"></td>
            </tr>
            <tr>
                <td>Name:</td> <td><input name="n" type="text"></td>
            </tr>
            <tr>
                <td>Image:</td> <td><input name="i" type="file"></td>
            </tr>
        </table>
        <br><br><br>
        <button type="submit">OK</button>
    </center>
</form>



   