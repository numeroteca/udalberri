<?php
/**
 */

add_filter('nimble_portfolio_filter_all', 'remove_nimble_portfolio_all_filter');

function remove_nimble_portfolio_all_filter($filter_tag) {
	return "";
}
?>