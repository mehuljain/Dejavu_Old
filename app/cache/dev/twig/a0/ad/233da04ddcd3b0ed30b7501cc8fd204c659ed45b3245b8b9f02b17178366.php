<?php

/* TracestayBundle:user:index.html.twig */
class __TwigTemplate_a0ad233da04ddcd3b0ed30b7501cc8fd204c659ed45b3245b8b9f02b17178366 extends Twig_Template
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
        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "TracestayBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
