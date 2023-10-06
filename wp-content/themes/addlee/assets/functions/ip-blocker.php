<?php

function al_log_action_request($ip, $action) {

    if(empty($ip) == false && empty($action) == false) {

        global $wpdb;
        $request_date = date('Y/m/d');

        $request_count = al_get_ip_request_count($ip, $action);

        if(empty($request_count) == false) {
            $request_count++;

            $wpdb->update( $wpdb->base_prefix.'ip_log', array('request_count' => $request_count), array('ip' => $ip, 'action_id' => $action, 'request_date' => $request_date));
        }
        else {
            $wpdb->insert( $wpdb->base_prefix.'ip_log', array('request_count' => 1,'ip' => $ip, 'action_id' => $action, 'request_date' => $request_date));
        }

        return true;

    }
    else {
        return false;
    }

}

function al_get_ip_request_count($ip, $action_id) {
    $request_count = 0;

    if(empty($ip) == false && empty($action_id) == false) {
        global $wpdb;
        $request_date = date('Y/m/d');

        $count = $wpdb->get_var( "
          SELECT request_count 
          FROM " . $wpdb->base_prefix . "ip_log 
          WHERE ip = '" . $ip . "' 
          AND action_id = '" . $action_id . "' 
          AND request_date = '" . $request_date . "'");

        if(is_numeric($count)) {
            $request_count = $count;
        }
    }

    return $request_count;
}

function al_get_action_limit($action_id) {

    $limit = 0;

    if(empty($action_id) == false) {
        if (have_rows('ip_blocker_action_limits', 'option')){
            while( have_rows('ip_blocker_action_limits', 'option') ): the_row();
                if(get_sub_field('action_id') == $action_id) {
                    $limit = get_sub_field('daily_limit');
                }
            endwhile;
        }
    }

    return $limit;

}

function al_action_ip_check($ip, $action_id) {

    $allowed = false;

    if(empty($ip) == false && empty($action_id) == false) {
        $action_limit = al_get_action_limit($action_id);
        $blacklist = al_get_ip_blacklist();

        if(in_array($ip, $blacklist) == false) {

            if ($action_limit > 0) {
                $request_count = al_get_ip_request_count($ip, $action_id);

                if ($request_count <= $action_limit) {
                    $allowed = true;
                }
            } else {
                $allowed = true;
            }
        }
    }

    return $allowed;
}

function al_get_ip_blacklist() {
    $ip_blacklist = array();

    if (have_rows('ip_blocker_blacklist', 'option')) {
        while( have_rows('ip_blocker_blacklist', 'option') ): the_row();

            $ip_blacklist[] = get_sub_field('blacklisted_ip');

        endwhile;
    }

    return $ip_blacklist;
}

function al_reset_ip_request_count($ip)
{
    if (empty($ip) == false) {

        global $wpdb;
        $request_date = date('Y/m/d');

        $wpdb->update($wpdb->base_prefix . 'ip_log', array('request_count' => 0), array('ip' => $ip, 'request_date' => $request_date));

    }
}


function al_get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
