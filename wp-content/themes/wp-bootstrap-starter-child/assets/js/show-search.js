(function() {
    if( document.querySelector( '.js-search' ) ) {
        const search = document.querySelector( '.js-search' )
        const box = document.querySelector( '.js-search-box' )
        const close = document.querySelector( '.js-search-close' )

        console.log(search, box, close)

        search.addEventListener( 'click', function() {
            box.classList.add( 'is-active' )
        })

        close.addEventListener( 'click', function() {
            box.classList.remove( 'is-active' )
        })
    }
})()