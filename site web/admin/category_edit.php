<?php
    include '../lib/includes.php';

    if(isset($_POST['name']) && isset($_POST['slug'])){
        checkCsrf();
        $slug = $_POST['slug'];
        if(preg_match('/^[a-z\-0-9]+$/',$slug)){
            $name=$db->quote($_POST['name']);
            $slug=$db->quote($_POST['slug']);
            $db->query("INSERT INTO categories SET name=$name , slug=$slug");
            setFlash('La catégorie a bien été ajouté');
            header('Location:category.php');
            die(); 
        }else {
            setFlash('Le slug n\'est pas valide','danger');
        }     
    }
    include '../partials/admin_header.php';
?>

    <h1>Editer une catégorie</h1>
 
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">nom de la catégorie</label>
            <?= input('name');?>       
        </div>
        <div class="form-group">
            <label for="slug">URL de la categorie</label>
            <?= input('slug');?>     
        </div> 
        <div class="form-group">
            <?= csrfInput();?>     
        </div> 

        <button type="submit" class="btn btn-default">Se Connecter</button>
    </form>

<?php include '../partials/footer.php';?>