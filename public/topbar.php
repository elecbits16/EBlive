<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<div class="container-fluid" style="background-color: #ECECEB;">






  <div id="topbar" class="col-lg-12   hidden-xs hidden-sm hidden-md " style=" float: right;  font-family: 'Montserrat', sans-serif; font-size: 12px;  padding:10px 20px 0px 0px; margin: 0px  10px 10px 0px;">

<div  class="navbar-right "  style="font-weight: 600;">
   <a href="offers.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-bookmark" style="vertical-align: text-top; padding-right:10px;"></span>&nbspOffers</a>
    <a href="http://elecbits.in/blog" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-heart" style="vertical-align: text-top; padding-right:10px;"></span>&nbspBlog</a>
    <a href="careers.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-phone-alt" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspCareers</a> 
    <a href="http://elecbits.in/extra" style="padding-left: 20px; "><span  id="g2" class="glyphicon glyphicon-thumbs-up" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspExtra</a> 
    <a href="contactus.php" style="padding-left: 20px; "><span id="g2" class="glyphicon glyphicon-envelope" style="vertical-align: text-top; padding-right:10px; ">
    </span>&nbspContact Us</a> 



 

</div>





    </div>  
 </div> 
 </div>



</body>
</html>



<script type="text/javascript">
    $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            {
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                }
            };  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }

</script>