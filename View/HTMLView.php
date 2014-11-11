<?php

namespace View;

class HTMLView{
    public function echoHTML($body){
        
        echo "<!DOCTYPE html>
              <html>
              <head>
                <title>Labb 1</title>
                <meta charset='UTF-8'>
              </head>
              <body>
                $body
              </body>
              </html>";
    }
}