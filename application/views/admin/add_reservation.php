<div class="admin-content">
<header>
  <center><h3>ADD RESERVATION </h3></center>
  <br>
</header>
<div class = "container">                    
  <div class="row">
    <div class="col-sm-5">
      <div class="form-group">
        <input type="text" class="form-control" id="" name="" >
        <label for="">Customer Name* </label>
      </div>
      <br> <center>SCHEDULE OF RENT   
      <div class="form-group">
        <label >Start Date</label>
        <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
        </div>
      <br>
      <div class="form-group">
        <label >End Date</label>
        <input type="date" name="bday" min="1000-01-01" max="3000-12-31" class="form-control">
      </div>
    </div> <!-- col-sm-5 -->

    <div class="col-sm">    
      <table class="table table-bordered">
        <!-- Table head -->
        <thead>
          <tr>
            <th>Reserve</th>
            <th>Model</th>
            <th>Picture</th>
            <th>Price</th>
            <th>Options</th>
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
                <label class="custom-control-label" for="tableDefaultCheck2">Check 2</label>
              </div>
            </th>
            <td>Cell 1</td>
            <td>Cell 2</td>
            <td>Cell 3</td>
            <td>Cell 3</td>
          </tr>
          <tr>
            <th scope="row">
              <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3">
                <label class="custom-control-label" for="tableDefaultCheck3">Check 3</label>
              </div>
            </th>
            <td>Cell 4</td>
            <td>Cell 5</td>
            <td>Cell 6</td>
            <td>Cell 3</td>
          </tr>
          <tr>
            <th scope="row">
              <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4">
                <label class="custom-control-label" for="tableDefaultCheck4">Check 4</label>
              </div>
            </th>
            <td>Cell 7</td>
            <td>Cell 8</td>
            <td>Cell 9</td>
            <td>Cell 3</td>
          </tr>
        </tbody>
      </table>
      <h3>Chosen Cars</h3>
      <a class="btn btn-primary" href="">RESERVE</a>   
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/cars">View Cars</a>               
    </div> <!-- col-sm -->                
  </div> <!-- row -->
</div> <!-- container --> 
</div> <!-- admin content -->