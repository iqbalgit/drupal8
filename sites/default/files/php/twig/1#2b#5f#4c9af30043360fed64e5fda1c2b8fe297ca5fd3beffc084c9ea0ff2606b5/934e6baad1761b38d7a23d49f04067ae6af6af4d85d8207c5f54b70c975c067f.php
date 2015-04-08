<?php

/* core/modules/system/templates/admin-page.html.twig */
class __TwigTemplate_2b5f4c9af30043360fed64e5fda1c2b8fe297ca5fd3beffc084c9ea0ff2606b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"admin clearfix\">
  ";
        // line 18
        echo twig_drupal_escape_filter($this->env, (isset($context["system_compact_link"]) ? $context["system_compact_link"] : null), "html", null, true);
        echo "
  ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
            // line 20
            echo "    <div class=\"layout-column half clearfix\">
      ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["container"]) ? $context["container"] : null), "blocks"));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 22
                echo "        ";
                echo twig_drupal_escape_filter($this->env, (isset($context["block"]) ? $context["block"] : null), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 26,  46 => 24,  33 => 21,  26 => 19,  22 => 18,  59 => 35,  56 => 33,  51 => 31,  41 => 29,  37 => 22,  32 => 27,  30 => 20,  25 => 24,  23 => 23,  21 => 22,  19 => 17,);
    }
}
