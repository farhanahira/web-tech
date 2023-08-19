<?php

include('./config/connection.php');

if(isset($_POST['checking_add']))
{
    echo $pimg = $_POST['pimg'];
    echo $pname = $_POST['pname'];
    echo $pprice = $_POST['pprice'];



    $query = "INSERT INTO tb_product VALUES ('','$pimg','$pname','$pprice')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo $return  = "Successfully Stored";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}


if (isset($_POST['checking_view'])) {
    $studid = $_POST['stud_id'];
    $result_array = [];

    $query = "SELECT * FROM tb_product WHERE id='$studid'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
            $result_array[] = $row;
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    } else {
        echo $return = "No Record Found.!";
    }
}


if (isset($_POST['checking_edit'])) {
    $stud_id = $_POST['stud_id'];
    $result_array = [];

    $query = "SELECT * FROM tb_product WHERE id='$stud_id'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
            $result_array[] = $row;
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    } else {
        echo $return = "No Record Found.!";
    }
}


if(isset($_POST['checking_update'])){
    $id = $_POST['pid'];
    $pimg = $_POST['pimg'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $query = "UPDATE tb_product SET package_img='$pimg', package_title='$pname', package_price='$pprice' WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        echo $return  = "Successfully Updated";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}

if(isset($_POST['checking_delete'])){
    $id = $_POST['stud_id'];
    $query = "DELETE FROM tb_product WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        echo $return  = "Successfully Deleted";
    }
    else
    {
        echo $return  = "Something Went Wrong.!";
    }
}
?>