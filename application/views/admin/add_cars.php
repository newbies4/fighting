<header>
    <center><h3>ADD CARS </h3></center>
    <br>
</header>

<div class = "container">                 
    
        <div class="row">
            <!-- left part -->
            
            <div class="col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Car Owner * </label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Model * </label>
                </div>  
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Brand * </label>
                </div>    
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Type * </label>
                </div>  
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Seats * </label>
                </div>  
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Color * </label>
                </div>  
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" >
                    <label for="">Plate Number * </label>
                </div>  
            </div> <!-- end of col-sm-6 -->

    <!-- left part -->

    <!--center part -->
            <div class="col-sm-3">       
                                                   
                        <div class="form-group">           
                            <input type="text" class="form-control" id="" name="" >
                            <label for="">Price * </label>
                        </div>                                
                        <div class="form-group">
                            <input type="text" class="form-control" id="" name="" >
                            <label for="">Fuel Capacity * </label>
                        </div>                                 
                        <div class="form-group">
                            <select class="form-control">
                                <option selected>Select Gas Type *</option>
                                <option value="1">Diesel</option>
                                <option value="2">Unleaded</option>                              
                            </select>
                        </div>                                
                        <div class="form-group">
                            <select class="form-control">
                                <option selected>Select Driver *</option>
                                <option value="1">With Driver</option>
                                <option value="2">Without Driver</option>                           
                            </select>
                        </div>  

                        <div class="form-group">
                        <select class="form-control">
                                <option selected>Selec Transmission *</option>
                                <option value="1">Manual</option>
                                <option value="2">Automatic</option>
                                <option value="2">Dual Transmission</option>                             
                            </select>
                        </div>  
                        <div class="form-group">
                            <select class="form-control">
                                <option selected>Select Insurance Type *</option>
                                <option value="1">Compulsory Third Party (CTP)</option>
                                <option value="2">Third Party Property</option>  
                                <option value="3">Third Party, Fire and Theft</option>    
                                <option value="4">Comprehensive Car Insurance</option>               
                            </select>
                        </div>
                        <div>
                            <br>
                            <br>
                            <br>
                            <br><a class="btn btn-primary" href="">Save</a>   
                            <a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/cars">View Cars</a>   
                        </div>
                    </div> <!-- end of col-sm-3 -->
                     <!--right part -->  
                    <div class="col-sm-3">                                                          
                    <div class="form-group">
                        <label for="">Front  </label>
                        <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
                    </div> 
                    <div class="form-group">
                        <label for="">Back  </label>
                        <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
                    </div> 
                    <div class="form-group">
                        <label for="">Interior  </label>
                        <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
                    </div> 
                    <div class="form-group">
                        <label for="">Interior  </label>
                        <input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
                    </div>                      
                </div> <!-- end of col-sm-3 --> 
                    <!--right part -->                      
            </div> <!-- end of row -->
    </div> <!-- end of container -->
        