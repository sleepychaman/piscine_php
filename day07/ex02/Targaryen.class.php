<?php
	Class Targaryen {
		public function resistFire() {
			return False;
		}
		public function getBurned() {
			if ($this->resistFire === TRUE)
				return ("emerges naked but unharmed".PHP_EOL);
			else
				return ("burns alive".PHP_EOL);
		}
	}
?>