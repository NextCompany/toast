<?php namespace Nextcompany\Toast;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

class AdminBaseController extends Controller
{

	protected $layout = 'toast::layouts.default';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}

?>