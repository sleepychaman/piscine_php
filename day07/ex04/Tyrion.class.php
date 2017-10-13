<?php
	Class Tyrion extends Lannister {
		public function with($obj) {
			if (get_parent_class($obj) !== 'Lannister')
				return ("Let' sdo this");
			return ("Not even if I'm drunk!");
	}
?>