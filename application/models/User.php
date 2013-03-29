<?php
class User extends Eloquent {
    
    public static $timestamp = true;
    
    public function links()
    {
        return $this->has_many("Link");
    }
    
}