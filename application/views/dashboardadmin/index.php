<style>
    .glyphicons {
        padding-left: 0;
        padding-bottom: 1px;
        margin-bottom: 20px;
        list-style: none;
        overflow: hidden;
      }
          
      .glyphicons li {
        float: left;
        width: 11.5%;
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
      }
      
      .glyphicons .glyphicon {
              margin-top: 5px;
              margin-bottom: 10px;
              font-size: 24px;
          display: block;
              text-align: center;
      }
</style>
<div class="panel panel-default" style="width: 550px;">
    <div class="panel-heading">
        Administrator
    </div>
    <div class="panel-body" style="margin-left: 20px;">
        <div class="container">
            <ul class="glyphicons">
                
                <li>
                  <span class="glyphicon glyphicon-user"></span>
                  <a href="<?php echo site_url('admin');?>">Admin</a>
                </li>
                <li style="margin-left: 30px;">
                  <span class="glyphicon glyphicon-off"></span>
                  <a href="<?php echo site_url('dashboardadmin/logout');?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>