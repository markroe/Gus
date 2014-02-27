<?php

/* RoelabGusBundle:Default:general.html.twig */
class __TwigTemplate_31aa8a9ba479eeaef7ea0cf2ef2e2b05070b5bde25f38ef4839954d671004d1a extends Twig_Template
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
        echo "     General!
\t<br>
\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t<table border=1>
\t<tr><th>Action</th><th>Setting</th><th>Value</th></tr>
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["setting"]) {
            // line 10
            echo "\t\t<tr><td><a href=\"editgeneral/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/edit.png"), "html", null, true);
            echo "></a></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "value"), "html", null, true);
            echo "</td></tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</table>
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
