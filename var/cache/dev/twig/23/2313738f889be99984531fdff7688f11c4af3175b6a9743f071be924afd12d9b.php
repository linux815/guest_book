<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ec10e4dd6832c8ca698f691ba6a11adb53a1826681bff4b389ac07f06f905a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe70bf05404855a0057b62cc742c96ba9f13c3b0400d9baa35d510b00db70c8 = $this->env->getExtension("native_profiler");
        $__internal_bbe70bf05404855a0057b62cc742c96ba9f13c3b0400d9baa35d510b00db70c8->enter($__internal_bbe70bf05404855a0057b62cc742c96ba9f13c3b0400d9baa35d510b00db70c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe70bf05404855a0057b62cc742c96ba9f13c3b0400d9baa35d510b00db70c8->leave($__internal_bbe70bf05404855a0057b62cc742c96ba9f13c3b0400d9baa35d510b00db70c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ae5e5d656a21e82b2995a7f73bd04ce4a7755878cd0a824a5a6d41d1b4bb45a = $this->env->getExtension("native_profiler");
        $__internal_8ae5e5d656a21e82b2995a7f73bd04ce4a7755878cd0a824a5a6d41d1b4bb45a->enter($__internal_8ae5e5d656a21e82b2995a7f73bd04ce4a7755878cd0a824a5a6d41d1b4bb45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ae5e5d656a21e82b2995a7f73bd04ce4a7755878cd0a824a5a6d41d1b4bb45a->leave($__internal_8ae5e5d656a21e82b2995a7f73bd04ce4a7755878cd0a824a5a6d41d1b4bb45a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad7c32357b425fcb36e2fbe6882d8fff2b8e6e5d136b82f658ddc6c5784aaeda = $this->env->getExtension("native_profiler");
        $__internal_ad7c32357b425fcb36e2fbe6882d8fff2b8e6e5d136b82f658ddc6c5784aaeda->enter($__internal_ad7c32357b425fcb36e2fbe6882d8fff2b8e6e5d136b82f658ddc6c5784aaeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad7c32357b425fcb36e2fbe6882d8fff2b8e6e5d136b82f658ddc6c5784aaeda->leave($__internal_ad7c32357b425fcb36e2fbe6882d8fff2b8e6e5d136b82f658ddc6c5784aaeda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7af4fab8cea6a17e3b74d88ec222fe1908bd5b560e9b0513fb649011470f63cb = $this->env->getExtension("native_profiler");
        $__internal_7af4fab8cea6a17e3b74d88ec222fe1908bd5b560e9b0513fb649011470f63cb->enter($__internal_7af4fab8cea6a17e3b74d88ec222fe1908bd5b560e9b0513fb649011470f63cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7af4fab8cea6a17e3b74d88ec222fe1908bd5b560e9b0513fb649011470f63cb->leave($__internal_7af4fab8cea6a17e3b74d88ec222fe1908bd5b560e9b0513fb649011470f63cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
