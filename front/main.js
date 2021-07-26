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



        (function(){
          'use strict';
        
          class Menu {
            constructor(settings) {
              this.menuRootNode = settings.menuRootNode;
              this.isOpened = false;
            }
            
            changeMenuState(menuState) {
              return this.isOpened = !menuState;
            }
            
            changeToggleHint(toggleHint, toggleNode) {
              toggleNode.textContent = toggleHint;
              return toggleHint; 
            }
          }
        
          const menuClassesNames = {
            rootClass: 'menu',
            activeClass: 'menu_activated',
            toggleClass: 'menu__toggle',
            toggleHintClass: 'menu__toggle-hint'
          }
          
          const jsMenuNode = document.querySelector(`.${menuClassesNames.rootClass}`);
          const demoMenu = new Menu ({
            menuRootNode: jsMenuNode
          });
          
          function getCurrentToggleHint(currentMenuState) {
            return (currentMenuState !== true) ? 'Open menu' : 'Close menu';
          }
          
          function toggleMenu(event) {
            
              let currentMenuState = demoMenu.changeMenuState(demoMenu.isOpened);
              let toggleHint = getCurrentToggleHint(currentMenuState);
              
              demoMenu.changeToggleHint(
                toggleHint, 
                demoMenu.menuRootNode.querySelector(`.${menuClassesNames.toggleHintClass}`)
              );
              demoMenu.menuRootNode.classList.toggle(`${menuClassesNames.activeClass}`);
              
              return currentMenuState;  
          }
          
          jsMenuNode.querySelector(`.${menuClassesNames.toggleClass}`).addEventListener('click', toggleMenu);
        })();