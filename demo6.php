<?php
# 匿名类
# 通过new class来实例化一个匿名类
# 可用来代替一些“用后即焚”的完整类定义

interface Logger {
	public function log(string $msg);
}

class Application {
	private $logger;

	public function getLogger(): Logger {
		return $this->logger;
	}

	public function setLogger(Logger $logger) {
		$this->logger = $logger;
	}
}

$app = new Application;
$app->setLogger(new class implements Logger {
	public function log(string $msg) {
		echo $msg;
	}
});

var_dump($app->getLogger());
