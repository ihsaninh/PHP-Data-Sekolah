<br><br>
<div style="clear: both;"></div>
        <div id="footer">
        <div class="container">
          <div class="row">
            <p style="padding-top: 20px; color: #94A4A5; padding-left: 15px;">Copyright &copy; <?= date('Y'); ?> <span style="color:#EEC21D">SMKN 2 BOGOR</span> All Right Reserved</p>
            <p class="text-right" style="margin-top: -30px; color: #94A4A5">Designed by <span style="color:#EEC21D">Ihsan N Habib</span> Powered by <span style="color:#EEC21D">Bootstrap</span></p>
          </div>
        </div>
       </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    window.setTimeout(function() {
     $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
});
</script>
  </body>
</html>