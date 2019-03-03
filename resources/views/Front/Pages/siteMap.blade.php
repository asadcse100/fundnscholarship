@extends('Front/layouts/master')
@section('content')

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">
  <head>
    <meta http-equiv="Content-Type"
    content="application/xhtml+xml; charset=iso-8859-1" />
     <title>
    sitemap
     </title>
<!-- link description of previous page would go here -->
    <link href="sitemap.html" rel="index" title="Site Map" />
<!-- link description of next page would go here -->
<!-- link description Cascading Style Sheet -->
    <link href="basic.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  	      <h2>Site Map</h2>

<!-- the left menu division is placed under the logo division -->
<div class="left-menu">    
        <a href="#">Home</a>&nbsp; <br>
        <a href="#">About Us</a>&nbsp; <br>
        <a href="#">FAQ</a>&nbsp; <br>
        <a href="#">Application</a>&nbsp; <br>

        <h3>Student perpase</h3>
        <a href="#">Scholership as a student for Result</a>&nbsp; <br>
        <a href="#">Scholership as a student for Project</a>&nbsp; <br>
        <a href="#">Scholership as a student for Innovation</a>&nbsp; <br>
        <a href="#">Scholership as a student for Poor Fund</a>&nbsp; <br>

        <h3>Complain</h3>

        <a href="#">Add a Complain</a>&nbsp; <br>
        <a href="#">View Complain</a>&nbsp; <br>

        <h3>Institute Perpase</h3>
        <a href="#">Scholership as a institute for innovation</a>&nbsp; <br>
        <a href="#">Scholership as a institute for National Issue</a>&nbsp; <br>        

        <h3>Individual Perpase</h3>
        <a href="#">Scholership as a Individual for innovation</a>&nbsp; <br>
        <a href="#">Scholership as a Individual for National Issue</a>&nbsp; <br>

        <h3>Welfare Perpase</h3>
        <a href="#">Scholership as a Welfare for innovation</a>&nbsp; <br>
        <a href="#">Scholership as a Welfare for National Issue</a>&nbsp; <br>
</div>


       
     </div>
  </body>
</html>

@endsection