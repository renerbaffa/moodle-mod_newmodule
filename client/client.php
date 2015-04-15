<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$token = '7e9da9bb83b1155c66a15c92bdfd7bed';
$domainname = 'localhost/moodle';
/// FUNCTION NAME
$functionname = 'quiforca_update';
/// PARAMETERS
$welcomemsg = 'Hello, ';
///// XML-RPC CALL
header('Content-Type: text/plain');
$serverurl = $domainname . '/webservice/xmlrpc/server.php'. '?wstoken=' . $token;
require_once('./curl.php');
$curl = new curl;
$post = xmlrpc_encode_request($functionname, array($welcomemsg));
$resp = xmlrpc_decode($curl->post($serverurl, $post));
echo var_dump($resp);