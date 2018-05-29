<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Dolares extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */

        public function convertor ($from,$to,$amount) {
            /*
            $from = urlencode($from);
            $to = urlencode($to);
            $get = file_get_contents("https://finance.google.com/finance/converter?a=$amount&from=$from&to=$to");
            $get = explode("<span class=bld>",$get);
            $get = explode("</span>",$get[1]);
            $converted = preg_replace("/[^0-9\.]/", null, $get[0]);
            $formatted = number_format($converted, 2);
            return $formatted;
            */

            ini_set('max_execution_time', 60);
            $data = file_get_contents("https://finance.google.com/finance/converter?a=$amount&from=$from&to=$to");
            preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
            $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
            return number_format(round($converted, 3),2);
        }

        public function getCambDolar(){
            ini_set('max_execution_time', 60);
            //Aqui hacemos un try, ya que es posible que no siempre pueda traer la info, asi que ponemos un cambio de $633 usd a CLP como esta al dia 7/11/17
            try{
                $data = file_get_contents("https://finance.google.com/finance/converter?a=1&from=USD&to=CLP");
            }
            catch(\Exception $e){
                return 633;
            }
            preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
            $converted = preg_replace("/[^0-9.]/", "", $converted[0]);
            return number_format(round($converted, 3),2);

        }


    public function run()
    {
        //
        ini_set('max_execution_time', 60);
        $amount = $this->config['amount'];
        $from = $this->config['from'];
        $to = $this->config['to'];


        ini_set('max_execution_time', 60);
        //Aqui hacemos un try, ya que es posible que no siempre pueda traer la info, asi que ponemos un cambio de $633 usd a CLP como esta al dia 7/11/17
        try{
            $url = file_get_contents("https://finance.google.com/finance/converter?a=$amount&from=$from&to=$to");
            return $url;
            
            if($xml ===  FALSE)
            {
               return 'null';
            }
            else { 
                $rate = $xml;
                
                return 'null';
            }
        }
        catch(\Exception $e){
            return $e;
        }
        
        
        return number_format(round($converted, 3),2);
    }
}
