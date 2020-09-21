<?php
    function Money(){
        $monotoken=''; //insert token from api.monobank.ua
        $url="https://api.monobank.ua/personal/client-info";
        $havit=curl_init($url);
        curl_setopt($havit, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($havit, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($havit, CURLOPT_TIMEOUT, 60);
        curl_setopt($havit, CURLOPT_HTTPHEADER, ["X-Token: $monotoken"]);
        $response=curl_exec($havit);
        curl_close($havit);
        $response=json_decode($response, true);
        for($i=0;$i<10;$i++){
            $money=$respons[accounts][$i][balance]+$money; //true only if you have only uah)))
                                                           //otherwise usd will became uah ¯\_(ツ)_/¯
        }    
        $uah=$money/100;
        return $uah;
    }
?>
