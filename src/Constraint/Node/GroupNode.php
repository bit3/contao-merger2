<?php

/**
 * Merger² - Module Merger for Contao Open Source CMS.
 *
 * @copyright 2013,2014 bit3 UG
 * @author    Tristan Lins <tristan.lins@bit3.de>
 * @author    David Molineus <david.molineus@netzmacht.de>
 *
 * @link      http://bit3.de
 *
 * @license   LGPL-3.0+
 */

namespace ContaoCommunityAlliance\Merger2\Constraint\Node;

class GroupNode implements NodeInterface
{
    /**
     * @var NodeInterface
     */
    protected $child;

    public function __construct(NodeInterface $child)
    {
        $this->child = $child;
    }

    /**
     * @return NodeInterface
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * {@inheritdoc}
     */
    public function evaluate()
    {
        return $this->child && $this->child->evaluate();
    }
}
