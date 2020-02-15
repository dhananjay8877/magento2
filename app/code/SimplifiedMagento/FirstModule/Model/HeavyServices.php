<?php


namespace SimplifiedMagento\FirstModule\Model;


class HeavyServices
{
   public  function __construct()
   {

       echo "Heavy Services has been Instantiated"."<br/>";
   }

   public function printHeavyServiceMessage(){
       echo "Message From Heavy Services Class";
   }
}