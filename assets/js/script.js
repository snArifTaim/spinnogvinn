document.querySelector('.header-burger').addEventListener('click', function(event) {
  event.preventDefault();
  var target = document.querySelector('.header-burger');
  var target2 = document.querySelector('.js-header-modal');
  if (target.classList.contains('active') && target2.classList.contains('active')) {
    target.classList.remove('active');
    target2.classList.remove('active');
  } else {
    target.classList.add('active');
    target2.classList.add('active');
  }
});

document.querySelector('.game-button').addEventListener('click', function(event) {
  event.preventDefault();
  var target = document.querySelector('#play-game');
  if (target.classList.contains('show')) {
    target.classList.remove('show');
  } else {
    target.classList.add('show');
  }
  var show = document.querySelector('.show')

  // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == show) {
    target.classList.remove("show");
  }
}
});
function removeCls() {
  var target = document.querySelector("#play-game");
  target.classList.remove("show");
}

