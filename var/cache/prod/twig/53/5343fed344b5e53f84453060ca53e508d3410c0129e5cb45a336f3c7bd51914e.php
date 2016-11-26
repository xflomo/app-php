<?php

/* MainBundle:Layout:layout.html.twig */
class __TwigTemplate_74de9d0873f886e1f8fb77b33a14e30871bd1dec2c57dc92e83907c3aa147986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

<header class=\"head-nav\">
    <div class=\"container\">
        <div class=\"menu-button\">
            <span class=\"btn-line\"></span>
            <span class=\"btn-line\"></span>
            <span class=\"btn-line\"></span>
        </div>
        <div class=\"input-group\">
            <div class=\"form-group no-padding no-margin main-searchform\">
            <input type=\"text\" id=\"mainSearchBox\" placeholder=\"Suche nach Einträgen, Kunden, Jobs usw...\" class=\"form-control\" onkeyup=\"searchEntry(this.value)\">
            <span class=\"input-group-addon\"><i class=\"material-icons\">search</i></span>
            </div>
            <div class=\"searchresult-box\">
            </div>
        </div>
        <div class=\"menu-bar-top\">
            <div class=\"logedin-user-container\">
                <a href=\"/mitarbeiter/";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "url", array()), "html", null, true);
        echo "/kalender/kw/";
        echo twig_escape_filter($this->env, (isset($context["aktlKw"]) ? $context["aktlKw"] : null), "html", null, true);
        echo "\" title=\"Mein Kalender\">
                    <img class=\"img-responsive\" src=\"/images/mitarbeiter/";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getProfilthumb", array()), "html", null, true);
        echo "\" >
                    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getFirstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getLastname", array()), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"dropdown\">
                <i class=\"material-icons\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">more_vert</i>
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                    <li><a href=\"/uebersicht\">Übersicht</a></li>
                    <li><a href=\"/profil\">Mein Profil</a></li>
                    ";
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "uebersicht")) {
            // line 51
            echo "                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getAdmin", array()) == 1)) {
                // line 52
                echo "                        <li>
                            <a href=\"#\" data-toggle=\"modal\" data-target=\".bs-example-modal\">Neues Team erstellen</a>
                        </li>
                        ";
            }
            // line 56
            echo "                    ";
        }
        // line 57
        echo "                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "getAdmin", array()) == 1)) {
            // line 58
            echo "                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"/kunden\">Einstellungen</a></li>
                    ";
        }
        // line 61
        echo "
                    <li role=\"separator\" class=\"divider\"></li>
                    <li><a href=\"/logout\">Abmelden</a></li>
                </ul>
            </div>



        </div>
    </div>
</header>
<div class=\"header-spacer\"></div>
<div class=\"loading-overlay\">
    <div class=\"sk-fading-circle\">
        <div class=\"sk-circle1 sk-circle\"></div>
        <div class=\"sk-circle2 sk-circle\"></div>
        <div class=\"sk-circle3 sk-circle\"></div>
        <div class=\"sk-circle4 sk-circle\"></div>
        <div class=\"sk-circle5 sk-circle\"></div>
        <div class=\"sk-circle6 sk-circle\"></div>
        <div class=\"sk-circle7 sk-circle\"></div>
        <div class=\"sk-circle8 sk-circle\"></div>
        <div class=\"sk-circle9 sk-circle\"></div>
        <div class=\"sk-circle10 sk-circle\"></div>
        <div class=\"sk-circle11 sk-circle\"></div>
        <div class=\"sk-circle12 sk-circle\"></div>
    </div>
</div>
    ";
        // line 89
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "

