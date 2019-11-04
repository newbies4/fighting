<div class="col-md-12 search-table-col">

    <header>
        <h3>Rent</h3> 
    </header>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
    <a class="btn btn-primary modal-open" href="<?php echo base_url();?>index.php/admin_controller/add_rent">New Rent</a>     
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
                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" >Options</button></div>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Edit</a><a class="dropdown-item" role="presentation" href="#">Release</a><a class="dropdown-item" role="presentation" href="#">Return</a></div>  
                    </td>
                </tr>
            </tbody>
        </table>
    </div> <!-- table-responsive -->
</div> <!-- col-md-12 search-table-col -->