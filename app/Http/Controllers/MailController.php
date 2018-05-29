<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\contacto;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public static function send($data)
    {

        Mail::to("contacto@hostalkeikruk.cl")->send(new contacto($data));
    }
}