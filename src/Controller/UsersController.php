<?php
    namespace App\Controller;

    use Cake\ORM\TableRegistry;
    use Cake\Event\Event;

    class UsersController extends AppController 
    {
        public function beforeFilter(Event $event)
        {
            parent::beforeFilter($event);
            $this->Auth->allow(['cadastro','salvar']);
        }

        public function login()
        {
            if($this->request->is('post')){
                
                $user = $this->Auth->identify();

                if($user){
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                    $this->Flash->set('Login ou Senha Invalidos',['element' => 'error']);
                }
            }
            
        }

        public function cadastro()
        {
            $usersTable = TableRegistry::get('users');

            $user = $usersTable->newEntity();

            $this->set('user', $user);
        }

        public function salvar()
        {
            $usersTable = TableRegistry::get('users');

            $user = $usersTable->newEntity($this->request->data());

            if($usersTable->save($user)){
                $this->Flash->set('Usuario Cadastrado Com Sucesso');
            }else{
                $this->Flash->set('Usuario Nao Foi Cadastrado', ['element' => 'error']);
            }

            $this->redirect('Users\login');

            
        }


    }
    


?>