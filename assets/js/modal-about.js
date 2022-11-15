// (function() {
//     const modal = document.querySelector( '.js-modal' )
//     const overlay = document.querySelector( '.js-modal-overlay' )
//     const close = document.querySelector( '.js-modal-close' )
//     const image = document.querySelector( '.js-modal-image' ) 
//     const contents = document.getElementsByClassName( 'js-about-contents' )
//     const body = document.querySelector( 'body' )

//     for(const i of contents) {
//         i.addEventListener( 'click', function() {
//             modal.classList.add( 'active' )
//             body.classList.add( 'overflow-hidden' )
//             let aboutImageSrc = this.children[0].src 
//             image.src = aboutImageSrc
//         })
//     }

//     overlay.addEventListener( 'click', function() {
//         modal.classList.remove( 'active' )
//         body.classList.remove( 'overflow-hidden' )
//     })

//     close.addEventListener( 'click', function() {
//         modal.classList.remove( 'active' )
//         body.classList.remove( 'overflow-hidden' )
//     })
// })()

(function() {
    const modals = document.getElementsByClassName( 'js-modal' )
    const contents = document.getElementsByClassName( 'js-about-contents' )
    const close = document.getElementsByClassName( 'js-modal-close' )
    const body = document.querySelector( 'body' )

    for( const i of contents ) {
        i.addEventListener( 'click', function() {
            for( const j of modals ) {
                if( this.dataset.name == j.dataset.name && this.dataset.state == j.dataset.state ) {
                    j.classList.add( 'active' )
                    body.classList.add( 'overflow-hidden' )
                } else {
                    j.classList.remove( 'active' )
                }
            }
        })
    }

    for( const k of close ) {
        k.addEventListener( 'click', function() {
            for(const l of modals ) {
                l.classList.remove( 'active' )
                body.classList.remove( 'overflow-hidden' )
            }
        })
    }
})()