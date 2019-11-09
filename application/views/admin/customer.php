<div class="admin-content">
<div class="col-md-12 search-table-col">
    <header>
        <h3> CUSTOMERS </h3>

    </header>
    <a class="btn btn-primary"  href="<?php echo base_url();?>index.php/admin_controller/add_customer">Add Customer</a>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
    <div class="table-responsive">
        <table class="table table-bordered" id="manageMemberTable">
        <thead class="bill-header cs">
            <tr>
            <th id="trs-hd" class="">ID</th>
            <th id="trs-hd" class="">Name</th>
            <th id="trs-hd" class="">Current Address</th> 
            <th id="trs-hd" class="">Contact No.</th>
            <th id="trs-hd" class="">Email Address</th>
            <th id="trs-hd" class="">Birth Date</th>
            <th id="trs-hd" class="">Gender</th>
            <th id="trs-hd" class="">License No.</th>
            <th id="trs-hd" class="">Valid ID No.</th>    
            <th id="trs-hd" class="">Options</th>           
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
                <td></td>
                <td></td>
                <td></td>                       
                <td>
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" >Options</button>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Edit</a><a class="dropdown-item" role="presentation" href="#">Release</a><a class="dropdown-item" role="presentation" href="#">Return</a></div>
                    </div>
                </td>
            </tr>
        </tbody> 
        </table>
    </div>
</div>
</div><!--admin-content-->



