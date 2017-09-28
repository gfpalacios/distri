<?php
class JConfig {
	var $offline = '0';
	var $editor = 'tinymce';
	var $list_limit = '20';
	var $helpurl = 'http://help.joomla.org';
	var $debug = '0';
	var $debug_lang = '0';
	var $sef = '0';
	var $sef_rewrite = '0';
	var $sef_suffix = '0';
	var $feed_limit = '10';
	var $feed_email = 'author';
	var $secret = '4f8j1HPLcekvTrCp';
	var $gzip = '0';
	var $error_reporting = '-1';
	var $xmlrpc_server = '0';

	var $live_site = '';
	var $force_ssl = '0';
	var $offset = '0';
	var $caching = '0';
	var $cachetime = '15';
	var $cache_handler = 'file';
	var $memcache_settings = array();
	var $ftp_enable = '0';
	var $ftp_host = '';
	var $ftp_port = '21';
	var $ftp_user = '';
	var $ftp_pass = '';
	var $ftp_root = '/public_html';
	var $dbtype = 'mysql';
	var $dbprefix = 'jos_';
	var $mailer = 'mail';
	var $mailfrom = 'g@gmail.com';
	var $fromname = 'D';
	var $sendmail = '/usr/sbin/sendmail';
	var $smtpauth = '0';
	var $smtpsecure = 'none';
	var $smtpport = '25';
	var $smtpuser = '';
	var $smtppass = '';
	var $smtphost = 'localhost';
	var $MetaAuthor = '1';
	var $MetaTitle = '1';
	var $lifetime = '15';
	var $session_handler = 'database';

	var $sitename = '';
	var $MetaDesc = 'Distribuidora de materia prima para respostería, confiterias, pastelerias y heladerias. Distribuidora de chocolates para resposteria';
	var $MetaKeys = 'Distribuidora Heidi, Distribuidora de materia prima para resposteria en zona sur, Distribuidora de chocolates para resposteria, confiteria, pasteleria, heladerias, Distribuidora de productos para catering, Distribuidora de cremas para reposteria';
	var $offline_message = 'Este sitio esta momentáneamente fuera de servicio. Por favor, intente más tarde..';


        public function __construct() {
		$this->host = getenv("OPENSHIFT_MYSQL_DB_HOST").":".getenv("OPENSHIFT_MYSQL_DB_PORT");
		$this->user = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
		$this->password = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
		$this->db = getenv("OPENSHIFT_APP_NAME");
		$this->log_path = getenv("OPENSHIFT_LOG_DIR");
		$this->tmp_path = getenv("OPENSHIFT_TMP_DIR");
	}
}
?>
