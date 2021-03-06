<?php
namespace Autocomplete\Contract\Container;

interface NodeInterface
{

    /**
     * Get Child
     *
     * @param string $value
     * @return Node|boolean
     */
    public function getChild($value);
    /**
     * Get closest node to prefix
     *
     * @param array $prefix
     * @return Node
     */
    public function getClosest($prefix);
    /**
     * Get postfix
     *
     * @param array $prefix
     * @param array
     */
    public function getPostfix($prefix);
    /**
     * Add new node
     *
     * @param  string $name
     * @return Node|boolean
     */
    public function addChild($name);
    /**
     * Add suffix
     *
     * @param array $suffix
     * @return boolean
     */
    public function addSuffix($suffix);
    /**
     * Check if node has word
     *
     * @param array $word
     * @return boolean
     */
    public function hasWord($word);
    /**
     * Check if node has prefix
     *
     * @param array $prefix
     * @return boolean
     */
    public function hasPrefix($prefix);
    /**
     * Get endnode
     *
     * @return string|boolean
     */
    public function getEndNode();
    /**
     *
     * Set endnode
     * @param mixed $value
     */
    public function setEndNode($value);
}
