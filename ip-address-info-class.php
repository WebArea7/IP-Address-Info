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
		$this->country_code = (string) $this->get_ip_info($this->ip)->CountryCode;
		$this->country_name = (string) $this->get_ip_info($this->ip)->CountryName;
		$this->region_code = (string) $this->get_ip_info($this->ip)->RegionCode;
		$this->region_name = (string) $this->get_ip_info($this->ip)->RegionName;
		$this->city = (string) $this->get_ip_info($this->ip)->City;
		$this->zip_code = (string) $this->get_ip_info($this->ip)->ZipCode;
		$this->time_zone = (string) $this->get_ip_info($this->ip)->TimeZone;
		$this->latitude = (string) $this->get_ip_info($this->ip)->Latitude;
		$this->longitude = (string) $this->get_ip_info($this->ip)->Longitude;
		$this->metro_code = (string) $this->get_ip_info($this->ip)->MetroCode;
	}

	private function get_ip_info($client_ip){
		$result_file = simplexml_load_file('https://freegeoip.net/xml/' . $client_ip);
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
		$this->country_code = (string) $this->get_ip_info($new_ip)->CountryCode;
		$this->country_name = (string) $this->get_ip_info($new_ip)->CountryName;
		$this->region_code = (string) $this->get_ip_info($new_ip)->RegionCode;
		$this->region_name = (string) $this->get_ip_info($new_ip)->RegionName;
		$this->city = (string) $this->get_ip_info($new_ip)->City;
		$this->zip_code = (string) $this->get_ip_info($new_ip)->ZipCode;
		$this->time_zone = (string) $this->get_ip_info($new_ip)->TimeZone;
		$this->latitude = (string) $this->get_ip_info($new_ip)->Latitude;
		$this->longitude = (string) $this->get_ip_info($new_ip)->Longitude;
		$this->metro_code = (string) $this->get_ip_info($new_ip)->MetroCode;
	}
}

?>
