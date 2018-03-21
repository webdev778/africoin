
    jQuery( document ).ready( function( $ ) {
        var $token_transaction = jQuery( '#token_transaction' );
        
        // Initialize DataTable
        $token_transaction.DataTable( {
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true
        });
        
        // Initalize Select Dropdown after DataTables is created
        $token_transaction.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
            minimumResultsForSearch: -1
        });
    } );