<?php
require_once '../vendor/autoload.php';

use Qiniu\Auth;
use Qiniu\Storage\BucketManager;

$accessKey = 'XI0n2kV1LYwzcxqSZQxJ7bpycxDIAXFGJMWUt_zG';
$secretKey = '9WTmIAiwKQ2Nq6o93mfKd6VQqq56HjjLZonMWLJl';
$auth = new Auth($accessKey, $secretKey);
$bucketMgr = New BucketManager($auth);

$bucket = 'rwxf';
$prefix = '';
$marker = '';
$limit = 3;

list($iterms, $marker, $err) = $bucketMgr->listFiles($bucket, $prefix, $marker, $limit);
if ($err !== null) {
	echo "\n====> list file err: \n";
	var_dump($err);
} else {
	echo "Marker: $marker\n";
	echo "\nList Iterms====>\n";	
	var_dump($iterms);
}