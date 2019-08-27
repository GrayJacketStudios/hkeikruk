<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Timegridio\ICalReader\ICalEvents;

use ICal\ICal as ICal;

class ReservasController extends Controller
{
    public function checkRoom($room, $FI, $FT){
        
        $ical = new ICal();
        switch($room){
            case "familiar":
                $ical->initUrl("https://api.myallocator.com/callback/ota/air/v201506/ical?pid=23624&rid=120281&hash=28754");
                break;
            case "suite":
                $ical->initUrl("https://api.myallocator.com/callback/ota/air/v201506/ical?pid=23624&rid=120280&hash=a24da");
                break;
            case "junior":
                $ical->initUrl("https://api.myallocator.com/callback/ota/air/v201506/ical?pid=23624&rid=120282&hash=8df27");
                break;
            case "comp":
                $ical->initUrl("https://api.myallocator.com/callback/ota/air/v201506/ical?pid=23624&rid=120283&hash=c13ad");
                break;
            default:
                return 'false';
        }
        $events = $ical->eventsFromRange($FI.' 00:00:00', $FT.' 00:00:00');
        if(!$events)
            return 'true';
        else
            return 'false';
    }



}
