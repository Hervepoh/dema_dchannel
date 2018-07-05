<div class="container-fluid" style="width:100%; margin-top:-30px; padding:0px;">

    <?= flash();?>  

    <!-- le caroussel qui va presenté des spot publicitaire des annonce et autre panneau de présentation-->
    
    
        <div class="row-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- le caroussel active-->
                    <div class="item active">
                        <img src="img/mountains.png">
                        <div class="carousel-caption">
                            <h1>Le groupe Dema vous presente Channel Tv</h1>
                            <br>
                            <button type="button" class="btn btn-default"><a href="live.php" style="color:white; text-decoration:none;">Lancer un Live Tv</a> </button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/snow.png">
                    </div>
                    <div class="item">
                        <img src="img/red.png">
                    </div>
                </div>
                <!-- les controls du slide -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
 
   

    <!-- main  de la page-->
    <section>

        <!-- sous section 1  -->
        <div class="container text-center">
             
            <div class="row">
                <br><br>
                <h1>loren ipsum</h1>
                <div class="col-sm-4">
                    <div id="img"><img src="img/html5.png" id="icon" class="img img-responsive"></div> 
                    <h2>rubrique 1</h2>
                </div>
                <div class="col-sm-4">
                        <div id="img"><img src="img/css3.png" id="icon" class="img img-responsive"></div>
                    <h2>rubrique 2</h2>
                </div>
                <div class="col-sm-4">
                        <div id="img"><img src="img/bootstrap.png" id="icon" class="img img-responsive"></div>
                    <h2>rubrique 3</h2>
                </div>
                
            </div>
            <br><br>
        </div>

        <!-- sous section 2  -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center">Loren ipsum</h4>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pellentesque ipsum, id auctor
                        lorem condimentum ut. Donec vitae erat euismod, ultrices ligula ut, fringilla libero. In cursus ipsum
                        aliquet, ornare velit sed, pellentesque metus. Vestibulum porttitor massa nec justo aliquam gravida.
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vehicula
                        ut risus non mollis. Nunc in nibh ac dui accumsan tincidunt. Quisque ullamcorper purus vel blandit
                        hendrerit. Aenean id magna ut nunc placerat tristique. Cras quis sapien non quam elementum interdum.
                        Nam tincidunt risus quis volutpat pulvinar</p>
                    <p class="text-justify">Integer sed sodales risus. Curabitur ornare lacus vitae nisl dignissim, sed tincidunt nibh pretium. Nullam
                        nec auctor risus. Cras et fringilla libero. Aenean rutrum porta tortor laoreet sodales. Vivamus pulvinar,
                        dui sed malesuada venenatis, dui urna feugiat dolor, vitae porta nibh ex tempus sem. Sed convallis
                        risus id faucibus pulvinar. Praesent metus erat, mattis eget lacus vel, vulputate gravida sem. Quisque
                        aliquam, tellus quis placerat cursus, erat nibh consequat ipsum, porta semper nisi ligula sollicitudin
                        ex. Proin interdum lectus eu sapien luctus sagittis.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/bootstrap2.jpg" alt="secteurelectroique" class="img img-responsive">
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-md-6">
                    <img src="img/bootstrap2.jpg" alt="secteurelectroique" class="img img-responsive">
                </div>
                <div class="col-md-6">
                    <h4>Loren ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pellentesque ipsum, id auctor
                        lorem condimentum ut. Donec vitae erat euismod, ultrices ligula ut, fringilla libero. In cursus ipsum
                        aliquet, ornare velit sed, pellentesque metus. Vestibulum porttitor massa nec justo aliquam gravida.
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vehicula
                        ut risus non mollis. Nunc in nibh ac dui accumsan tincidunt. Quisque ullamcorper purus vel blandit
                        hendrerit. Aenean id magna ut nunc placerat tristique. Cras quis sapien non quam elementum interdum.
                        Nam tincidunt risus quis volutpat pulvinar</p>
                    <p>Integer sed sodales risus. Curabitur ornare lacus vitae nisl dignissim, sed tincidunt nibh pretium. Nullam
                        nec auctor risus. Cras et fringilla libero. Aenean rutrum porta tortor laoreet sodales. Vivamus pulvinar,
                        dui sed malesuada venenatis, dui urna feugiat dolor, vitae porta nibh ex tempus sem. Sed convallis
                        risus id faucibus pulvinar. Praesent metus erat, mattis eget lacus vel, vulputate gravida sem. Quisque
                        aliquam, tellus quis placerat cursus, erat nibh consequat ipsum, porta semper nisi ligula sollicitudin
                        ex. Proin interdum lectus eu sapien luctus sagittis.</p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- sous section 3  -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Loren ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pellentesque ipsum, id auctor
                        lorem condimentum ut. Donec vitae erat euismod, ultrices ligula ut, fringilla libero. In cursus ipsum
                        aliquet, ornare velit sed, pellentesque metus. Vestibulum porttitor massa nec justo aliquam gravida.
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vehicula
                    </p>
                    </div>
                <div class="col-md-3">
                    <img src="img/sass.png" alt="secteurelectroique" class="img img-responsive">
                </div>
                <div class="col-md-3">
                    <h4>Loren ipsum</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pellentesque ipsum, id auctor
                        lorem condimentum ut. Donec vitae erat euismod, ultrices ligula ut, fringilla libero. In cursus ipsum
                        aliquet, ornare velit sed, pellentesque metus. Vestibulum porttitor massa nec justo aliquam gravida.
                        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vehicula
                    </p>
                    </div>
                <div class="col-md-3">
                    <img src="img/less.png" alt="secteurelectroique" class="img img-responsive">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h4><a href="#hidden" data-toggle="collapse">En savoir plus</a></h4>
                    <div id="hidden" class="collapse">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius pellentesque ipsum, id auctor
                                    lorem condimentum ut. Donec vitae erat euismod, ultrices ligula ut, fringilla libero. In cursus ipsum
                                    aliquet, ornare velit sed, pellentesque metus. Vestibulum porttitor massa nec justo aliquam gravida.
                                    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vehicula
                                    ut risus non mollis. Nunc in nibh ac dui accumsan tincidunt. Quisque ullamcorper purus vel blandit
                                    hendrerit. Aenean id magna ut nunc placerat tristique. Cras quis sapien non quam elementum interdum.
                                    Nam tincidunt risus quis volutpat pulvinar
                            </p>
                            <p>Integer sed sodales risus. Curabitur ornare lacus vitae nisl dignissim, sed tincidunt nibh pretium. Nullam
                                    nec auctor risus. Cras et fringilla libero. Aenean rutrum porta tortor laoreet sodales. Vivamus pulvinar,
                                    dui sed malesuada venenatis, dui urna feugiat dolor, vitae porta nibh ex tempus sem. Sed convallis
                                    risus id faucibus pulvinar. Praesent metus erat, mattis eget lacus vel, vulputate gravida sem. Quisque
                                    aliquam, tellus quis placerat cursus, erat nibh consequat ipsum, porta semper nisi ligula sollicitudin
                                    ex. Proin interdum lectus eu sapien luctus sagittis.
                            </p>
                    </div>
                </div>
            </div>

        </div>
        
    </section>

 