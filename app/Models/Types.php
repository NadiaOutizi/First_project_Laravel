<?php 
namespace App\Models;
class Types{
    public static function All(){
        return ([
      
            [
                'id'=>'1',
                'nom'=>'Nintendo Switch ( OLED Model)',
                'Dimensions'=>'4” high, 9.5” long, and .55” deep (with Joy-Con attached)',
                'Weight'=>'Approx. .93 lbs
                with Joy-Con controllers attached',
                'Screen'=>'7.0" OLED touch screen',
                'Storage'=>'64 GB',
                'Battery Life'=>'Model number: HEG-001

                Approx. 4.5 – 9 hours
                
                The battery life will depend on the games you play. 
                For instance, the battery will last approximately 
                5.5 hours for The Legend of Zelda: Breath of the Wild.',
                'Image'=>'nintando/n1.webp',
              
              ],
             [
              'id'=>'2',
              'nom'=>'Nintendo Switch Lite',
              'Dimensions'=>'4” high, 9.5” long, and .55” deep (with Joy-Con attached)',
              'Weight'=>'Approx. .88 lbs
              with Joy-Con controllers attached',
              'Screen'=>'6.2" LCD touch screen',
              'Storage'=>'32 GB',
              'Battery Life'=>'Model number: HAC-001(-01)

              Approx. 4.5 – 9 hours
              
              The battery life will depend on the games you play. 
              For instance, the battery will last approximately 
              5.5 hours for The Legend of Zelda: Breath of the Wild.',
              'Image'=>'nintando/n2.webp',
            
             ],
             [
                'id'=>'3',
                'nom'=>'Nintendo Switch',
                'Dimensions'=>'3.6” high, 8.2” long, and .55” deep',
                'Weight'=>'Approx. .61 lbs',
                'Screen'=>'5.5" LCD touch screen',
                'Storage'=>'32 GB',
                'Battery Life'=>'Model number: HDH-001 

                Approx. 3 – 7 hours
                
                The battery life will depend on the games you play. 
                For instance, the battery will last approximately 
                4 hours for The Legend of Zelda: Breath of the Wild.',
                'Image'=>'nintando/n3.webp',

              
             ]
        ]
             );
        
}
public static function find($id){
      $partia = self::All();
      foreach ($partia as $partie){
        if($partie['id']==$id){
           return $partie;
        }
      }
}
}           

       
    







?>