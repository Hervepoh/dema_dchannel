<?php
    function getChannel($db,$nb=null,$id=null){
        if($nb AND !$id){
            $req=$db->query('SELECT * FROM channel LIMIT'.$nb);
            $channel= $req->fetchAll();
        }elseif ($id) {
            $req=$db->query('SELECT * FROM channel WHERE id='.$id);
            $channel= $req->fetchObject();
        }else {
            $req=$db->query('SELECT * FROM channel');
            $channel= $req->fetchAll();
        }
        return $channel;
    }
?>