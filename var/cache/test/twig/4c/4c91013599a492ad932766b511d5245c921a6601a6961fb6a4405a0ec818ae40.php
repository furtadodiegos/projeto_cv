<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_678840211ed00019ee3878843cbe83cf4b0e5f94e1dc518539fc6d931a872cb7 extends Twig_Template
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
        $__internal_6986453b5f6660de6f337c29b19697ef8f6d63cd2cf9dddd31f0dbbd35cfc85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6986453b5f6660de6f337c29b19697ef8f6d63cd2cf9dddd31f0dbbd35cfc85f->enter($__internal_6986453b5f6660de6f337c29b19697ef8f6d63cd2cf9dddd31f0dbbd35cfc85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c760f32b08de178055c57906b6a54df0b4d61d7bb02214f2708f8ed8954f4513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c760f32b08de178055c57906b6a54df0b4d61d7bb02214f2708f8ed8954f4513->enter($__internal_c760f32b08de178055c57906b6a54df0b4d61d7bb02214f2708f8ed8954f4513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6986453b5f6660de6f337c29b19697ef8f6d63cd2cf9dddd31f0dbbd35cfc85f->leave($__internal_6986453b5f6660de6f337c29b19697ef8f6d63cd2cf9dddd31f0dbbd35cfc85f_prof);

        
        $__internal_c760f32b08de178055c57906b6a54df0b4d61d7bb02214f2708f8ed8954f4513->leave($__internal_c760f32b08de178055c57906b6a54df0b4d61d7bb02214f2708f8ed8954f4513_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/var/www/html/api_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
