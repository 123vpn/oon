<?php
$CONFIG['license_key'] = '';
$CONFIG['enable_blockscript'] = false;
$CONFIG['theme'] = 'default';
$CONFIG['plugins'] = 'twitter.com,msn.com,yahoo.com,myspace.com,ytimg.com,youtube.com,live.com,hotmail.com,facebook.com,google.com';
$CONFIG['tmp_dir'] = GLYPE_ROOT . '/tmp/';
$CONFIG['gzip_return'] = false;
$CONFIG['ssl_warning'] = false;
$CONFIG['override_javascript'] = false;
$CONFIG['load_limit'] = 0;
$CONFIG['footer_include'] = '';
$CONFIG['path_info_urls'] = false;
$CONFIG['stop_hotlinking'] = false;
$CONFIG['hotlink_domains'] = array();
$CONFIG['enable_logging'] = false;
$CONFIG['logging_destination'] = $CONFIG['tmp_dir'] . 'logs/';
$CONFIG['log_all'] = false;
$CONFIG['whitelist'] = array();
$CONFIG['blacklist'] = array();
$CONFIG['ip_bans'] = array();
$CONFIG['connection_timeout'] = 5;
$CONFIG['transfer_timeout'] = 0;
$CONFIG['max_filesize'] = 0;
$CONFIG['download_speed_limit'] = 0;
$CONFIG['resume_transfers'] = false;
$CONFIG['queue_transfers'] = false;
$CONFIG['cookies_on_server'] = false;
$CONFIG['cookies_folder'] = $CONFIG['tmp_dir'] . 'cookies/';
$CONFIG['encode_cookies'] = false;
$CONFIG['tmp_cleanup_interval'] = 0;
$CONFIG['tmp_cleanup_logs'] = 0;
$CONFIG['options']['encodeURL'] = array(
	'title'	 => 'Encrypt URL',
	'desc'	 => '',
	'default' => false,
	'force'	 => false
);
$CONFIG['options']['encodePage'] = array(
	'title'	 => 'Encrypt Page',
	'desc'	 => '',
	'default' => false,
	'force'	 => false
);
$CONFIG['options']['showForm'] = array(
	'title'	 => 'Show Form',
	'desc'	 => '',
	'default' => false,
	'force'	 => false
);
$CONFIG['options']['allowCookies'] = array(
	'title'	 => 'Allow Cookies',
	'desc'	 => '',
	'default' => true,
	'force'	 => false
);
$CONFIG['options']['tempCookies'] = array(
	'title'	 => 'Force Temporary Cookies',
	'desc'	 => '',
	'default' => true,
	'force'	 => false
);
$CONFIG['options']['stripTitle'] = array(
	'title'	 => 'Remove Page Titles',
	'desc'	 => '',
	'default' => true,
	'force'	 => false
);
$CONFIG['options']['stripJS'] = array(
	'title'	 => 'Remove Scripts',
	'desc'	 => '',
	'default' => true,
	'force'	 => false
);
$CONFIG['options']['stripObjects'] = array(
	'title'	 => 'Remove Objects',
	'desc'	 => '',
	'default' => true,
	'force'	 => false
);
$CONFIG['version'] = '1.4.13';
$adminDetails['admin'] = '78bf2386879f074ed0ec6951c9dcaf19';
