<div class="col-md-12 search-table-col">
<<<<<<< HEAD
<header>
<h3>Rent</h3> 
</header>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control">
    </div><span class="counter pull-right"></span>
        <a class="btn btn-primary modal-open" href="<?php echo base_url();?>index.php/home/add_rent">New Rent</a>     
        <div class="table-responsive table-bordered table table-hover table-bordered results">
                <table class="table table-bordered table-hover">
                    <thead class="bill-header cs">
                         <tr>
                            <th id="trs-hd" class="">Rent ID</th>
                            <th id="trs-hd" class="">Name</th>
                            <th id="trs-hd" class="">Start Date</th>
                            <th id="trs-hd" class="">End Date</th>
                            <th id="trs-hd" class="">Status</th>
                            <th id="trs-hd" class="">Action</th>
                         </tr>
                    </thead>
                        <tbody>
                            <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                        <td>
                                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" >Options</button>
                                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Edit</a><a class="dropdown-item" role="presentation" href="#">Release</a><a class="dropdown-item" role="presentation" href="#">Return</a></div>
=======
                            <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
                            <button class="btn btn-primary modal-open"  data-modal="new reservation">New Rent</button>

                                <div class="modal" id="new reservation">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                New Rent
                                            <button class="close modal-close" aria-label="close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                            <div class="modal-body">
                                                <div class = "container">
                                                    <div class="row">
                                                        <!--breadcrumbs-->
                                                        <div class="wrapper">
                                                            <ul>
                                                                <li class="active">
                                                                <a href="#">
                                                                    <i class="fa fa-pencil-square-o icon"></i>
                                                                    <p>Rent Information</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                <i class="fa fa-camera-retro icon"></i>
                                                                    <p>Add Pictures</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-check-square-o icon"></i>
                                                                    <p>Finalize</p>
                                                                </a>
                                                            </li>
                                                            </ul>             
                                                        </div>
                                                        <!--breadcrumbs-->
                                                    </div>             
                                                                
                                                <div class="row">
                                                        <!-- left part -->
                                                            <div class="col-sm-6">
                                                                    
                                                                <div class="form-group">                                    
                                                                    <input type="text" class="form-control" id="" name="" >
                                                                    <label for="">Rent ID </label>
                                                                </div>
                                                                
                                                                <div class="form-group">                                        
                                                                    <input type="text" class="form-control" id="" name="" >
                                                                    <label for="">Reserve ID </label>
                                                                </div>  
                                                                
                                                                <div class="form-group">                                   
                                                                    <input type="text" class="form-control" id="" name="" >
                                                                    <label for="">Reserve Date </label>
                                                                </div>    
                                                                    
                                                                <div class="form-group">                                   
                                                                    <input type="text" class="form-control" id="" name="" >
                                                                    <label for="">Customer ID </label>
                                                                </div>  
                                                                    
                                                                <div class="form-group">                                  
                                                                    <input type="text" class="form-control" id="" name="" >
                                                                    <label for="">Name </label>
                                                                </div>  
                                                                
                                                                <div class="form-group">                                    
                                                                    <input type="text" class="form-control" id="" name="" >
                                                                    <label for="">License No.</label>
                                                                </div>  
                                                                                
                                                            </div>
                                                                        
                                                        <!-- left part -->
                                                                            
                                                                            <!--right part -->
                                                                            <div class="col-sm-6">
                                                                                <button class="btn btn-primary modal-open" style="background-color: rgb(2,73,255);" data-modal="Browse">Browse</button>
                                                                                    <div class="modal" id="Browse">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                    SELECT RESERVATION
                                                                                                    <button class="close modal-close" aria-label="close"><span aria-hidden="true">&times;</span></button>
                                                                                            </div>
                                                                                            
                                                                                            <div class="modal-body">
                                                                                                <div class = "container">
                                                                                                    <div class="table-responsive table-bordered table table-hover table-bordered results">
                                                                                                          <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
                                                                                                            <table class="table table-bordered table-hover">
                                                                                                                    <thead class="bill-header cs">
                                                                                                                        <tr>
                                                                                                                                <th id="trs-hd" class="">Rent ID</th>
                                                                                                                                <th id="trs-hd" class="">Name</th>
                                                                                                                                <th id="trs-hd" class="">Start Date</th>
                                                                                                                                <th id="trs-hd" class="">End Date</th>
                                                                                                                                <th id="trs-hd" class="">Status</th>
                                                                                                                                <th id="trs-hd" class="">Action</th>
                                                                                                                        </tr>
                                                                                                                    </thead>
                                                                                                                    <tbody>
                                                                                                                        <tr class="warning no-result">
                                                                                                                            <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                                <td></td>
                                                                                                                                <td></td>
                                                                                                                                <td></td>
                                                                                                                                <td></td>
                                                                                                                                <td></td>
                                                                                                                                <td></td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                    </div> 
                                                                                                        <div class="modal-footer">
                                                                                                                <button class="link modal-close"> Close</button> 
                                                                                                        </div>
                                                                                                </div>
                                                                                                    

                                                                                            </div>

                                                                                        </div>

                                                                                    </div>
                                                                            </div>
                                                             
                                                        <!--right part -->
                                                    </div>
>>>>>>> 2fdb5952fc2234fd03d593f255d44b8f449a7242
                                                </div>
                                        </td>
                                </tr>
                            </tbody>
                </table>
        </div>
</div> <!-- end of col-md-12 search-table-col -->