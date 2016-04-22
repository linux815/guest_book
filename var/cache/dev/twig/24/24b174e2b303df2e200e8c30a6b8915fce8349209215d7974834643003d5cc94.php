<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fc5b8a51bcee4a0b8f2e45e7f4aec6614f294807e69d49981462308d773c5115 extends Twig_Template
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
        $__internal_a553a1498fa7ab3b28f3ef11cfd94047c6458e18e19d986ffaf0d1c9126b5d65 = $this->env->getExtension("native_profiler");
        $__internal_a553a1498fa7ab3b28f3ef11cfd94047c6458e18e19d986ffaf0d1c9126b5d65->enter($__internal_a553a1498fa7ab3b28f3ef11cfd94047c6458e18e19d986ffaf0d1c9126b5d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a553a1498fa7ab3b28f3ef11cfd94047c6458e18e19d986ffaf0d1c9126b5d65->leave($__internal_a553a1498fa7ab3b28f3ef11cfd94047c6458e18e19d986ffaf0d1c9126b5d65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
