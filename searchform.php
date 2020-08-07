<?php
$queerthm_handle = esc_attr("Search", "queer");
$queerthm_home_url = esc_url(home_url( '/' ));
$queerthm_search_label = esc_html__("Search:", "queer");
$queerthm_search_placeholder = esc_attr__("Type your search here", "queer");
$queerthm_search_button = esc_attr__("Search", "queer");

echo "<div class='search-toggle'>
<input type='checkbox' class='handle screen-reader-text'>
<label class='search toggle' for='search-toogle' title='{$queerthm_handle}'>
    <div class='search icon'></div>
</label>
<form role='search' method='get' id='searchform' class='search' action='{$queerthm_home_url}'>
    <div class='content'>
        <label class='screen-reader-text' for='s'>{$queerthm_search_label}</label>
        <input type='text' value='' name='s' id='search-field' placeholder='{$queerthm_search_placeholder}' />
        <input type='submit' id='search-submit' value='{$queerthm_search_button}' />
    </div>
</form>
</div>";
?>