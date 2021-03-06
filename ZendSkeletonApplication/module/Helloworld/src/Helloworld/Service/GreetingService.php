<?php
namespace Helloworld\Service;

class GreetingService
{
    public function getGreeting() // получить приветствие
    {
        if(date("H") <= 11) {
            return "Good morning, world!"; // доброе утро, мир
        } else if (date("H") > 11 && date("H") < 17) {
            return "Hello, world!";        // привет, мир
        } else {
            return "Good evening, world!"; // добрый вечер, мир
        }
    }
}