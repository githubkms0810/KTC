<div class="scroll" id="autoScroll"> <div> <img src="./images/IMGP8563.JPG" width="400" /> <img src="./images/IMGP8564.JPG" width="400" /> </div> <div class="next"><a href="contents.php?mode=auto&page=2" class="nextPage">다음 페이지</a></div> </div>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="./jquery.jscroll.js"></script>
<script type="text/javascript">

 $(document).ready(function () {
    $('#autoScroll').jscroll({ 
      autoTrigger: true, 
      loadingHtml: '<div class="next"><img src="./images/loading.gif" alt="Loading" /></div>', 
      nextSelector: 'a.nextPage:last' });
}); 
</script>

