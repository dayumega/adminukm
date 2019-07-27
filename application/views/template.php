<!doctype html>
    <html>
        <head>      
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">        
            <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
         <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>        
 

                  <script>
                    tinymce.init({selector:'textarea'});
                    
                    $(function(){
                        $("#tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal2").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>

<script>
$(window).load(function(){
   /* $('#A').hide() */
    $('#A').css("display","none")
    $('#B').css('width','100%')
} );
</script>
</head>
<body>
            <?php echo $_header;?>     
            <div class="container">
                <div class="row">
                    <div class="col-md-3" id="A">
                        <?php echo $_sidebar;?>
                    </div>
                    <div class="col-md-9" id="B">
                        <?php echo $_content;?>
                    </div>
                </div>
            </div>



     
        <!-- Core Scripts - Include with every page       
        <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
        <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
         -->            
 
</body>
</html>