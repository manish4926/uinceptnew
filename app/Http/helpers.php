<?php

function getIpAddress()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function ceiling($number, $significance = 1)
{
    return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
}

function getdiscountvalue($total,$discount)
{
    $newprice = round($total - ($total * ($discount / 100)));
    return $newprice;
}

function timestampToTime($date,$addDays = 0){
    if($addDays != 0)
    {
        $date = strtotime("+".$addDays." days",$date);
    }
    else{
        $date = strtotime($date);
    }
}

function timestampToDate($date,$addDays = 0){
    if($addDays != 0)
    {
        $date = date('d/m/Y',strtotime("+".$addDays." days",$date));
    }
    else{
        $date = date('d/m/Y',strtotime($date));
    }
    return $date;
    //date('d/m/Y',strtotime("+14 days",$order->deliveredon));
}

function dateToTimestamp($date,$addDays = 0){

    if($addDays != 0)
    {
        $date = date('Y-m-d h:i:s',strtotime("+".$addDays." days",$date));
    }
    else{
        
        $date = date('Y-m-d h:i:s',strtotime($date));
    }
    return $date;
}

function minutesToHR($minutes) {
  $hours = floor($minutes / 60);
  $minutes = floor($minutes % 60);
  $output = $hours > 0 ? $hours . " hrs ".$minutes." minutes" : $minutes." minutes";
  return $output;
}

function slugs($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}


function GetCoreInformation() {
    $data = file('/proc/stat');
    $cores = array();
    foreach( $data as $line ) {
        if( preg_match('/^cpu[0-9]/', $line) )
        {
            $info = explode(' ', $line );
            $cores[] = array(
                'user' => $info[1],
                'nice' => $info[2],
                'sys' => $info[3],
                'idle' => $info[4]
            );
        }
    }
    return $cores;
}

function GetCpuInfo()
{
    //Average Load
    $avgload = sys_getloadavg();
    $array = array();
    array_push($array, array("Average Load" => $avgload[0]));

    //Cpu Usage
    /* get core information (snapshot) */
    $stat1 = GetCoreInformation();
    /* sleep on server for one second */
    sleep(1);
    /* take second snapshot */
    $stat2 = GetCoreInformation();
    /* get the cpu percentage based off two snapshots */
    $data = GetCpuPercentages($stat1, $stat2);
    $a = 0;
    $count = count($data);
    foreach ($data as $cpu ) {
        //dd($cpu['user']);
        $a +=  $cpu['user']+$cpu['sys'];

    }
    $b = round($a/$count);
    array_push($array, array("Cpu Usage" => $b));

    //Memory Usage (Not Yet Working Properly)
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    //dd($data);
    array_pop($data);
    foreach ($data as $line) {
        $val = explode(":", $line);
        $ram = trim($val['1']);

        $meminfo['key'] = $ram;
    }
    array_push($array, $meminfo);  
    $newram = get_server_memory_usage();
    array_push($array, $newram);  

    return $array;
}


function GetCpuPercentages($stat1, $stat2) {
    if( count($stat1) !== count($stat2) ) {
        return;
    }
    $cpus = array();
    for( $i = 0, $l = count($stat1); $i < $l; $i++) {
        $dif = array();
        $dif['user'] = $stat2[$i]['user'] - $stat1[$i]['user'];
        $dif['nice'] = $stat2[$i]['nice'] - $stat1[$i]['nice'];
        $dif['sys'] = $stat2[$i]['sys'] - $stat1[$i]['sys'];
        $dif['idle'] = $stat2[$i]['idle'] - $stat1[$i]['idle'];
        $total = array_sum($dif);
        $cpu = array();
        foreach($dif as $x=>$y) $cpu[$x] = round($y / $total * 100, 1);
        $cpus['cpu' . $i] = $cpu;
    }
    return $cpus;
}

function GetRamInformation()
{
    $data = explode("\n", file_get_contents("/proc/meminfo"));
    $meminfo = array();
    array_pop($data);
    foreach ($data as $line) {
        $val = explode(":", $line);
        $ram = trim($val['1']);

        $meminfo['key'] = $ram;


    }
    return $meminfo;
}

function get_server_memory_usage(){

    $free = shell_exec('free');
    $free = (string)trim($free);
    $free_arr = explode("\n", $free);
    $mem = explode(" ", $free_arr[1]);
    $mem = array_filter($mem);
    $mem = array_merge($mem);
    //$memory_usage = $mem[2]/$mem[1]*100;

    return $free_arr;
}


function fetchSslApi($url) {
    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    ); 
    $json = file_get_contents($url, false, stream_context_create($arrContextOptions));
    return $json;
}

function escapeJsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}

