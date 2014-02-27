<?php

/* RoelabGusBundle:Default:webcans.html.twig */
class __TwigTemplate_5898180c692e7f206940098ccf96922055c5c9750cee6d074d8059e0879225e6 extends Twig_Template
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
        echo "     Web Cans!
\t<table border=1>
\t\t<tr>
\t\t\t<th>Action</th>
\t\t\t<th>Name</th>
\t\t</tr>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cans"]) ? $context["cans"] : $this->getContext($context, "cans")));
        foreach ($context['_seq'] as $context["_key"] => $context["can"]) {
            // line 11
            echo "\t\t\t<tr><td>
\t\t\t";
            // line 12
            if (($this->getAttribute((isset($context["can"]) ? $context["can"] : $this->getContext($context, "can")), "id") != 1)) {
                echo "<a href=\"editwebcan/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["can"]) ? $context["can"] : $this->getContext($context, "can")), "id"), "html", null, true);
                echo "\"><img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/edit.png"), "html", null, true);
                echo "></a><a href=\"deletewebcan/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["can"]) ? $context["can"] : $this->getContext($context, "can")), "id"), "html", null, true);
                echo "\"><img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/delete.png"), "html", null, true);
                echo "></a>";
            }
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["can"]) ? $context["can"] : $this->getContext($context, "can")), "name"), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['can'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</table>
\t<br>
     ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    <table>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["webcans"]) ? $context["webcans"] : $this->getContext($context, "webcans")));
        foreach ($context['_seq'] as $context["_key"] => $context["webcan"]) {
            // line 19
            echo "            <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["webcan"]) ? $context["webcan"] : $this->getContext($context, "webcan")), "url"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webcan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </table>
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:webcans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  79 => 19,  75 => 18,  70 => 16,  66 => 14,  46 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
