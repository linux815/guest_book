<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df187f363db5f74b0be40cd3f479ab55a72dfc0bf4ce3b4523ac1f1ae025f4c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1bbcbe194aa5c5675b1581d65cd0fa6d1a415f48090b83a4a6413140eca9954 = $this->env->getExtension("native_profiler");
        $__internal_c1bbcbe194aa5c5675b1581d65cd0fa6d1a415f48090b83a4a6413140eca9954->enter($__internal_c1bbcbe194aa5c5675b1581d65cd0fa6d1a415f48090b83a4a6413140eca9954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1bbcbe194aa5c5675b1581d65cd0fa6d1a415f48090b83a4a6413140eca9954->leave($__internal_c1bbcbe194aa5c5675b1581d65cd0fa6d1a415f48090b83a4a6413140eca9954_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4e08a5201ce2bd55cfe1d7c86e4c95c0b7f7130fa46d3d11c75bab67cb5eed2 = $this->env->getExtension("native_profiler");
        $__internal_d4e08a5201ce2bd55cfe1d7c86e4c95c0b7f7130fa46d3d11c75bab67cb5eed2->enter($__internal_d4e08a5201ce2bd55cfe1d7c86e4c95c0b7f7130fa46d3d11c75bab67cb5eed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d4e08a5201ce2bd55cfe1d7c86e4c95c0b7f7130fa46d3d11c75bab67cb5eed2->leave($__internal_d4e08a5201ce2bd55cfe1d7c86e4c95c0b7f7130fa46d3d11c75bab67cb5eed2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d333625de0df585f2c38d46487e38ef1a15e047975cd5db1954f5ef72c4ff7e6 = $this->env->getExtension("native_profiler");
        $__internal_d333625de0df585f2c38d46487e38ef1a15e047975cd5db1954f5ef72c4ff7e6->enter($__internal_d333625de0df585f2c38d46487e38ef1a15e047975cd5db1954f5ef72c4ff7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d333625de0df585f2c38d46487e38ef1a15e047975cd5db1954f5ef72c4ff7e6->leave($__internal_d333625de0df585f2c38d46487e38ef1a15e047975cd5db1954f5ef72c4ff7e6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_576052399ced0fccf822b6279191f9d7d6462c2814673f5b3de2e223e2299da2 = $this->env->getExtension("native_profiler");
        $__internal_576052399ced0fccf822b6279191f9d7d6462c2814673f5b3de2e223e2299da2->enter($__internal_576052399ced0fccf822b6279191f9d7d6462c2814673f5b3de2e223e2299da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_576052399ced0fccf822b6279191f9d7d6462c2814673f5b3de2e223e2299da2->leave($__internal_576052399ced0fccf822b6279191f9d7d6462c2814673f5b3de2e223e2299da2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
