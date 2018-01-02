<?php
class StudentsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses = array('Student', 'Mark');

    public function index() {
        $this->set('students', $this->Student->find('all'));
    }

    public function view($id = null) {
        if(!$id){
            throw new NotFoundException(__('Invalid student'));
        }
        $student = $this->Student->findById($id);
        if(!$student){
            throw new NotFoundException(__('unknown student'));
        }
        $marks = $this->Mark->findByStudentId($id);
        $this->set('student',$student);
        $this->set('marks', $marks);
    }

    public function add(){
        if($this->request->is('post')){
            $this->Student->create();
            $data = $this->request->data;
            $data['Student']['created'] = date('y-m-d');

            if($this->Student->save($data)) {
                $this->Flash->success(__('Nouvel(le) étudiant(e) créé(e)'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Impossible d\'ajouter l\'étudiant(e)'));
        }
    }

    public function edit($id = null){
        if(!$id) {
            throw new NotFoundException(__('Invalid Student'));
        }

        $student = $this->Student->findById($id);
        if(!$student) {
            throw new NotFoundException(__('Unknown student'));
        }

        if($this->request->is(array('student','put'))) {
            $this->Student->id = $id;
            if($this->Student->save($this->request->data)) {
                $this->Flash->success(__('Etudiant mis à jour'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(_('Impossible de mettre à jour l\'étudiant(e)'));
        }

        if(!$this->request->data){
            $this->request->data = $student;
        }
    }

    public function delete($id){
        if($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if($this->Student->delete($id)) {
            $this->Flash->success(__('L\'étudiant(e) a été supprimé(e)')
        );
        } else {
            $this->Flash->error(__('Impossible de supprimer l\'étudiant(e)')
        );
        }

        return $this->redirect(array('action' => 'index'));
        }
}
