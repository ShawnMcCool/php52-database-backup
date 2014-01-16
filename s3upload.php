<?php

require 'amazon-s3-php-class/S3.php';

$sourceFile = '';
$remoteFilename = '';

$conf = array(
    'key'      => '',
    'secret'   => '',
    'region'   => 'us-east-1',
    'bucket'   => '',
    'basePath' => '',
);

$s3 = new S3($conf['key'], $conf['secret']);
S3::putObject(S3::inputFile($sourceFile, false), $conf['bucket'], $conf['basePath'] . $remoteFilename, S3::ACL_PRIVATE);