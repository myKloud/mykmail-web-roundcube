<?php

/* Local configuration for Roundcube Webmail */

// ----------------------------------

// SQL DATABASE

// ----------------------------------

// Database connection string (DSN) for read+write operations

// Format (compatible with PEAR MDB2): db_provider://user:password@host/database

// Currently supported db_providers: mysql, pgsql, sqlite, mssql, sqlsrv, oracle

// For examples see http://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php

// Note: for SQLite use absolute path (Linux): 'sqlite:////full/path/to/sqlite.db?mode=0646'

//       or (Windows): 'sqlite:///C:/full/path/to/sqlite.db'

// Note: Various drivers support various additional arguments for connection,

//       for Mysql: key, cipher, cert, capath, ca, verify_server_cert,

//       for Postgres: application_name, sslmode, sslcert, sslkey, sslrootcert, sslcrl, sslcompression, service.

//       e.g. 'mysql://roundcube:@localhost/roundcubemail?verify_server_cert=false'

$config['db_dsnw'] = 'mysql://root:example@db/kmail';

// ----------------------------------

// IMAP

// ----------------------------------

// The IMAP host chosen to perform the log-in.

// Leave blank to show a textbox at login, give a list of hosts

// to display a pulldown menu or set one host as string.

// Enter hostname with prefix ssl:// to use Implicit TLS, or use

// prefix tls:// to use STARTTLS.

// Supported replacement variables:

// %n - hostname ($_SERVER['SERVER_NAME'])

// %t - hostname without the first part

// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)

// %s - domain name after the '@' from e-mail address provided at login screen

// For example %n = mail.domain.tld, %t = domain.tld

// WARNING: After hostname change update of mail_host column in users table is

//          required to match old user data records with the new host.

$config['default_host'] = 'ssl://mail.mykmail.io';

// TCP port used for IMAP connections

$config['default_port'] = 993;

// ----------------------------------

// SMTP

// ----------------------------------

// SMTP server host (for sending mails).

// Enter hostname with prefix ssl:// to use Implicit TLS, or use

// prefix tls:// to use STARTTLS.

// Supported replacement variables:

// %h - user's IMAP hostname

// %n - hostname ($_SERVER['SERVER_NAME'])

// %t - hostname without the first part

// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)

// %z - IMAP domain (IMAP hostname without the first part)

// For example %n = mail.domain.tld, %t = domain.tld

// To specify different SMTP servers for different IMAP hosts provide an array

// of IMAP host (no prefix or port) and SMTP server e.g. ['imap.example.com' => 'smtp.example.net']

$config['smtp_server'] = 'ssl://mail.mykmail.io';

// SMTP port. Use 25 for cleartext, 465 for Implicit TLS, or 587 for STARTTLS (default)

$config['smtp_port'] = 465;

// ----------------------------------

// SYSTEM

// ----------------------------------

// THIS OPTION WILL ALLOW THE INSTALLER TO RUN AND CAN EXPOSE SENSITIVE CONFIG DATA.

// ONLY ENABLE IT IF YOU'RE REALLY SURE WHAT YOU'RE DOING!

$config['enable_installer'] = false;

// provide an URL where a user can get support for this Roundcube installation

// PLEASE DO NOT LINK TO THE ROUNDCUBE.NET WEBSITE HERE!

$config['support_url'] = 'https://mykloud.io';

// This key is used for encrypting purposes, like storing of imap password

// in the session. For historical reasons it's called DES_key, but it's used

// with any configured cipher_method (see below).

// For the default cipher_method a required key length is 24 characters.

$config['des_key'] = 'Vq3VIMY4zHrXNlC2tkxPowLU';

// Automatically add this domain to user names for login

// Only for IMAP servers that require full e-mail addresses for login

// Specify an array with 'host' => 'domain' values to support multiple hosts

// Supported replacement variables:

// %h - user's IMAP hostname

// %n - hostname ($_SERVER['SERVER_NAME'])

// %t - hostname without the first part

// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)

// %z - IMAP domain (IMAP hostname without the first part)

// For example %n = mail.domain.tld, %t = domain.tld

$config['username_domain'] = 'khaled@mykmail.io';

// Name your service. This is displayed on the login screen and in the window title

$config['product_name'] = 'Kmail';

// ----------------------------------

// PLUGINS

// ----------------------------------

// List of active plugins (in plugins/ directory)

$config['plugins'] = [];

