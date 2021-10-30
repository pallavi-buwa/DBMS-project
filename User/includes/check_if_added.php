<?php

function check_if_added_to_cart($item_id)
{
    require 'common.php';
    $user_id=$_SESSION['user_id'];
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
    $r= mysqli_query($con, $query) or die(mysqli_error($con));
    $rows=mysqli_num_rows($r);
    if($rows>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

    ?>