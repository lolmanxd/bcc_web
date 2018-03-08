<?php
    namespace App\Controller;
    use Cake\Event\Event;

    class PrincipalController extends AppController {
        
        public function beforeFilter(Event $event)
        {
            parent::beforeFilter($event);
            $this->Auth->allow('index');
        }

        public function index()
        {
            
        }
    }
    
?>