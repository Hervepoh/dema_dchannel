<style>
#flex{
    display: flex !important;
    justify-content: space-around;
    height: 550px; /* Un peu de hauteur pour que les éléments aient la place de bouger */
}
    #conteneur{
        margin:0px;
        padding:0px;
        width:400px;
        height: 500px;
        border: 1px solid black;
        box-shadow:0px 0px 10px black;
    }
    .card-content{
        overflow:hidden;
        width:90%;
        height:100px;
    }
    
    

</style>
<?php $auth=0; ?>
<?php include 'lib/includes.php';?> 
<?php include 'partials/header.php';?>  
    <br><br><br><br><br><br>
<?php
        require_once('function.php');
?>
<?php
            $req=$db->query('SELECT * FROM channel');
            $channels= $req->fetchAll(); 
            echo '<div class="container">';
            foreach ($channels as $channel): ?>
                <div id="flex">
                    <div class="card" id="conteneur">
                        <div class="card-image card">
                            <img src="http://via.placeholder.com/395x300">
                        </div>
                        <div class="card-title card"><?= $channel['name'];?></div>
                        <div class="card-content card">
                                <p><?= $channel['content'];?> <br><br><br> Par <?= $channel['author'];?> </p>
                        </div>
                        <div class="card-action card">
                            <a href="single_channel.php?id=<?= $channel['id'] ?>">Voir plus</a>
                        </div>
                     </div> 
                </div>
            <?php endforeach ?>
            <?= '</div >';?>
</div>
<?php /*include 'lib/debug.php';*/?> 
<?php include 'partials/footer.php';?>