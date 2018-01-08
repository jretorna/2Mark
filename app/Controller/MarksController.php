<?php
class MarksController extends AppController {
    public $helpers = array('Html', 'Form');
    public $uses = array('Student', 'Mark');

    public function add($studentId = null){
        if($this->request->is('post')){
            $this->Mark->create();
            $data = $this->request->data;
            $data['Mark']['studentId'] = $studentId;
            $data['Mark']['created'] = date('Y-m-d');

            if($this->Mark->save($data)) {
                $this->Flash->success(__('Nouvelle note ajoutée'));
                return $this->redirect(array('controller' => 'students', 'action' => 'view', $studentId));
            }
            $this->Flash->error(__('Impossible d\'ajouter la note'));
        }
    }
}
