<?php

/* RoelabGusBundle:Default:ipaddresses.html.twig */
class __TwigTemplate_677c44cc58ffbc82097d657bcbcfaae75a5a2a0edb2f791e08d5d40ca38a8ba4 extends Twig_Template
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
        echo "     IP Addresses!
\t<table border=1>
\t\t<tr>
\t\t\t<th>Action</th>
\t\t\t<th>Interface</th>
\t\t\t<th>Address</th>
\t\t\t<th>Netmask</th>
\t\t\t<th>Broadcast</th>
\t\t</tr>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["table"]) ? $context["table"] : $this->getContext($context, "table")));
        foreach ($context['_seq'] as $context["_key"] => $context["ip"]) {
            // line 14
            echo "\t\t\t<tr><td><a href=\"editip/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/edit.png"), "html", null, true);
            echo "></a> <a href=\"deleteip/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/delete.png"), "html", null, true);
            echo "></a></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "interface"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "address"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "netmask"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "broadcast"), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</table>
\t<br>
     ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:ipaddresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 16,  46 => 14,  42 => 13,  31 => 4,  28 => 3,);
    }
}
