<?php

/* guest/index.html.php */
class __TwigTemplate_43cf291028db36d4fd63e01eaf1f239d7ad8aa179135981e2811af05fd9cc815 extends Twig_Template
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
        $__internal_1afc0b4281f2faa59b7596ab67018507010467ec4bc9c928faee4ed3e6b5d458 = $this->env->getExtension("native_profiler");
        $__internal_1afc0b4281f2faa59b7596ab67018507010467ec4bc9c928faee4ed3e6b5d458->enter($__internal_1afc0b4281f2faa59b7596ab67018507010467ec4bc9c928faee4ed3e6b5d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guest/index.html.php"));

        // line 1
        echo "<!-- app/Resources/views/guest/index.html.php -->
<?php \$view->extend('base.html.php') ?>

<?php \$view['slots']->start('body') ?>
    <h1>Lucky Numbers: <?php echo \$view->escape(\$luckyNumberList) ?>
<?php \$view['slots']->stop() ?>";
        
        $__internal_1afc0b4281f2faa59b7596ab67018507010467ec4bc9c928faee4ed3e6b5d458->leave($__internal_1afc0b4281f2faa59b7596ab67018507010467ec4bc9c928faee4ed3e6b5d458_prof);

    }

    public function getTemplateName()
    {
        return "guest/index.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!-- app/Resources/views/guest/index.html.php -->*/
/* <?php $view->extend('base.html.php') ?>*/
/* */
/* <?php $view['slots']->start('body') ?>*/
/*     <h1>Lucky Numbers: <?php echo $view->escape($luckyNumberList) ?>*/
/* <?php $view['slots']->stop() ?>*/
