<?php

class Muser {

    public $user_id;
    public $logged_in = false;

    function __construct() {
        if (is_user_logged_in()) {
            $this->logged_in = true;
            $this->user = get_current_user();
            $this->user_id = get_current_user_id();
        }
    }

    function has_cap($capability) {
        return current_user_can($capability);
    }

    /**
     * 
     * Get the membership levels of a logged in user
     * @return array
     */
    function get_memberships() {

        if (!$this->logged_in) {
            return [];
        }

        $user = MeprUtils::get_currentuserinfo();
        $active_memberships = $user->active_product_subscriptions('products');
        
        $return = [];
        foreach ($active_memberships as $membership) {
            $return[$membership->ID] = $membership->post_title;
        }

        return $return;
    }

    function has_mem_access($membership_level) {
        $memberships = $this->get_memberships();
        return in_array($membership_level, $memberships);
        
        // user in north east (location) and acadia agency
        // SELECT * FROM rel_user_group ug 
        // LEFT JOIN wp_user u ON ug.user_id = u.ID
        // LEFT JOIN wp_user u ON ug.user_id = u.ID
    }

}