<?php
namespace MvcEngine\Controllers {

	class ControllerBase {

		// base methods
		public function __construct() {
			$this->BindModelFromGlobalState();
			$this->CleanseGlobalState();
		}

		// instance property
		public $_RequestModel;

		protected function BindModelFromGlobalState() {
			if (isset($this->_RequestModelType)) {
				// TODO: Implement a reflection-like walking of the model and retrieve same key values from GET or POST as defined
				$this->_RequestModel = new $this->_RequestModelType();
			}
            else {
                $this->_RequestModel = "No request model specified for this controller.";
            }
		}

		protected function CleanseGlobalState() {
			// TODO: Walk the global GET & POST objects and delete all keys
		}

		// To be provided by derived Controller classes

		// "virtual" property
		protected $_RequestModelType;

		// "virtual" method ... override? (dunno how in PHP)
		public function ProvideResponseBody() { return var_dump($this->_RequestModel); }
	}
}
?>