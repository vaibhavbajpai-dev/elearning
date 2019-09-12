<!DOCTYPE html>
<head>

   <style>
      #cont {display: none; }
      .show:focus + .hide {display: inline; }
      .show:focus + .hide + #cont {display: block;}
   </style>

</head>
<body>

   <div>
        <a href="#show"class="show">[Show]</a>
        <a href="#hide"class="hide">/ [Hide]</a>
        <div id="cont">Content</div>
   </div>

</body>
</html>