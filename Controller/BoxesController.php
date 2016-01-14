<?PHP
class BoxesController extends BoxesAppController{
    
    public $paginate=array('limit'=>10,'order'=>array('language'=>'DESC','order'=>'ASC'));
    
    public function getAll(){
        return $this->Box->find('all',array('order'=>'Box.modified ASC'));
    }

    public function getOne(){
        return $this->Box->find('all',array('order'=>'Box.modified ASC','limit'=>1));
    }
    
    public function admin_index(){
        $this->layout="Painel.admin";
        $this->paginate['order']=array('Box.order'=>'ASC','Box.created'=>'DESC');
        $posts=$this->paginate('Box');
        $this->set('posts',$posts);
    }
    
    public function admin_add(){
        $this->layout="Painel.admin";
        $this->view="admin_editor";
        if($this->request->data && ($this->request->is('post') || $this->request->is('put'))){
            if($this->Box->save($this->request->data)){
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
    public function admin_edit($id){
        $this->layout="Painel.admin";
        $this->view="admin_editor";
        $this->data=$this->Box->read('*',$id);
    }
    
    public function admin_delete($id){
        $this->autoRender=false;
        if($this->Box->delete($id)){
            $this->redirect(array('action'=>'index'));
        }
    }
    
    public function admin_order($id,$order){
        $this->autoRender=false;
        $this->Box->save(array(
                'id'=>$id,
                'order'=>$order,
        ));
    }
    
}