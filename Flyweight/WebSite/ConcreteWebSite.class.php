<?php
class ConcreteWebSite extends WebSite {
	private $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function webuse(User $user)
	{
		echo sprintf('网站分类：%s 用户：%s <br />', $this->name, $user->getName());
	}
}