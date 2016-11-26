<?php

/* RasFlashAlertBundle::layout.html.twig */
class __TwigTemplate_d7630be1502500e94a8163fcaf95051cf4e4634e22032153b49403c1edd8bd00 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->env->getExtension('ras_flash_alert_extension')->getAlertPublisher())) {
            // line 2
            echo "
    <div id=\"ras-flash-alerts\">
        ";
            // line 4
            $this->loadTemplate("RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig", "RasFlashAlertBundle::layout.html.twig", 4)->display($context);
            // line 5
            echo "    </div>

    ";
            // line 7
            if ((isset($context["isAddJsAlertClose"]) ? $context["isAddJsAlertClose"] : null)) {
                // line 8
                echo "        ";
                $this->loadTemplate("RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig", "RasFlashAlertBundle::layout.html.twig", 8)->display($context);
                // line 9
                echo "    ";
            }
            // line 10
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "RasFlashAlertBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if get_alert_publisher() | length %}*/
/* */
/*     <div id="ras-flash-alerts">*/
/*         {% include 'RasFlashAlertBundle::FlashAlert/flashAlerts.html.twig' %}*/
/*     </div>*/
/* */
/*     {% if isAddJsAlertClose %}*/
/*         {% include 'RasFlashAlertBundle::FlashAlert/jsAlertClose.html.twig' %}*/
/*     {% endif %}*/
/* */
/* {% endif %}*/
