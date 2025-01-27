<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return array(
	"base_url" => "https://iti-326.iti.gr/imc/wp-content/plugins/improve-my-city/hybridauth/",
    "providers" => array(
        // openid providers
        "OpenID" => array(
            "enabled" => true,
        ),
        "Yahoo" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
        ),
        "AOL" => array(
            "enabled" => true,
        ),
        "Google" => array(
	        "enabled" => true,
	        "keys" => array("id" => "9326628810-i04cn1tb7k6g211pchti34ubj5a0r4ol.apps.googleusercontent.com", "secret" => "3A6grS25_RaUVcMWbYalQoaS"),
	        "scope"           => "https://www.googleapis.com/auth/userinfo.profile ".
	                             "https://www.googleapis.com/auth/userinfo.email"
        ),
        "Facebook" => array(
	        "enabled" => true,
	        "keys" => array( "id" => "790640754369911",
	                         "secret" => "8db2d63ec662f345baf6c6a945471248"
		        ),
	        "scope" => 'email, user_about_me, user_birthday, user_hometown'
        ),
        "Twitter" => array(
            "enabled" => true,
            "keys" => array("key" => "", "secret" => ""),
            "includeEmail" => false,
        ),
        // windows live
        "Live" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
        ),
        "LinkedIn" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
            "fields" => array(),
        ),
        "Foursquare" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
        ),
    ),
    // If you want to enable logging, set 'debug_mode' to true.
    // You can also set it to
    // - "error" To log only error messages. Useful in production
    // - "info" To log info and error messages (ignore debug messages)
    "debug_mode" => true,
    // Path to file writable by the web server. Required if 'debug_mode' is not false
    "debug_file" => "debug.txt",
);
