<?php
function js_url($string = null){
	return base_url('assets/js/'.$string);
}
function css_url($string = null){
	return base_url('assets/css/'.$string);
}
function vendor_url($string = null){
	return base_url('assets/vendor/'.$string);
}
function img_url($string = null){
	return base_url('assets/img/'.$string);
}