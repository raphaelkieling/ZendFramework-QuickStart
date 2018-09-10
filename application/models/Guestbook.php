<?php

class Application_Model_Guestbook
{

        public $email;
        public $id;
    
        public function __constructor(string $email, int $id)
        {
            $this->email = $email;
            $this->id = $id;
        }
    
}
