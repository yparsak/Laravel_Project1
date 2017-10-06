<?php

class WebController extends BaseController {

	public function show_default()
	{
		return View::make('default.default');
	}

}
