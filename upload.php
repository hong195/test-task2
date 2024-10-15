<?php

include 'vendor/autoload.php';


include 'vendor/autoload.php';

use Dilab\Network\SimpleRequest;
use Dilab\Network\SimpleResponse;
use Dilab\Resumable;

$request = new SimpleRequest();
$response = new SimpleResponse();

$resumable = new Resumable($request, $response);

$tempDir = __DIR__ . '/uploads/chunks';
$targetDir = __DIR__ . '/uploads/';

$resumable->tempFolder = $tempDir;
$resumable->uploadFolder = $targetDir;

$resumable->process();

