window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.paddingTop = "20px 10px";

  } else {
    document.getElementById("navbar").style.paddingTop = "80px 10px";

  }
}

/* function test() {
  var x = document.getElementById('burgerlist');
  if (x.style.display === 'none'){
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
}; */

/* import anime from 'anime.min.js'; */
import Letterize from "https://cdn.skypack.dev/letterizejs@2.0.0";
const test = new Letterize({
        targets: ".animate-me"
      });

      const animation = anime.timeline({
        targets: test.listAll,
        delay: anime.stagger(100, {
          grid: [test.list[0].length, test.list.length],
          from: "center"
        }),
        loop: true
      });

      animation
        .add({
          scale: 0.5
        })
        .add({
          letterSpacing: "10px"
        })
        .add({
          scale: 1
        })
        .add({
          letterSpacing: "6px"
        });