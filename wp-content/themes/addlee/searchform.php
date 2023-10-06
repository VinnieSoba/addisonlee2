<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    
        <label for="s" class="assistive-text">
            <h2>We're here to help</h2>
        </label>
        <p>If you are looking to make, amend or cancel a booking, the quickest way is online or on the app. Simply <a href="https://book.addisonlee.com">login</a> or <a href="https://book.addisonlee.com/al/registration">register</a> now. Search our knowledge base for commonly asked questions below:</p>
		<div class="input-group">
			<!-- <input type="text" class="field form-control" name="s" id="s" placeholder="<?php //esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" /> -->
			<span class="input-group-btn">
				<button class="submit btn btn-primary" name="submit" id="searchsubmit" type="button">
                    <span class="icon-search"></span>
                </button>
			</span>
            <a class="cta" href="https://support.addisonlee.com/support/home" target="_blank" >Knowledge Base</a>
		</div>
        <div class="search-results">
            <div class="loading">
            </div>
            <div class="results">
            </div>
        </div>
	</form>
