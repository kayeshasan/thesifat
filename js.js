mybtn = document.getElementById("scrollbtn");

window.onscroll = function() {scrollbutton()};

function scrollbutton(){
  if (document.body.scrollTop >20 || document.documentElement.scrollTop > 20)
  {
    mybtn.style.display = "block";
  }
  else{
    mybtn.style.display= "none";
  }
}

function topFunction(){
  document.body.scrollTop= 0;
  document.documentElement.scrollTop =0;
}