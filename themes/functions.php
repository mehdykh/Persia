<?php
/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $pe = CPersia::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($pe->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($pe->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($pe->request, true)) . "</pre>";
  return $html;
}


/**
* Prepend the base_url.
*/
function base_url($url) {
  return $pe->request->base_url . trim($url, '/');
}


/**
* Return the current url.
*/
function current_url() {
  return $pe->request->current_url;
}