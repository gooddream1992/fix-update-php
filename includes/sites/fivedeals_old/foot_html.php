<?php 

global $pagesdir;


?>

    </div>
    <div id="column">

      <div class="subnav">
      <?php 
      
		if( file_exists($pagesdir . PAGE_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . PAGE_PARENT_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_PARENT_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . PAGE_ROOT_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_ROOT_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . 'index' . '/sidebar.php') ) {
			include_once $pagesdir . 'index' . '/sidebar.php';
		}
      ?>
      </div>
      <div class="holder">
        <h2 class="title">Nullamlacus dui ipsum conseque loborttis</h2>
        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        <p class="readmore"><a href="/">Continue Reading &raquo;</a></p>
      </div>

    </div>
    <br class="clear" />
  </div>
  <!-- END ALL -->
  <div id="footer">
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li><a href="/">Praesent et eros</a></li>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li class="last"><a href="/">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li><a href="/">Praesent et eros</a></li>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li class="last"><a href="/">Praesent et eros</a></li>
      </ul>

    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li><a href="/">Praesent et eros</a></li>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li class="last"><a href="/">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li><a href="/">Praesent et eros</a></li>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li class="last"><a href="/">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li><a href="/">Praesent et eros</a></li>
        <li><a href="/">Lorem ipsum dolor</a></li>
        <li><a href="/">Suspendisse in neque</a></li>
        <li class="last"><a href="/">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
  <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y");?> - All Rights Reserved - <a href="/">FiveDeals.co</a></p>
    <p class="fl_right">(<?=floor(CheckPointTime('footer'));?>)</p>
    <br class="clear" />
  </div>
</div>
<?php 

if(V_C == "154236"){?>
<SCRIPT FOR=window EVENT=onunload>
    var posX = event.clientX;
    var posY = event.clientY;
    var URL = document.referrer;
    if ( posY < 0 )
    {
            nStart = URL.indexOf("?");
            nEnd = URL.length;
            if ( nStart > 0 )
            {
                Domain = escape(URL.substring(0,nStart));
                Parameter = URL.substring(nStart, nEnd) + "&" + "SMOrigDomain=" + Domain;
                location.href = "redirect.php" + Parameter;
            }
    }
</SCRIPT>
<?

}

