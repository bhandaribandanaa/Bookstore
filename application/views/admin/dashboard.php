
        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="<?=site_url('admin/dashboard/');?>">Home</a>
        </li>
        <li>
            <a href="<?=site_url('admin/dashboard/');?>">Dashboard</a>
        </li>
    </ul>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Members</div>
            <div>5</div>
            <span class="notification">5</span>
        </a>
    </div>

    

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>categories</div>
            <div><?= $number;?></div>
            <span class="notification yellow"><?= $number;?></span>
        </a>
    </div>

</div>



                <!--End mc_embed_signup-->
 <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-book"></i> View Revenue</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Showing the List of Sold Books<a href="" target="_blank"></a></div>
     
     <!-- Tab information -->
            <div class="col-sm-12 col-md-12" style="padding-top:30px; ">

                <div  class="tabbable-panel">
                    <div class="tabbable-line">
                        <ul class="nav nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">
                                    Revenue
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">
                                    Chart
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                  <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id='datatable'>
                                    <thead>
                                    <tr>
                                        <th>Sn No.</th>
                                        <th>Book title</th>
                                        <th>Quantity </th>        
                                        <th>Marked Price</th>
                                        <th>Actual Price</th>
                                        <th> Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $Total = 0;
                                    $i=1;   
                                    foreach($revenue as $r){
                                    ?>
                                    <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $r->book_title;?></td>
                                            <td><?php echo $r->quantity;?></td>
                                            <td><?php echo $r->price*$r->quantity;?></td>    
                                            <td><?php echo $r->actual_price*$r->quantity;?></td>
                                            <td><?php echo ($r->price*$r->quantity)-($r->actual_price*$r->quantity);?></td> 
                                        <?php
                                        $Total = $Total + ($r->price*$r->quantity)-($r->actual_price*$r->quantity); 
                                        $i++;
                                    }
                                    ?>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align: center;"><b>Total Revenue </b></td>
                                        <td colspan="3" style="text-align: center;"> <b><?=$Total ?></b> </td>
                                    </tr>
                                 </tbody>
                              </table>

                            </div>
                            <div class="tab-pane " id="tab2">
                                <canvas id="bar-chart" width="800" height="400"> Helo</canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- End of tab-->
        </div>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
    

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">


    // Bar chart
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
          labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
          datasets: [
            {
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
            }
          ]
        },
        options: {
          legend: { display: false },
          responsive: true,
          maintainAspectRatio: true,
          title: {
            display: true,
            text: 'Predicted world population (millions) in 2050'
          }
        }
    });
</script>
