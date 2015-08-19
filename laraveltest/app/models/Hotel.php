<?php
class Hotel extends Eloquent{  
    public $table = "hotel";
    protected $fillable=array('name','address','location');
}
?>

