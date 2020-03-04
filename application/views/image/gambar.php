<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gambar</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable, #draggable2 { width: 296px; height: 170px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 320px; height: 250px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#draggable" ).draggable({ revert: "valid" });
 
    $( "#droppable" ).droppable({
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );

  $( function() {
    $( "#draggable1" ).draggable({ revert: "valid" });
 
    $( "#droppable" ).droppable({
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
  </script>
</head>
<body>
 
 <div class="container-fluid">
  
    <div id="draggable" >
      

    </div>
     
    
    <div id="droppable" class="ui-widget-header">
      <p>Drop me here</p>
    </div>

     <div id="droppable" class="ui-widget-header">
      <p>Drop me here</p>
    </div>

     <div id="droppable" class="ui-widget-header">
      <p>Drop me here</p>
    </div>
</div>
 
 
</body>
</html>
 -->

<!--  <!DOCTYPE html>
<html>
<head>
  <title>JQuery Drag and Drop</title> 
  <script type="text/javascript" src="<?= base_url('assets/'); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>assets/js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>assets/css/jquery-ui.min.css">
</head>
<body>
  <h1>Drag and Drop</h1>
 
  <div id="seret" class="ui-widget-content" ondrop="drop(event)">
    <img src="<?= base_url('assets/'); ?>images/gambar1.jpg">
  </div>
 
  <div id="drop" class="ui-widget-header" draggable="true">
    <p>Lepaskan di sini</p>
  </div>


  <div id="seret2" class="ui-widget-content">
    <img src="<?= base_url('assets/'); ?>images/gambar2.jpg" width="296" height="170">
  </div>
 
  <div id="drop2" class="ui-widget-header">
    <p>Lepaskan di sini</p>
  </div>
  
</body>
<script type="text/javascript">

  $(document).ready(function(){
   $( "#seret" ).draggable();
   $( "#drop" ).droppable({
    drop: function( event, ui ) {
      $( this )
      .addClass( "ui-state-highlight" )
      .addClass( "gambar1.jpg" )
      .find( "p", "img")
      .html("gambar1.jpg");
    }
  });
 });

  $(document).ready(function(){
   $( "#seret2" ).draggable();
   $( "#drop2" ).droppable({
    drop: function( event, ui ) {
      $( this )
      .addClass( "ui-state-highlight" )
      .find( "p", "img")
      .html( "gambar2.jpg" );
    }
  });
 }); 
    
</script>
<style>
  #seret, #seret2 { width: 296px; height: 170px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #drop, #drop2 { width: 320px; height: 250px; padding: 0.5em; float: left; margin: 10px; }
  </style>
</html> -->

<!DOCTYPE HTML>
<html>
<head>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?= base_url('assets/'); ?>assets/js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>assets/css/jquery-ui.min.css">
<style>
#div1 {
  width: 296px; height: 170px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; border: 0.1px solid;}

#div2 {
  width: 296px; height: 170px; padding: 0.5em; float: left; margin: 10px; border: 0.1px solid black;
}
</style>
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>

<h2>Drag and Drop</h2>


<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)" class="ui-widget-content">
  <img src="<?= base_url('assets/'); ?>images/gambar2.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="296" height=170>
</div>

<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)" class="ui-widget-header"></div>

</body>
</html>


