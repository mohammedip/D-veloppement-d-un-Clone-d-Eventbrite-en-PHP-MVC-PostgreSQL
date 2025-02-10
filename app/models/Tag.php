<?php
namespace App;

use App\model;


require_once dirname(__DIR__) . './vendor/autoload.php'; 


class Tag {

    private string $name;

public static function getAllTags(){
    $tags =CRUD::select('tags');
    return $tags;

}
public static function getTag($id){
    $tags =CRUD::select('tags', 'name', 'id = ?', [$id]);
    return $tags;

}
public static function getCountTags(){
    $tags =CRUD::select('tags','count(*) as count');
    return $tags[0]['count'];  
   
}

public  function addTag(){
    if (isset($_POST['name'])) {

        $tags = explode(',', Validation::removeSpecialCharacters($_POST['name']));
        foreach($tags as $tag) {

        $this->name =$tag;
        $tagData = [
            'name' => $this->name,
        ];
        CRUD::insert('tags', $tagData);
    }
}
}

public  function updateTag(){
    if (isset($_POST['name'])) {
        
        $this->name = Validation::removeSpecialCharacters($_POST['name']);
        $tag = [
            'name' => $this->name,
        ];
        CRUD::update('tags', $tag,'id=?',[$_POST['id']]);
    }
}
public  function deleteTag(){
    if (isset($_GET['id'])) {
        
        CRUD::delete('tags','id=?',[$_GET['id']]);
    }
}

}


?>