";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "A3PLUS - Projekttool";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap-material-design.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/snackbarjs.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bs-datetimepicker/css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery-confirm/css/jquery-confirm.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/offlineJs/css/offline.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 89
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootbox/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/material.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/pace/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/matchHeight/js/matchHeight.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/snackbarjs.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery-confirm/js/jquery-confirm.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/offlineJs/js/offline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Layout:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 102,  237 => 101,  233 => 100,  229 => 99,  225 => 98,  221 => 97,  217 => 96,  213 => 95,  209 => 94,  206 => 93,  203 => 92,  197 => 89,  191 => 17,  187 => 16,  183 => 15,  179 => 14,  175 => 13,  171 => 12,  167 => 11,  163 => 10,  159 => 8,  156 => 7,  150 => 5,  144 => 104,  142 => 92,  138 => 90,  136 => 89,  106 => 61,  101 => 58,  98 => 57,  95 => 56,  89 => 52,  86 => 51,  84 => 50,  71 => 42,  67 => 41,  61 => 40,  36 => 19,  34 => 7,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}A3PLUS - Projekttool{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500" rel="stylesheet" type="text/css">*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-material-design.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/snackbarjs.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('vendor/bs-datetimepicker/css/bootstrap-material-datetimepicker.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('vendor/jquery-confirm/css/jquery-confirm.min.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('vendor/offlineJs/css/offline.css') }}">*/
/* 		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*     {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* */
/* <header class="head-nav">*/
/*     <div class="container">*/
/*         <div class="menu-button">*/
/*             <span class="btn-line"></span>*/
/*             <span class="btn-line"></span>*/
/*             <span class="btn-line"></span>*/
/*         </div>*/
/*         <div class="input-group">*/
/*             <div class="form-group no-padding no-margin main-searchform">*/
/*             <input type="text" id="mainSearchBox" placeholder="Suche nach Einträgen, Kunden, Jobs usw..." class="form-control" onkeyup="searchEntry(this.value)">*/
/*             <span class="input-group-addon"><i class="material-icons">search</i></span>*/
/*             </div>*/
/*             <div class="searchresult-box">*/
/*             </div>*/
/*         </div>*/
/*         <div class="menu-bar-top">*/
/*             <div class="logedin-user-container">*/
/*                 <a href="/mitarbeiter/{{app.user.url}}/kalender/kw/{{ aktlKw }}" title="Mein Kalender">*/
/*                     <img class="img-responsive" src="/images/mitarbeiter/{{app.user.getProfilthumb}}" >*/
/*                     {{app.user.getFirstname}} {{app.user.getLastname}}*/
/*                 </a>*/
/*             </div>*/
/*             <div class="dropdown">*/
/*                 <i class="material-icons" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">more_vert</i>*/
/*                 <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">*/
/*                     <li><a href="/uebersicht">Übersicht</a></li>*/
/*                     <li><a href="/profil">Mein Profil</a></li>*/
/*                     {% if app.request.get('_route') == 'uebersicht' %}*/
/*                         {% if app.user.getAdmin == 1 %}*/
/*                         <li>*/
/*                             <a href="#" data-toggle="modal" data-target=".bs-example-modal">Neues Team erstellen</a>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                     {% if app.user.getAdmin == 1 %}*/
/*                     <li role="separator" class="divider"></li>*/
/*                     <li><a href="/kunden">Einstellungen</a></li>*/
/*                     {% endif %}*/
/* */
/*                     <li role="separator" class="divider"></li>*/
/*                     <li><a href="/logout">Abmelden</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </header>*/
/* <div class="header-spacer"></div>*/
/* <div class="loading-overlay">*/
/*     <div class="sk-fading-circle">*/
/*         <div class="sk-circle1 sk-circle"></div>*/
/*         <div class="sk-circle2 sk-circle"></div>*/
/*         <div class="sk-circle3 sk-circle"></div>*/
/*         <div class="sk-circle4 sk-circle"></div>*/
/*         <div class="sk-circle5 sk-circle"></div>*/
/*         <div class="sk-circle6 sk-circle"></div>*/
/*         <div class="sk-circle7 sk-circle"></div>*/
/*         <div class="sk-circle8 sk-circle"></div>*/
/*         <div class="sk-circle9 sk-circle"></div>*/
/*         <div class="sk-circle10 sk-circle"></div>*/
/*         <div class="sk-circle11 sk-circle"></div>*/
/*         <div class="sk-circle12 sk-circle"></div>*/
/*     </div>*/
/* </div>*/
/*     {% block body %} {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 	<script src="{{ asset('vendor/bootbox/js/bootbox.min.js') }}"></script>*/
/*     <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('vendor/bootstrap/js/material.js') }}"></script>*/
/*     <script src="{{ asset('vendor/pace/js/pace.min.js') }}"></script>*/
/*     <script src="{{ asset('vendor/matchHeight/js/matchHeight.js') }}"></script>*/
/*     <script src="{{ asset('vendor/bootstrap/js/snackbarjs.js') }}"></script>*/
/* 	<script src="{{ asset('vendor/jquery-confirm/js/jquery-confirm.min.js') }}"></script>*/
/* 	<script src="{{ asset('vendor/offlineJs/js/offline.min.js') }}"></script>*/
/*     <script src="{{ asset('js/main.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
