var btns = document.querySelectorAll('#btn');
var closeBtn1 = document.querySelector('.fa-x');
var closeBtn2 = document.querySelector('.fa-bars');
var sideBar = document.querySelector('.sidebar');
var currentTheme = document.querySelector('.current div');
var otherThemes = document.querySelectorAll('.theme div');

//THEMES
otherThemes.forEach(otherTheme => {
  otherTheme.addEventListener('click', function() {
    let x = otherTheme.className;
      $(':root').css({
        '--green': x,
      });    
    switch (x) {
      case 'green':
        currentTheme.className = 'green';
        break;
      case 'red':
        currentTheme.className = 'red';
        break;
      case 'blue':
        currentTheme.className = 'blue';
        break;
        case 'violet':
          currentTheme.className = 'violet';
          break;
      default:
        break;
    }
});
});

//TOGGLE CLOSE BUTTON
btns.forEach(btn => {
  btn.onclick = function() {
    sideBar.classList.toggle('active');
    closeBtn1.classList.toggle('hide');
    closeBtn2.classList.toggle('hide');
    sideBar.style.transition = 'all ease 0.5s';
}
});


//SEARCH INPUT
$("#search").on("keyup", function() {
  value = $(this).val().toLowerCase();
  var value = $(this).val().toLowerCase();
  $(".table tbody tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
  });