<?PHP
class Box extends BoxesAppModel{

    public $virtualFields=array(
        'cdate'=>"DATE_FORMAT(Box.created,'%d/%m/%Y')",
        'mdate'=>"DATE_FORMAT(Box.modified,'%d/%m/%Y')",
    );
    
    public $validate=array(
        'title'=>array('rule'=>'notEmpty','message'=>'Por favor preencha o título'),
    );
    
    public $UploadFields=array(
        'thumb'=>'img/Box',
    );
    
    public $actsAs=array(
        'Painel.Gallery',
    );
    
}