<?php
  $bookmarklet_url = getRequestProtocol() .'://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<?php print '<?xml version="1.0" encoding="UTF-8"?>' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>nodeSelector Bookmarklet</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset/reset-min.css" />
    <link rel="stylesheet" href="/style.css" type='text/css' />  
    
    <link rel="icon" href="hand.png" type="image/png" />

  </head>
  <body>

    <div id='container'>

    <div class='content'>

    <h1>nodeSelector Bookmarklet</h1>

<ol><li>
Right click and bookmark this: <a href='
javascript:(
   function() { 
      var s=document.createElement("script");
          s.charset="UTF-8";
          s.src="<?php echo $bookmarklet_url ?>ns.js?x="+(Math.random());
      document.body.appendChild(s)
   })();
'>nodeSelector bookmarklet</a><!--Added: Math.random-->
</li><li>
Visit any webpage.
</li><li>
Click your newly created bookmark (should be named <b>nodeSelector bookmarklet</b>).
</li><li>
Find the interesting item on the page and click it.
</li><li>
See the xpath to that node.
</li><li>
Press <b>ESC</b> anytime to stop selecting nodes.
</li><li>
...
</li><li>
Profit.
</li></ol>

<ul><li>
<a href='http://github.com/ptarjan/nodeselector/'>Open Source (github)</a>
</li><li>
<a href='test.html'>See it in action</a>
</li><li>
<a href='ns.js'>Read the source</a>
</li></ul>

      </div>
    </div>
  </body>
</html>
<?php

function getRequestProtocol() {
  if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO']))
    return $_SERVER['HTTP_X_FORWARDED_PROTO'];
  else
    return !empty($_SERVER['HTTPS']) ? "https" : "http";
};
