<?php
    Function All()
    {
        $con = Connect();
        $sql = "SELECT * FROM destination";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
    Function Distinct()
    {
        $con = Connect();
        $sql = "SELECT DISTINCT uticel, uticel_ID FROM destination GROUP BY uticel";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
    Function Main()
    {
        $con = Connect();
        $sql = "SELECT * FROM destination ORDER BY uticel";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
?>