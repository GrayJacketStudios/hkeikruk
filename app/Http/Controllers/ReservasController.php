<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Timegridio\ICalReader\ICalEvents;

use ICal\ICal as ICal;

class ReservasController extends Controller
{
    public function checkRoom($room, $FI, $FT){
        
        
        switch($room){
            case "familiar":
                $ical[0] = new ICal();
                $ical[0]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/10/d3d9446802a44259755d38e6d163e820/10.ics");
                break;
            case "suite":
                $ical[0] = new ICal();
                $ical[1] = new ICal();
                $ical[0]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/7/8f14e45fceea167a5a36dedd4bea2543/7.ics");
                $ical[1]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/8/c9f0f895fb98ab9159f51fd0297e236d/8.ics");
                break;
            case "junior":
                $ical[0] = new ICal();
                $ical[0]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/9/45c48cce2e2d7fbdea1afc51c7c6ad26/9.ics");
                break;
            case "comp":
                $ical[0] = new ICal();
                $ical[1] = new ICal();
                $ical[2] = new ICal();
                $ical[3] = new ICal();
                $ical[0]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/3/eccbc87e4b5ce2fe28308fd9f2a7baf3/3.ics");
                $ical[1]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/4/a87ff679a2f3e71d9181a67b7542122c/4.ics");
                $ical[2]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/5/e4da3b7fbbce2345d7772b0674a318d5/5.ics");
                $ical[3]->initUrl("https://hostalkeikruk.otelms.com/gatepublic/ical2/6/1679091c5a880faf6fb5e6087eb1b2dc/6.ics");
                break;
            default:
                return 'false';
        }
        $habs = 0;
        foreach($ical as $cal){
            $events = $cal->eventsFromRange($FI.' 12:00:00', $FT.' 00:00:00');
            if(!$events)
                $habs += 1;
                
            else
                continue;
        }
        return $habs;
        

        
    }

    //Funcion que devuelve si la fecha entregada es temporada baja (1) o temporada alta (2) 
    public function getTemporada($fecha){
        $fecha_explode = explode("/",$fecha);
        if(($fecha_explode[0] >=01 && $fecha_explode[1] >= 05) && ($fecha_explode[0] <= 30 && $fecha_explode[1] <= 09) )
            return 1;
        else
            return 2;


    }

    //Funcion que devuelve un array con los valores en CLP y USD de una habitacion segun fecha entregada
    public function getPrecios($fecha, $habitacion){
        
    }



}
