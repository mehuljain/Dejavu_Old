<?php

/* TracestayBundle:home:index.html.twig */
class __TwigTemplate_dd74995c4a97f0b968dee8eac5061b0b4ac272719b98ac5e93b51dc787718f89 extends Twig_Template
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
        echo "<h3 style=\"margin-left:850px; font-family: 'sans-serif'; padding-top: 5px;\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" style=\"text-decoration: none\">  <span style=\"padding:8px; border-radius:5px; background-color:#2D80C4; color:white\">Sign In</span></a>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("register_website");
        echo "\" style=\"text-decoration: none\"> <span style=\"padding:8px; border-radius:5px; background-color:#2D80C4; color:white\">Register Website</span></a>
</h3>";
    }

    public function getTemplateName()
    {
        return "TracestayBundle:home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
