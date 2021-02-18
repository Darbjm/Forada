function init() {
    const menuNav = document.querySelectorAll( '.menu-navigation' );
    const burgerMenu = document.querySelector( '.burger-menu' );
    const burgerBars = document.querySelectorAll( '.burger-bar' );
    const burgerCross = document.querySelectorAll( '.burger-cross' );
    const siteMain = document.querySelector( '.site-main' );
    const phoneMenu = document.querySelector( '.phone-menu' );

    let menuOpen = false;

    function greyOut( i ) {
        menuNav.forEach( ( item ) => {
            item.style.color = '#8595b1';
        } );
        menuNav[ i ].style.color = 'black';
    }

    function resetColor() {
        menuNav.forEach( ( item ) => {
            item.style.color = '#005de4';
        } );
    }

    function openCloseBurger() {
        if ( ! menuOpen ) {
            burgerBars.forEach( ( bar ) => {
                bar.style.display = 'none';
            })
            burgerCross.forEach( ( cross ) => {
                cross.style.display = 'flex';
            })
            siteMain.style.display = 'none';
            phoneMenu.style.display = 'flex';
            return menuOpen = ! menuOpen;
        }
            burgerBars.forEach( ( bar ) => {
                bar.style.display = 'flex';
            })
            burgerCross.forEach( ( cross ) => {
                cross.style.display = 'none';
            })
            phoneMenu.style.display = 'none';
            siteMain.style.display = 'flex';
            return menuOpen = ! menuOpen;
    }

    menuNav.forEach( ( item, i ) => {
        item.addEventListener( 'mouseover', () => {
            greyOut( i );
        } );
        item.addEventListener( 'mouseout', () => {
            resetColor();
        } );
      } );

      burgerMenu.addEventListener( 'click', () => {
          openCloseBurger();
      } );
}
window.addEventListener( 'DOMContentLoaded', init );

