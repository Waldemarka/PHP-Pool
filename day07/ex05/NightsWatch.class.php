<?php
class NightsWatch implements IFighter {
	private $var = array();
	public function recruit($recr) {
		$this->var[] = $recr;
	}
	function fight() {
		foreach ($this->var as $recr) {
			if (method_exists(get_class($recr), 'fight'))
				$recr->fight();
		}
	}
}
?>