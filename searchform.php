<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>">
    <div class="form-group">
        <input type="search" class="form-control serch-input"
            placeholder="<?php echo __( 'Search …', 'slresponsive' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="Search for" />
		<input type="submit" class="btn btn-primary" value="<?php echo __( 'Search', 'submit button' ) ?>" />
    </div>
</form>