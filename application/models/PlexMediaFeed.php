<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
Class PlexMediaFeed extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
    }

    function getFeed($url,$token,$category,$limit='5') {
        $data = array();
        foreach($category as $k=>$v){

            $xml_url = $url.'/library/sections/'.$v.'/recentlyAdded?X-Plex-Container-Size=10&X-Plex-Token='.$token;
            $xmlRaw = file_get_contents($xml_url);
            $xmlData = $this->simplexml->xml_parse($xmlRaw);

            unset($pData);
            $pData = array();

            foreach($xmlData['Video'] as $row)
            {
                if(!$limit--) break;
                array_push($pData,
                    array ( 
                        'title' => $row['@attributes']['title'],
                        'thumb' => $url.$row['@attributes']['thumb'].'?X-Plex-Token='.$token,
                    )
                );
            }

            array_push($data,
                array ( 
                    $k => $pData
                )
            );
        }

        return $data;
    }
}
