<!--<img src="<?php echo base_url('assets/img/3.jpg');?>" height="140px" width="100%">-->
            <!-- Static navbar -->
            <div class="navbar navbar-default">
                <div class="container">
                         
<button id="menu"  class="butt navbar-toggle navbar-brand ">
    <span class="icon-bar"></span> 
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</button>
                 <div class="navbar-header">  
                    <a class="navbar-brand" href="<?php echo site_url('dashboard');?>">Selamat Datang!</a>
                </div>
                </div>
            </div>

<script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>


<script>
$(window).load(function(){
$('#menu').toggle(
function() {
     $('#A').show()
     $('#B').css('width','75%')
}, function() {
    $('#A').hide()
    $('#B').css('width','100%')
} ) } );
</script>


<style>
.butt {
    border: none;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    margin : 13px 10px;
    padding : 1px 5px;
}

.butt:hover {
    background-color: inherit;
}
</style>
