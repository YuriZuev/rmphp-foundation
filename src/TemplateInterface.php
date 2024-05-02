<?php

namespace Rmphp\Foundation;

interface TemplateInterface {

	/**
	 * @param string $template
	 * @param array $resource
	 * @return TemplateInterface
	 */
	public function setTemplate(string $template, array $resource = []): TemplateInterface;

	/**
	 * @param string $subtemplatePath
	 * @return TemplateInterface
	 */
	public function setSubtemplatePath(string $subtemplatePath = "") : TemplateInterface;

	/**
	 * @return string
	 */
	public function getSubtemplatePath(): string;

	/**
	 * @param array $aliases
	 * @return TemplateInterface
	 */
	public function setSubtemplatePathAlias(array $aliases = []) : TemplateInterface;

	/**
	 * @return array
	 */
	public function getSubtemplatePathAlias() : array;

	/**
	 * @param string $subtemplate
	 * @return string
	 */
	public function getFullSubtemplatePath(string $subtemplate) : string;

	/**
	 * @param string $point
	 * @param string $string
	 * @return void
	 */
	public function setValue(string $point, string $string) : void;

	/**
	 * @param string $point
	 * @param string $string
	 * @return void
	 */
	public function addValue(string $point, string $string) : void;

	/**
	 * @param string $point
	 * @param string $subtemplate
	 * @param array $resource
	 * @return void
	 */
	public function setSubtemplate(string $point, string $subtemplate, array $resource = []) : void;

	/**
	 * @param string $point
	 * @param string $subtemplate
	 * @param array $resource
	 * @return void
	 */
	public function addSubtemplate(string $point, string $subtemplate, array $resource = []) : void;

	/**
	 * @param string $incFile
	 * @return string
	 */
	public function inc(string $incFile) : string;

	/**
	 * @param string $point
	 * @return string
	 */
	public function getPoint(string $point) : string;

	/**
	 * @return string
	 */
	public function getResponse(): string;
}