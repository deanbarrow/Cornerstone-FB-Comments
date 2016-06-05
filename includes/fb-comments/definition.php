<?php
class FB_Comments {

	public function ui() {
		return array(
      'title'       => __( 'Facebook  Comments', 'fb-comments' ),
      'autofocus' => array(
    		'heading' => 'h4.fb-comments-element-heading',
    		'content' => '.fb-comments'
    	),
    	'icon_group' => 'fb-comments'
    );
	}
	
	public function preview() {
		return '<div class="cs-empty-element">
					<div class="cs-empty-element-icon">
						<svg class="cs-custom-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve">
   <path d="m 28.33984,0 q 0.6836,0 1.17188,0.4883 Q 30,0.9766 30,1.6602 l 0,26.6796 q 0,0.6836 -0.48828,1.1719 Q 29.02344,30 28.33984,30 l -7.63671,0 0,-11.6211 3.88671,0 0.58594,-4.5312 -4.47265,0 0,-2.8907 q 0,-1.0937 0.45898,-1.6406 0.45898,-0.5469 1.78711,-0.5469 l 2.38281,-0.02 0,-4.043 q -1.23047,-0.1757 -3.47656,-0.1757 -2.65625,0 -4.24805,1.5625 -1.59179,1.5625 -1.59179,4.414 l 0,3.3399 -3.90626,0 0,4.5312 3.90626,0 0,11.6211 -14.35547,0 q -0.6836,0 -1.17188,-0.4883 Q 0,29.0234 0,28.3398 L 0,1.6602 Q 0,0.9766 0.48828,0.4883 0.97656,0 1.66016,0 l 26.67968,0 z"/>
</svg>
					</div>
				</div>';
	}
	
}