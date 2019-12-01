<div class="admin-content">
<header>
  <center><h3>ADD RENT </h3></center>
  <br>
</header>
<div class="container">                    
  <div class="row">
      <!-- left part -->
    <div class="col-sm-5">
        <div class="form-group">
            <input type="text" class="form-control" id="" name="" >
            <label for="">Customer Name* </label>
        </div>
        <br> <center>SCHEDULE OF RENT   
        <div class="form-group">
          <label >Start Date</label>
          <input type="date" name="bday" max="3000-12-31" 
                  min="1000-01-01" class="form-control">
          </div>
        <br>
        <div class="form-group">
          <label >End Date</label>
          <input type="date" name="bday" min="1000-01-01"
                  max="3000-12-31" class="form-control">
        </div>
        
    </div> <!-- end of col-sm-6 -->
    <!-- left part -->

     <!--right part -->  
    <div class="col-sm">                                                          
    <!-- Table  -->
      <table class="table table-bordered">
        <!-- Table head -->
        <thead>
          <tr>
            <th>Choose</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Picture</th>
            <th>Price</th>
            <th>Brand</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
            <th scope="row">
              <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2" checked>
                <label class="custom-control-label" for="tableDefaultCheck2"></label>
              </div>
            </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          
          
        </tbody>
        <!-- Table body -->
      </table>
      <h3>Chosen Cars</h3>
      <a class="btn btn-primary" href="">RENT</a>   
      <a class="btn btn-primary" href="<?php echo base_url('car_controller/show');?>">View Cars</a>  
      <!-- Table  --  >                  
    </div> <!-- end of col-sm-3 --> 
    <!--right part -->                      
  </div> <!-- end of row -->
</div> <!-- container -->
</div> <!--admin content -->