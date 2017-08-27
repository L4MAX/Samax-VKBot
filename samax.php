        $this->bOn->enabled = false;
        $this->bOff->enabled = true;
        $this->bClose->enabled = false;
        $this->status->start();
        $this->toast('Бот запущен!');
        
        VK::checkAuth();
        VK::longPollConnect(function($updates){
    foreach($updates as $update){
        switch($update[0]){
            case '4':
            
              $userid = $update[7]['from'];
              $msg = explode(" ", $update[6]);
              
              $silverRandFrom = $this->rFromText->initial;
              $silverRandTo = $this->rToText->initial;
              $api = $this->api->text;
              $api_all = $this->api_all->text;
              $wtime = $this->work_time->text;
              $battery = $this->batteryLevel->text;
              $wmode = $this->mode->text;
              $modsCount = $this->modsCount->text;
              $mods = $this->modsArray->text;
              $shop = $this->shopArray->text;
              $dela = $this->delaText->text;
              $boss = $this->bossText->text;
              $silverRand = rand($silverRandFrom, $silverRandTo)/100;
              $timeNow = explode(":", $this->timeNow->text);
              $dateNow = explode(":", $this->dateNow->text);
              $versionNow = $this->version->text;
              
              $develMailPrice = 30;
              $mailPrice = 150;
              $mailSecretPrice = 350;
              $shortLinkPrice = 50;
            
        if($update[6] == 'Сагири, помощь') {
           VK::Query('messages.send', ['peer_id' => $update[3], message => ""]);
           
           $this->table->items->add([
              'time' => $timeOriginal,
              'link' => "vk.com/$_userid",
              'message' => $text,
             ]);
        }else if($msg[0] == 'Куку') {
        
           VK::Query('messages.send', ['peer_id' => $update[3], message => 'Дороу']);
        }
            break;     
         }
     }
});
