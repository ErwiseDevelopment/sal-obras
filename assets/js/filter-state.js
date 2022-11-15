(function() {
    const filterStates = document.getElementsByClassName( 'js-filter-state' )
    const filterItems = document.getElementsByClassName( 'js-filter-item' )

    for( const i of filterStates ) {
        i.addEventListener( 'click', function() {
            for( const j of filterStates ) {
                j.classList.remove( 'active' ) 
            }

            for( const k of filterItems ) {
                if( this.dataset.state == k.dataset.state ) {
                    k.classList.add( 'd-flex' )
                    k.classList.remove( 'd-none' )
                } else if( this.dataset.state == 'all-states' ) {
                    k.classList.add( 'd-flex' ) 
                    k.classList.remove( 'd-none' ) 
                } else {
                    k.classList.remove( 'd-flex' )
                    k.classList.add( 'd-none' )
                }
            }
    
            this.classList.add( 'active' )
        })
    }
})()