function json_clean_decode($json, $assoc = false, $depth = 512, $options = 0) {

    // search and remove comments like /* */ and //
    $json = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $json);
    $json = json_decode( preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true );
    //$json = preg_replace('/"([a-zA-Z]+[a-zA-Z0-9_]*)":([a-zA-Z]+[a-zA-Z0-9_]*)/','$1:$2',$json);
    //$json = preg_replace('/"([a-zA-Z_]+[a-zA-Z0-9_]*)":/','$1:',$json);

    /*if(version_compare(phpversion(), '5.4.0', '>=')) { 

        return json_decode($json, $assoc, $depth, $options);
    }
    elseif(version_compare(phpversion(), '5.3.0', '>=')) { 
        return json_decode($json, $assoc, $depth);
    }
    else {
        return json_decode($json, $assoc);
    }*/
    return $json;
}


function get7DaysDates($days, $format = 'd/m'){
    $m = date("m"); $de= date("d"); $y= date("Y");
    $dateArray = array();
    for($i=0; $i<=$days-1; $i++){
        $dateArray[] = date($format, mktime(0,0,0,$m,($de-$i),$y)) ; 
    }
    return array_reverse($dateArray);
}

function in_array_r($needle, $haystack, $strict = false) {  //In_array for Multidimention
  foreach ($haystack as $item) {
      if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
          return true;
      }
  }

  return false;
}


function getAllDatesbetweenTwoDates($startdate, $enddate) {
    $start = strtotime($startdate);
    $stop = strtotime($enddate);
    $arr = array();
    for ($i=$start; $i<=$stop; $i+=86400)
    {
        $date = date("Y-m-d", $i);
        array_push($arr, $date);
    }
    return $arr;
}

function perc_calc($newval, $totalval) {
  /*$new_width = ($percentage / 100) * $totalWidth;*/
  if($totalval > 0) {
    $perc    = round2(($newval * 100) / $totalval);  
  } else {
    $perc = 0;
  }
  
  return $perc;
}


function perc_val_calc($perc, $totalval) {
  $newvalue = ($perc  * $totalval) / 100;  
  return $newvalue;
}

function round2($value) {
  return round($value,2);
}

/*Arrays*/

function fileUpload($file,$uplaodpath, $newfilename, $type="Image") {
    $errorcode = 0;
    $filefullname = $file->getClientOriginalName();
    $filename     = slugs(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
    $filetype     = $file->getClientOriginalExtension();
    $filepath     = $file->getRealPath();
    $filesize     = $file->getSize();      
    $filemimetype = $file->getMimeType();


    $file_types = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/rtf','application/octet-stream');
    $image_types = array('gif', 'jpg', 'jpeg', 'png', 'jpe');

    if($type == "Image") {
        if(isset($filefullname)) {
          //Verify Valid Image
          
          if (!in_array($filetype, $image_types)) 
          { 
            return "Error: Invalid Image Format.";
          } 

          // Verify file size - 2MB maximum
          $maxsize = 2000000;
          if($filesize > $maxsize) 
          {
            return "Error: File size is larger than the allowed limit.";
          }
        }
         
    }
    elseif($type == "Document") {
        if (!in_array($filemimetype, $file_types)) 
        { 
          return "Error: Invalid File Format.";
        } 
    }
    elseif($type == "Any") {
        if (!in_array($ext, $image_types) AND !in_array($filetype, $file_types)) 
        { 
          return "Error: Invalid File Format.";
        } 
    } else {
        return json_encode(['status' => 'fail']);
    }
    //Set New file Name
    $newfilename = $newfilename == 'default' ? $filename.'-'.time().'.'.$filetype : $newfilename;

    $file->move($uplaodpath,$newfilename);
    $location = asset($uplaodpath.'/'.$newfilename);
    return json_encode(['status' => 'success', 'filename' => $newfilename, 'path' => $uplaodpath, 'location' => $location]);
}

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

function getVerticalHeader($verticalslug = '')
{
    //$imgfirst = 'images/bg/verticals.jpg';
    $imgfirst = 'images/bg/verticals.jpg';
    if(!empty($verticalslug)) {
        return 'images/bg/'.$verticalslug.'.jpg';
    } else {
        return 'images/bg/verticals.jpg';
    }
}

function SearchArrayinArray($searcharray, $mainarray) 
{ 
    $arrayid = array();
    foreach ($searcharray as $key => $value) {
        $foundkey = array_search($value['email'],$mainarray);
        array_push($arrayid, $foundkey);
    }
    return $arrayid;
} 

function readCSV($csvFile, $array)
{
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle)) {
        $line_of_text[] = fgetcsv($file_handle, 0, $array['delimiter']);
    }
    fclose($file_handle);
    return $line_of_text;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function attedancetablename($subjectid) //for name only
{
    $table = 'attendence_'.$subjectid;
    
    return $table;
}