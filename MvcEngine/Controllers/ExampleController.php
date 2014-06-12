<?php
namespace MvcEngine\Controllers {

	class ExampleController extends ControllerBase {
		public function __construct() {


			parent::__construct();
		}

		public function ProvideResponseBody() {
			var responseBody = parent::ProvideResponseBody();

			responseBody += "Example Controller Wuz Here.";

			return responseBody;
		}
	}

}
?>