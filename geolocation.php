<?php

//::1 is the actual IP. It is an ipv6 loopback address (i.e. localhost). If you were using ipv4 it would be  127.0.0.1.

$query = unserialize(file_get_contents('http://ip-api.com/php/'));
print_r($query);
if($query && $query['status'] == 'success') {
  echo 'Hello visitor from '.$query['country'].', '.$query['city'].'!';
} else {
  echo 'Unable to get location';
}

?>
