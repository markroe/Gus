<?php

/* RoelabGusBundle:Default:webjobs.html.twig */
class __TwigTemplate_90f0fbfc3b82dbdc0630f8101c6848170fae6e2627a285df8d6368f6dd276c1e extends Twig_Template
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
        echo "     Web Jobs!
\t<table border=1>
\t\t<tr>
\t\t\t<th>Action</th>
\t\t\t<th>Name</th>
\t\t\t<th>Schedule</th>
\t\t</tr>
\t\t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "\t\t\t<tr><td><a href=\"editwebjob/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/edit.png"), "html", null, true);
            echo "></a><a href=\"deletewebjob/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id"), "html", null, true);
            echo "\"><img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/roelabgus/images/delete.png"), "html", null, true);
            echo "></a></td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "name"), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "schedule"), "html", null, true);
            echo "</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t</table>
\t<br>
     ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
 ";
    }

    public function getTemplateName()
    {
        return "RoelabGusBundle:Default:webjobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 14,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
