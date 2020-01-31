function allowDrop(ev) {
     ev.preventDefault();  
}
      
function drag(ev) {   
     ev.dataTransfer.setData("text", ev.target.id);
}
      
function drop(ev) {
     var data = ev.dataTransfer.getData("text");
     ev.target.innerHTML = "";
     ev.target.appendChild(document.getElementById(data));
     ev.preventDefault();
}