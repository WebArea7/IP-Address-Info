# IP Address Info

With this class you can easily get information from IP address.

# How to use (PHP)

First of all you need to require the class.
```
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/ip-address-info-class.php'); 
```
After that you need to initialize the class.
```
$ipInfo = new getIpInfo;
```

You can easily get information from IP address.

To get current ip address:
```
echo $ipInfo->ip;
```
If you need to set our own IP address you can do it. In this example we set 8.8.8.8 as IP. And after we get information about city.
```
$ipInfo->set_ip('8.8.8.8');
echo $ipInfo->city;
```

Parameters that you can get by IP.
```
echo $ipInfo->ip;
echo $ipInfo->country_code;
echo $ipInfo->country_name;
echo $ipInfo->region_code;
echo $ipInfo->region_name;
echo $ipInfo->city;
echo $ipInfo->zip_code;
echo $ipInfo->time_zone;
echo $ipInfo->latitude;
echo $ipInfo->longitude;
echo $ipInfo->metro_code;
```
