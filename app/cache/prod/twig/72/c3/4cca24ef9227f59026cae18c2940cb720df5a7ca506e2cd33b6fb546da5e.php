<?php

/* RoelabGusBundle:Default:index.html.twig */
class __TwigTemplate_72c34cca24ef9227f59026cae18c2940cb720df5a7ca506e2cd33b6fb546da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "     Welcome!
<div id=\"feedWidget\" class=\"feedwidget\">
    <div id=\"activeTab\" class=\"activeTab\">
        <!-- The name of the current tab is inserted here -->
    </div>
    <div class=\"line\"></div>

    <div id=\"tabContent\">
        <!-- The feed items are inserted here -->
    </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
