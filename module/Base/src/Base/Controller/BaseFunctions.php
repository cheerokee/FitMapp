<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 12/05/2018
 * Time: 14:48
 */

namespace Base\Controller;

use Zend\Http\Client;
use Zend\Http\Request;

class BaseFunctions
{
    public function __construct()
    {

    }

    public function formatarTexto($string,$tirarAcento = 0){

        $string = (trim($string));

        if($tirarAcento){
            $string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$string);
        }

        return $string;
    }

    public function moedaToFloat($value){
        return str_replace(',','.',str_replace('.','',$value))*1;
    }

    public function floatToMoeda($value){
        return  number_format($value, 2, ',', '.');
    }

    function toCamelCase($string, $capitalizeFirstCharacter = false)
    {

        $str = str_replace(' ', '', ucwords(str_replace('_',' ',str_replace('-', ' ', $string))));

        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }

        return $str;
    }

    function strToFriendlyUrl($str){
        $str = mb_strtolower($str);
        $i=1;
        $arr_a = array('à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ý','ý','ÿ');
        $arr_b = array('a','a','a','a','a','a','æ','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','y','y','y');

        $str = str_replace($arr_a, $arr_b,$str);

        $str = strtr($str, utf8_decode('àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ'), 'aaaaaaaceeeeiiiinoooooouuuyyy');
        $str = preg_replace("/([^a-z0-9])/",'-',utf8_encode($str));
        while($i>0) $str = str_replace('--','-',$str,$i);
        if (substr($str, -1) == '-') $str = substr($str, 0, -1);
        return $str;
    }

    function camel2dashed($str) {
        return strtolower(preg_replace('/([^A-Z-])([A-Z])/', '$1-$2', $str));
    }

    public function getLogin($redirect = true){

        $session = (array) $_SESSION['User'];
        /**
         * @var User $user
         */
        foreach($session as $v){
            if(isset($v['storage']))
                $login = $v['storage'];
        }

        if($login) {
            $db_login = $this->getEm()->getRepository('Register\Entity\User')->findOneById($login->getId());

            return $db_login;
        }else{
            if($redirect){
                return $this->redirect()->toRoute('not-have-permission');
            }else {
                return false;
            }
        }
    }

    function asortbyindex ($sortarray, $index) {
        $lastindex = count ($sortarray) - 1;
        for ($subindex = 0; $subindex < $lastindex; $subindex++) {
            $lastiteration = $lastindex - $subindex;
            for ($iteration = 0; $iteration < $lastiteration;    $iteration++) {
                $nextchar = 0;
                if (comesafter ($sortarray[$iteration][$index], $sortarray[$iteration + 1][$index])) {
                    $temp = $sortarray[$iteration];
                    $sortarray[$iteration] = $sortarray[$iteration + 1];
                    $sortarray[$iteration + 1] = $temp;
                }
            }
        }
        return ($sortarray);
    }

    function soNumero($str) {
        return preg_replace("/[^0-9]/", "", $str);
    }

    // Diferença entre dois horários
    public function diffTime($t1,$t2){
        $h_t1 = date('H',strtotime($t1));
        $m_t1 = date('i',strtotime($t1));
        $s_t1 = date('s',strtotime($t1));

        $segundos_t1 = ($h_t1 * 60 * 60) + ($m_t1 * 60) + $s_t1;

        $h_t2 = date('H',strtotime($t2));
        $m_t2 = date('i',strtotime($t2));
        $s_t2 = date('s',strtotime($t2));

        $segundos_t2 = ($h_t2 * 60 * 60) + ($m_t2 * 60) + $s_t2;

        $s_diff = 0;
        if($segundos_t1 > $segundos_t2){
            $s_diff = $segundos_t1 - $segundos_t2;
        }else{
            $s_diff = $segundos_t2 - $segundos_t1;
        }

        return $this->secToTime($s_diff);
    }

    public function sumTime($tempo_corrente,$tempo_acumulado){
        $horas = date('H',strtotime($tempo_corrente));
        $minutos = date('i',strtotime($tempo_corrente));
        $segundos = date('s',strtotime($tempo_corrente));

        $horas_total = date('H',strtotime($tempo_acumulado));
        $minutos_total = date('i',strtotime($tempo_acumulado));
        $segundos_total = date('s',strtotime($tempo_acumulado));

        $minutos_adicionais = 0;
        if($segundos_total + $segundos >= 60){ // Adicionar minutos
            $temp = ( $segundos_total + $segundos ) / 60; // ex: 1.25
            $minutos_adicionais = floor($temp); // ex: 1.25 => 1
            $segundos_total = ($temp - $minutos_adicionais) * 60; // (1.25 - 1) * 60 => 0.25 * 60 = 15 segundos
        } else {
            $segundos_total += $segundos;
        }

        $horas_adicionais = 0;
        if($minutos_total + $minutos >= 60){ // Adicionar minutos
            $temp = ( $minutos_total + $minutos ) / 60; // ex: 1.25
            $horas_adicionais = floor($temp); // ex: 1.25 => 1
            $minutos_total = ($temp - $horas_adicionais) * 60; // (1.25 - 1) * 60 => 0.25 * 60 = 15 segundos
        }else{
            $minutos_total += $minutos;
        }

        $horas_total += $horas + $horas_adicionais;
        $sumtime = str_pad($horas_total, 2, '0', STR_PAD_LEFT) . ":" . str_pad($minutos_total, 2, '0', STR_PAD_LEFT). ":" . str_pad($segundos_total, 2, '0', STR_PAD_LEFT);
        //var_dump($tempo_corrente . " + " .$tempo_acumulado . " = " . $sumtime);
        return $sumtime;
    }

    public function subTime($tempo_corrente,$tempo_acumulado){
        $tempo = $tempo_corrente;
        $horas = date('H',strtotime($tempo));
        $minutos = date('i',strtotime($tempo));
        $segundos = date('s',strtotime($tempo));

        $horas_total = date('H',strtotime($tempo_acumulado));
        $minutos_total = date('i',strtotime($tempo_acumulado));
        $segundos_total = date('s',strtotime($tempo_acumulado));

        $horas_total -= $horas;

        $segundos_a_remover = $segundos_total - $segundos;

        if($segundos_a_remover < 0){
            $minutos_total--;
            // Ex: -34 + 60 = 26
            $segundos_total = round($segundos_a_remover + 60 );
        }else{
            $segundos_total = $segundos_a_remover;
        }

        $minutos_a_remover = $minutos_total - $minutos;

        if($minutos_a_remover < 0){
            $horas_total--;
            // Ex: -34 + 60 = 26
            $minutos_total = round($minutos_a_remover + 60 );
        }else{
            $minutos_total = $minutos_a_remover;
        }

        return str_pad($horas_total, 2, '0', STR_PAD_LEFT) . ":" . str_pad($minutos_total, 2, '0', STR_PAD_RIGHT) . ":" . str_pad($segundos_total, 2, '0', STR_PAD_RIGHT);
    }

    public function getMinutes($time) {
        $tmp = explode(':',$time);
        $horas = $tmp[0];
        $minutos = $tmp[1];

        $minutos += $horas * 60;
        return $minutos;
    }

    public function getSeconds($time) {
        $tmp = explode(':',$time);
        $horas = $tmp[0];
        $minutos = $tmp[1];
        $segundos = $tmp[2];
        return ($horas * (60*60)) + ($minutos * 60) + $segundos;
    }

    public function avgTime($times) {
        $time_avg = "00:00:00";

        if(!empty($times))
        {
            $tot_segundos = 0;
            foreach($times as $time)
            {
                $horas = date('H',strtotime($time));
                $minutos = date('i',strtotime($time));
                $segundos = date('s',strtotime($time));

                $tot_segundos += ($horas * 60 * 60) + ($minutos * 60) + $segundos;
            }

            $minutes_avg = round($tot_segundos / count($times));
            $time_avg = $this->secToTime($minutes_avg);
        }

        return $time_avg;
    }

    function secToTime($segundos)
    { //mintohora
        $seconds = intval($segundos); //Converte para inteiro

        $negative = $seconds < 0; //Verifica se é um valor negativo

        if ($negative) {
            $seconds = -$seconds; //Converte o negativo para positivo para poder fazer os calculos
        }

        $hours = floor($seconds / 3600);
        $mins = floor(($seconds - ($hours * 3600)) / 60);
        $secs = floor($seconds % 60);

        $sign = $negative ? '-' : ''; //Adiciona o sinal de negativo se necessário

        return $sign . sprintf('%02d:%02d:%02d', $hours, $mins, $secs);
    }

    public function getService($uri){
        $uri = 'http://159.203.108.180' . $uri;
        //$uri = 'http://'. $_SERVER['HTTP_HOST'] . $uri;

        $request = new Request();
        $request->setMethod(Request::METHOD_GET);
        $request->setUri($uri);
        $request->getHeaders()->addHeaderLine('Content-Type:  */*');
        $request->getHeaders()->addHeaderLine('Accept:  */*');

        $config = array(
            "adapter" => 'Zend\Http\Client\Adapter\Curl',
            "sslverifypeer" => false
        );

        $client = new Client();
        $client->setRequest($request);
        $client->setOptions($config);

        $client->send();

        $response = $client->getResponse()->getBody();
        $response = json_decode($response);

        return $response;
    }

    /**
     * @param \DateTime $data_nascimento
     * @return integer
     */
    public function calculaIdade($data_nascimento) {
        return ($data_nascimento) ? (new \DateTime('now'))->diff($data_nascimento)->y : 0;
    }
}
