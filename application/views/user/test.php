<?php 
// $this->load->view('user/user_profile_sidebar');
?>
<!-- <?php print_r($fetch_data->result_array()); ?> -->

<?php

foreach ($fetch_data->result_array() as $row)
{
    echo "<p>" . $row['car_id'] . " " . $row['car_model'] . " " . $row['car_price'] . " " . $row['car_pic_name'] . "</p>";
    // echo "<p>" . $row['car_model'] . "</p>";
    // echo "<p>" . $row['car_price'] . "</p>";
    // echo "<p>" . $row['car_pic_name'] . "</p>";
}

?>