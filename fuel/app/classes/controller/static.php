<?php

class Controller_Static extends Controller_Template {
	public function before() {
		$this->uri_segments = Request::main()->uri->get_segments();

		// Determine if we need to use a template (other than the default one)
		if ($this->uri_segments and is_file(APPPATH.'views/'.$this->uri_segments[0].'/template.php')) {
			$this->template = $this->uri_segments[0].'/template';
		}

		parent::before();
	}
	
	public function action_index() {
		try {
			// Get the URI and set the title
			if (($uri = implode('/', $this->uri_segments))) {
				\View::set_global('title', ucwords(str_replace('-', ' ', $uri)));
			}
			else {
				\View::set_global('title', '');
				$uri = 'index';
			}

			// Try to load the view
			try {
				$this->template->content = \View::forge($uri);
			}
			// Load the view with /index on the end if it failed
			catch (Exception $e) {
				$uri = $uri.'/index';
				$this->template->content = \View::forge($uri); // Try default index
			}

			// Get a suitable value for the 'page'
			$page = str_replace('/', '-', $uri);
			// Set the page into the view
			View::set_global('page', $page);
		}
		// 404 if an above request fails
		catch (Exception $e) {
			View::set_global('page', 'page-not-found');
			$this->template->content = \View::forge('404');
			return \Response::forge($this->template, 404);
		}

		if (isset($_GET['notemplate'])) {
			$this->auto_render = false;
			return \Response::forge($this->template->content);
		}
	}
	
	public function after($response) {
		// Try to load inc/meta. This isn't a great way to do meta data but it keeps things simple for frontenders
		try {
			\View::forge('inc/meta')->render();
		}
		catch (Exception $e) {}
		
		return parent::after($response);
	}
}
