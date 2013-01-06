<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body<?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <!-- Begin University of Montana Header Code. Adapted from http://umt.edu/webcommittee/standards/design.aspx -->
  <div id="um-header" class="clearfix">
    <div class="container-12">
      <div id="um-logo" class="grid-3">
        <a href="http://www.umt.edu/" title="The University of Montana"><img alt="The University of Montana" src="<?php print (drupal_get_path('theme', 'fc_omega')); ?>/images/umlogo.png" width="200" title="UM Logo"></a>
      </div>
      <div id="um-navsearch">
          <nav id="um-topnav" class="grid-5">
              <ul>
                  <li class="first odd">
                      <a href="http://www.umt.edu/home/atoz/">A to Z Index</a>
                  </li>
                  <li class="even">
                      <a href="http://www.umt.edu/home/directory/">Directory</a>
                  </li>
                  <li class="last odd">
                      <a href="http://www.umt.edu/">UM Home</a>
                  </li>
              </ul>
          </nav>
          <div id="um-search" class="grid-4">
              <form accept-charset="utf-8" action="http://www.umt.edu/home/search/" id="cse-search-box" method="get">
                  <label for="q">
                      Search UM
                  </label>
                  <input class="gradient_button search_input" id="q" name="q" onblur="resetText(this);" onfocus="clearBox(this);" placeholder="Search UM" value="Search UM" type="text">
                  <input name="cx" value="004842374792843146445:2r-2xi1nlr4" type="hidden">
                  <input name="cof" value="FORID:10" type="hidden">
                  <input name="ie" value="UTF-8" type="hidden"><input class="gradient_button search_button" name="sa" value="Go" type="submit">
              </form>
          </div> <!-- /#um-search -->
      </div> <!-- /#um-topnav -->
    </div>
  </div> <!-- /#um-header -->
  <!-- End University of Montana Header Code -->
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <!-- Begin University of Montana Footer Code. Adapted from http://umt.edu/webcommittee/standards/design.aspx -->
  <div id="um-footer">
    <nav id="um-bottomnav" class="container-12">
        <ul>
            <li class="first odd">
                <a href="http://www.umt.edu/">The University of Montana</a>
            </li>
            <li class="even">
                Missoula, MT
            </li>
            <li class="odd">
                <a href="http://umt.edu/comments">Contact UM</a>
            </li>
            <li class="last even">
                <a href="http://www.umt.edu/home/accessibility">Accessibility</a>
            </li>
        </ul>
    </nav> <!-- /#um-bottomnav -->
  </div> <!-- /#um-footer -->
  <!-- End University of Montana Footer Code -->
</body>
</html>