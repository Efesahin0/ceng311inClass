
var level = 1;        
var clickCount = 0;    
var delay = 500;      
var maxLevel = 6;      


var gameButton = document.getElementById("gameButton");


function moveButton() {

  var randomLeft = Math.random() * 300 + "px";
  var randomTop = Math.random() * 300 + "px";
  

  gameButton.style.marginLeft = randomLeft;
  gameButton.style.marginTop = randomTop;
}

gameButton.addEventListener("mouseover", function() {
  setTimeout(moveButton, delay);
});

gameButton.addEventListener("click", function() {
  clickCount++;

  if (clickCount === 3) {
    if (level === maxLevel) {
      alert("Congratulations! You completed the final level (Level " + level + ")!");
      gameButton.disabled = true;
    } else {
      alert("You are the winner! You can go next level" + (level + 1));
      level++;
      clickCount = 0;
      delay = Math.max(0, delay - 100);
    }
  }
});
