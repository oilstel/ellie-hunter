var rand = text[Math.floor(Math.random() * text.length)];

$(document).ready(function(){
    $('#tp').html(rand);
});

console.log(rand);

let so = 0

function Marquee(){
  requestAnimationFrame(Marquee)
  tp.setAttributeNS(null,"startOffset",so+"%");
  if(so >= 400){so = 0;}
  so+= .01
}

Marquee()