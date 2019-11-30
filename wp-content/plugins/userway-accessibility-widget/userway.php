<?php
/*
Plugin Name: Accessibility by UserWay
Plugin URI: http://userway.org
Description: The UserWay Accessibility Widget is a WordPress plugin that helps make your WordPress
site more accessible without refactoring your website's existing code and will increase compliance with
WCAG 2.1, ATAG 2.0, ADA, & Section 508 requirements.
Version: 1.2
Author: UserWay.org
Author URI: http://userway.org
*/

/*  Copyright 2017  UserWay  (email: userway@example.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define('USW_USERWAY_DIR', plugin_dir_path(__FILE__));
define('USW_USERWAY_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, 'usw_userway_activation');
register_deactivation_hook(__FILE__, 'usw_userway_deactivation');

function usw_userway_activation() {

}

function usw_userway_deactivation() {

}

function usw_userway_load(){
    if(is_admin()) require_once(USW_USERWAY_DIR.'includes/admin.php');
}
usw_userway_load();

function usw_addplugin_footer_notice(){
    wp_register_style( 'akismet.css', plugin_dir_url( __FILE__ ) . 'assets/style.css', array());
    wp_enqueue_style( 'akismet.css');
    $all_options = get_option('usw_userway_settings');
    if(!empty($all_options['code'])) {
        echo "<script type=\"text/javascript\">
            var _userway_config = {
                   /* uncomment the following line to override default position*/
                   /* position: '1',*/
                   /* uncomment the following line to override default size (values: small, large)*/
                   /* size: 'large',*/
                   /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
                   /* language: null,*/
                   /* uncomment the following line to override color set via widget (e.g., #053f67)*/
                   /* color: 'null',*/
                   /* uncomment the following line to override type set via widget(1=person, 2=chair, 3=eye)*/
                   /* type: 'null',*/
                   /* uncomment the following line to override support on mobile devices*/
                   /* mobile: true,*/
                   account: '" . $all_options['code'] . "'
            };
           </script>
        <script type=\"text/javascript\" src=\"https://cdn.userway.org/widget.js\"></script>";
    }
}
add_action('wp_footer', 'usw_addplugin_footer_notice');
