<?php

class ArticleModel extends RelationModel
{
    protected $_link=array(
        'comment'=>array(
            "mapping_type"=>HAS_ONE,
            "class_name"=>"comment",
            "mapping_name"=>"comment",
            "foreign_key"=>"aid",
            "mapping_field"=>array("id","comment"),
            "as_fields"=>"id:comment_id,comment",
        ),
    );
    
}

