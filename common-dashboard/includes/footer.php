<script>
  $(document).ready(function () {
    // Toggle submenus
    $('.sub-btn').click(function () {
      $(this).next('.sub-menu').toggleClass('showMenu');
      $(this).find('.dropdown').toggleClass('rotate');
    });

    // Handle link clicks
    function resetClasses() {
      $('.menu-link, .sub-btn, .sub-item, .sub-menu').removeClass('active sub-active showMenu');
    }

    $('.menu-link, .sub-item').click(function () {
      resetClasses();
      $(this).addClass('active');
      if ($(this).hasClass('sub-item')) {
        $(this).parent().addClass('showMenu').siblings().addClass('sub-active');
      }
    });

    // Get the current page's URL path
    var path = (window.location.pathname.split('/').pop() || 'index.php');

    // Set active classes based on the current path
    var target = $('.sidebar-menu ul li a[href="' + path + '"]').addClass('active');
    var sublink = $('.sidebar-menu ul li .sub-menu .sub-item a[href="' + path + '"]').addClass('active');

    if (target.hasClass('sub-item')) {
      target.parent().addClass('showMenu').siblings().addClass('sub-active');
    }
  });


</script>
</main>


</div>
</div>
</body>

</html>