
<?php view('admin/layouts/header')?>


<?php view('admin/layouts/sidebar') ?>



        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="Add New Product">Edit Forms</h1>
                        <h1 class="page-subhead-line">Edit Some Information About Places. </h1>

                        <?php
                          
                         view('admin/layouts/message', compact('errors'))?>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">


                            <form role="form" method="post" action="/admin/places/edit/<?php echo $pinfo['sn'];?>" enctype="multipart/form-data">



                                        <div class="form-group">
                                            <label>Place Name</label>
                                            <input class="form-control" type="text" name="place" value="<?php echo $pinfo['place'];?>">
                                            <p class="help-block">Enter place name.</p>
                                        </div>


                                 <div class="form-group">
                                            <label>Weather</label>
                                            <input class="form-control" type="numbers" name="weather" value="<?php echo  $pinfo['weather']; ?>">
                                     <p class="help-block">(1-10: cold temperature, 11-20: hot temperature).</p>
                                </div>

                                  <div class="form-group">
                                            <label>Crowd</label>
                                            <input class="form-control" type="numbers" name="crowd" value="<?php echo  $pinfo['crowd']; ?>">
                                     <p class="help-block">(1-10: less people, 11-20: more people).</p>
                                </div>

                                  <div class="form-group">
                                            <label>Infrastructure</label>
                                            <input class="form-control" type="numbers" name="infrastructure" value="<?php echo  $pinfo['infrastructure']; ?>">
                                     <p class="help-block">(1-10: less infrastructure(countryside), 11-20: more infrastructure (Developed)).</p>
                                </div>

                                  <div class="form-group">
                                            <label>Water Resources</label>
                                            <input class="form-control" type="numbers" name="simsar" value="<?php echo  $pinfo['simsar']; ?>">
                                     <p class="help-block">(1-10: no lake, no ponds, 11-20: lake, pond exist).</p>
                                </div>

                                  <div class="form-group">
                                            <label>Cost</label>
                                            <input class="form-control" type="numbers" name="cost" value="<?php echo  $pinfo['cost']; ?>">
                                     <p class="help-block">(1-10: low cost destination, 11-20: generally expensive).</p>
                                </div>

                                  <div class="form-group">
                                            <label>Distance</label>
                                            <input class="form-control" type="numbers" name="distance" value="<?php echo  $pinfo['distance']; ?>">
                                     <p class="help-block">(1-10: generally near from kathmandu, 11-20: far from kathmandu).</p>
                                </div>

                                  <div class="form-group">
                                            <label>Security</label>
                                            <input class="form-control" type="numbers" name="security" value="<?php echo  $pinfo['security']; ?>">
                                     <p class="help-block">(1-10: less secure to travel with family, 11-20: more secure to travel).</p>
                                </div>

                               <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" type="file" name="image">
                                            <br> <br>

                                            <img src="<?php echo$pinfo['image']    ?>" width="100px">
                                     <p class="help-block">Help text here.</p>
                                        </div>
                                     
                                                       </div>
                               
                                  
                                 
                                        <button type="submit" class="btn btn-info">Data Entry </button>

                                    </form>
                            </div>
                        </div>
                            </div>

                         
                            </div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php  view('admin/layouts/footer') ?>
  