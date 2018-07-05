<?php $auth=0; ?>
<?php include 'lib/includes.php';?> 
<?php include 'partials/header.php';?>  

<style>
    .video-conteneur {
position:relative;
padding-bottom:54.25%;
height:0;
overflow:hidden;
}

.video-conteneur #my-video{
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
}
</style>
<br><br><br><br>
<div class="video-conteneur">
    <video id="my-video" class="video-js" controls preload="auto" width="1200" height="494" poster="img/mountains.png" data-setup="{}">
        <!-- <source src="img/video.mp4" type='video/mp4'> -->
        <source src="rtmp://your.streaming.provider.net/cfx/st/&mp4:path/to/video.mp4" type='video/webm'><!-- img/video.mp4 // video/webm -->
        <p class="vjs-no-js">
            Pour profiter de ce service veuillez activer  JavaScript et les pluging flash sur votre navigateur, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>
</div>


 


<Div id = "conteneur"> Le joueur sera placé ici 

</div>
<?='<Div id = "conteneur">';?>

<?php include 'partials/footer.php';?>