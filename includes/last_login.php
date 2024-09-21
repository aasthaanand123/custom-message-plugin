<?php
// add last login time
add_action( "wp_login", "update_last_login_details" ,10,2);
function update_last_login_details($user_login, $user){
    $user_id = $user->ID;

    // Get the previous last login time
    $previous_last_login = get_user_meta($user_id, 'last_login', true);

    // Update the last login time to the current time
    update_user_meta($user_id, 'last_login', current_time('mysql')); //current login timing
    if ($previous_last_login) {
        update_user_meta($user_id, 'previous_last_login', $previous_last_login); // Previous login timing
    }
}
