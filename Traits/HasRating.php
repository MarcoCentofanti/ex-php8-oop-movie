<?php 
    trait HasRating{
            public $rating;

            public function getRatingLabel(){
                if($this->rating >= 8) {
                   return  "Molto consigliato";
                } elseif ($this->rating >= 6){
                    return "Consigliato";
                } else {
                    return "Non consigliato";
                }
            }
        }
    

?>