<?php
class Tyrion {
	public function sleepWith($whore) {
		if ($whore instanceof Jaime)
			echo "Not even if I'm drunk !" . PHP_EOL;
		if ($whore instanceof Sansa)
			echo "Let's do this." . PHP_EOL;
		if ($whore instanceof Cersei)
			echo "Not even if I'm drunk !" . PHP_EOL;
	}
}
?>