<!DOCTYPE HTML>
<html>
<head>
<style>
.objects {
background-image: url("data:image/jpeg;base64,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");
width: 200px;
height: 10px;
}
#drop_zone {
    background-color: #EEE; 
    border: #999 1px solid;
    width: 280px; 
    height: 200px;
    padding: 8px;
    font-size: 18px;
}
</style>

<script>
function _(id){
   return document.getElementById(id); 
}
var droppedIn = false;
function drag_start(event) {
    _('app_status').innerHTML = "Dragging the "+event.target.getAttribute('id');
    event.dataTransfer.dropEffect = "move";
    event.dataTransfer.setData("text", event.target.getAttribute('id') );
}
function drag_enter(event) {
    _('app_status').innerHTML = "You are dragging over the "+event.target.getAttribute('id');
}
function drag_leave(event) {
    _('app_status').innerHTML = "You left the "+event.target.getAttribute('id');
}
function drag_drop(event) {
    event.preventDefault(); /* Prevent undesirable default behavior while dropping */
    var elem_id = event.dataTransfer.getData("text");
    event.target.appendChild( _(elem_id) );
    _('app_status').innerHTML = "Dropped "+elem_id+" into the "+event.target.getAttribute('id');
    _(elem_id).removeAttribute("draggable");
    _(elem_id).style.cursor = "default";
    droppedIn = true;

    var q1 = elem_id;
    go(q1);
    }

function drag_end(event) {
    if(droppedIn == false){
        _('app_status').innerHTML = "You let the "+event.target.getAttribute('id')+" go.";
    }
   droppedIn = false;
}
function readDropZone(){
    for(var i=0; i < _("drop_zone").children.length; i++){
        alert(_("drop_zone").children[i].id+" is in the drop zone");
    }
    /* Run Ajax request to pass any data to your server */
}
    function go(val)
    {
var p = val;
window.location.href = "index.php?name=" + p;
}



</script>

</head>
<body>
<h2 id="app_status">App status...</h2>
<h1>Drop Zone</h1>
<div id="drop_zone" ondragenter="drag_enter(event)" ondrop="drag_drop(event)" ondragover="return false" ondragleave="drag_leave(event)" ></div>
<div id="object1" class="objects" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)">object 1</div>
<div id="object2" class="objects" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)">object 2</div>
<div id="object3" class="objects" draggable="true" ondragstart="drag_start(event)" ondragend="drag_end(event)">object 3</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
<br>
<button onclick="readDropZone()">Get Object Data</button>

<button onclick="go()">Add</button>


</body>
</html>
