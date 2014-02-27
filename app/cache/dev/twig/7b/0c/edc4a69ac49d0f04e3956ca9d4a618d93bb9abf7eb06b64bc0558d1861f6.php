<?php

/* RoelabGusBundle:Default:email.txt.twig */
class __TwigTemplate_7b0cedc4a69ac49d0f04e3956ca9d4a618d93bb9abf7eb06b64bc0558d1861f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
 ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "     Hello ";
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "!
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }
}
