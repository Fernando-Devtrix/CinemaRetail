<?php  
	
	class TemplateController {

		/*========================
		=     Get Template       =
		========================*/
		
		public function template() {

			include "views/template.php";

		}

		/*=============================================
			Get dinamic icon from Template
		=============================================*/

		public function ctrlTemplateIcon() {

			 $table = "template";

			 $answer = TemplateModel::mdlTemplateIcon($table);

			 return $answer;

		}

	}