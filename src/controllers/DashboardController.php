<?php namespace Nextcompany\Toast;

use Illuminate\Support\Facades\View;

class DashboardController extends AdminBaseController
{

	public function index()
	{
		$this->layout->content = View::make('toast::dashboard.index');
	}

}

?>