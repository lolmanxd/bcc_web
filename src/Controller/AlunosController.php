<?php
    namespace App\Controller;

    use Cake\ORM\TableRegistry;

    class AlunosController extends AppController{
        
        public function index(){
            $alunosTable = TableRegistry::get('aluno');
         
            $alunos = $alunosTable->find('all');

            $this->set('alunos',$alunos);
        }

        public function cadastrarAluno(){
            $alunosTable = TableRegistry::get('aluno');
            $aluno = $alunosTable->newEntity(); 

            $this->set('aluno',$aluno);
        }

        public function salva(){
            $alunosTable = TableRegistry::get('aluno');

            $aluno = $alunosTable->newEntity($this->request->data());
            
            if($alunosTable->save($aluno)){
                $this->Flash->set('Aluno Salvo Com Sucesso',['element' => 'success']);
            }else{
                $this->Flash->set('Não Foi Possivel Salvar Aluno', ['element' => 'error']);
            }

            $this->redirect('Alunos/index');
        }

        public function editar($matricula){
            $alunosTable = TableRegistry::get('aluno');

            $aluno = $alunosTable->get($matricula);

            $this->set('aluno', $aluno);
            $this->render('cadastrarAluno');
        }

        public function deletar($matricula)
        {
            $alunosTable = TableRegistry::get('aluno');

            $aluno = $alunosTable->get($matricula);

            if($alunosTable->delete($aluno)){
                $this->Flash->set('Aluno Excluido com Sucesso', ['element' => 'success']);
            }else{
                $this->Flash->set('Aluno Não Foi Excluido', ['element' => 'error']);
            }

            $this->redirect('Alunos/index');
        }
    }

?>