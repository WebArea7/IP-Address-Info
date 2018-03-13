<?php

class getIpInfo {
	var $ip;
	var $country_code;
	var $country_name;
	var $region_code;
	var $region_name;
	var $city;
	var $zip_code;
	var $time_zone;
	var $latitude;
	var $longitude;
	var $metro_code;

	public function __construct(){
		$this->ip = $this->get_client_ip();
		$this->country_code = (string) $this->get_ip_info()->CountryCode;
		$this->country_name = (string) $this->get_ip_info()->CountryName;
		$this->region_code = (string) $this->get_ip_info()->RegionCode;
		$this->region_name = (string) $this->get_ip_info()->RegionName;
		$this->city = (string) $this->get_ip_info()->City;
		$this->zip_code = (string) $this->get_ip_info()->ZipCode;
		$this->time_zone = (string) $this->get_ip_info()->TimeZone;
		$this->latitude = (string) $this->get_ip_info()->Latitude;
		$this->longitude = (string) $this->get_ip_info()->Longitude;
		$this->metro_code = (string) $this->get_ip_info()->MetroCode;
	}

	private function get_ip_info(){
		$result_file = simplexml_load_file('https://freegeoip.net/xml/' . $this->ip);
		return $result_file;
	}

	private function get_client_ip(){
		$ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	public function set_ip($new_ip){
		$this->ip = $new_ip;
	}
}

?>