<?php
add_action( 'admin_notices', 'add_functionality' );


function add_functionality() {
    $user_id=get_current_user_id(); 
    $user_data=get_userdata( $user_id);
    $user_role=$user_data->roles[0];
    $user_name=$user_data->user_login;
    $previous_login_time=get_user_meta( $user_id, "previous_last_login", true );
    switch (strtolower($user_role)) {
        case 'administrator':
            $welcome_message = 'Welcome '.$user_name.', Administrator! You have full access to everything.';
            break;
        case 'editor':
            $welcome_message = 'Welcome'.$user_name.', Editor! Ready to manage some posts?';
            break;
        case 'author':
            $welcome_message = 'Welcome'.$user_name.', Author! Lets write some amazing content today.';
            break;
        case 'contributor':
            $welcome_message = 'Hello'.$user_name.', Contributor! Draft your next post and get it ready for review.';
            break;
        case 'subscriber':
            $welcome_message = 'Welcome'.$user_name.', Subscriber! Thanks for being part of our community.';
            break;
        default:
            $welcome_message = 'Welcome!'.$user_name.' Lets discover what we are going to do today!';
            break;
    }
    include_once(MY_PLUGIN_PATH.'/includes/templates/admin_notice_func.php');
    
}

