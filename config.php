<?php

/* DEFINITIONS -- DO NOT MODIFY */
abstract class UDIDCheckMethod {
	const UseList = 0;
	const UseDatabase = 1;
}
/* == END OF DEFINITIONS */

define("UDID_METHOD", UDIDCheckMethod::UseList);

/* UDID List Method Constants */
define("UDID_LIST", serialize(array(a5e634c2fb2966efdcf4fb517c87a81596090627)));

/* UDID Database Method Constants */
define("UDID_DB_HOST", "localhost");
define("UDID_DB_DBNAME", "udid");
define("UDID_DB_USER", "root");
define("UDID_DB_PASSWORD", "password");
define("UDID_DB_UDIDTABLE", "udids");
define("UDID_DB_UDIDCOLUMN", "udid");