<?php

namespace Rmphp\Foundation;

interface TemplateInterface {

	public function setTemplate(string $template, array $resource = []): TemplateInterface;
	public function setSubtemplePath(string $subtemplatePath) : TemplateInterface;
	public function getSubtemplePath(): string;
	public function setValue(string $point, string $string) : void;
	public function addValue(string $point, string $string) : void;
	public function setSubtemple(string $point, string $subTempl, array $resource = []) : void;
	public function addSubtemple(string $point, string $subTempl, array $resource = []) : void;
	public function setGlobals(array $globals = []) : void;
	public function inc(string $incFile) : string;
	public function getPoint(string $point) : string;
	public function getResponse(): string;
}