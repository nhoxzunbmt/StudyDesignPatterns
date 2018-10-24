<?php

/*
 *   Book classes
 */
abstract class AbstractBook {
	abstract function getAuthor();
	abstract function getTitle();
}

abstract class AbstractPHPBook extends AbstractBook {
	private $subject = "PHP";
}

abstract class AbstractMySQLBook extends AbstractBook {
	private $subject = "MySQL";
}

abstract class AbstractBookFactory {
	abstract function makePHPBook();
	abstract function makeMySQLBook();
}

class OReillyPHPBook extends AbstractPHPBook {
	private $author;
	private $title;
	private static $oddOrEven = 'odd';
	function __construct()
	{
		//alternate between 2 books
		if ('odd' == self::$oddOrEven) {
			$this->author = 'Rasmus Lerdorf and Kevin Tatroe';
			$this->title = 'Programming PHP';
			self::$oddOrEven = 'even';
		}
		else {
			$this->author = 'David Sklar and Adam Trachtenberg';
			$this->title = 'PHP Cookbook';
			self::$oddOrEven = 'odd';
		}
	}
	function getAuthor() {
		return $this->author;
	}
	function getTitle() {
		return $this->title;
	}
}

class OReillyBookFactory extends AbstractBookFactory {
	private $context = "OReilly";
	function makePHPBook() {
		return new OReillyPHPBook;
	}
	function makeMySQLBook() {
		return new OReillyMySQLBook;
	}
}



class SamsPHPBook extends AbstractPHPBook {
	private $author;
	private $title;
	function __construct() {
		//alternate randomly between 2 books
		mt_srand((double)microtime() * 10000000);
		$rand_num = mt_rand(0, 1);

		if (1 > $rand_num) {
			$this->author = 'George Schlossnagle';
			$this->title = 'Advanced PHP Programming';
		}
		else {
			$this->author = 'Christian Wenz';
			$this->title = 'PHP Phrasebook';
		}
	}
	function getAuthor() {
		return $this->author;
	}
	function getTitle() {
		return $this->title;
	}
}

class SamsBookFactory extends AbstractBookFactory {
	private $context = "Sams";
	function makePHPBook() {
		return new SamsPHPBook;
	}
	function makeMySQLBook() {
		return new SamsMySQLBook;
	}
}



function writeln($line_in) {
	echo $line_in."<br/>";
}

$bookFactoryInstance = new OReillyBookFactory();
$phpBook = $bookFactoryInstance->makePHPBook();
writeln($phpBook->getAuthor().' - '.$phpBook->getTitle());