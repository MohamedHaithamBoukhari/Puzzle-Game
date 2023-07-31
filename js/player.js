// boxes = document.querySelectorAll(".box");
const reset = document.getElementById("reset");
const validate = document.getElementById("validate");
const dropParts = document.querySelectorAll(".cadre2 .box");

reset.addEventListener('click',function(){
  location.reload();
});

validate.addEventListener('click',function(){
  j=0;
  dropParts.forEach(part => {
    if(part.firstElementChild != null && part.id == part.firstElementChild.id){
      j++;
    }
  });;
  if(j == 9 ){
    alert("you win");
  }else{
    alert("you lose");
  }
});

dropParts.forEach(part=>{ 
  part.addEventListener('dragover',over);
  part.addEventListener('drop',drop);
});

function start(e){
  e.dataTransfer.effectAllowed = "move";
  e.dataTransfer.setData("text", e.target.getAttribute("id"));
}

function over(e){
  // return false; //e.preventDefault();
  e.preventDefault();
}

function drop(e){
  e.preventDefault();
  var ob = e.dataTransfer.getData("text");
  e.currentTarget.appendChild(document.getElementById(ob));
}