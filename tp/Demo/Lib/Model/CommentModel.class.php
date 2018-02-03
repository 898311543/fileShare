<?php

class CommentModel extends RelationModel
{
    protected $_link=array(
        "user"=>array(
        "mapping_type"=>BELONGS_TO,
        "class_name"=>"user",
        "mapping_name"=>"user",
        "foreign_key"=>"comment_user",
    ),
   );
    
}

