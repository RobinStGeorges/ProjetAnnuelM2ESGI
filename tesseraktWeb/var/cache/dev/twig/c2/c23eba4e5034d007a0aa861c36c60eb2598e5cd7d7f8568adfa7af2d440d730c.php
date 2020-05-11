<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Tesserakt/Cours/showCours.html.twig */
class __TwigTemplate_65d7b41e98579ed19bebb4d6b945252528001bff43a365b69c44d124ff8bcee5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Cours/showCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Cours/showCours.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bootstrap-4.4.1-dist/css/bootstrap.css"), "html", null, true);
        echo "\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Tesserakt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/index\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/cours\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/exercices\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/profil\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
<div class=\"page\">
    <div class=\"row\">
        <div class=\"content\" style=\"width: 100% ; height:100%\">
            <center>
                <h1>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 37, $this->source); })()), "title", [], "any", false, false, false, 37), "html", null, true);
        echo "</h1>
            </center>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"content\">
                        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 42, $this->source); })()), "content", [], "any", false, false, false, 42), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"col-6\">
                    <div class=\"videoContent\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 49, $this->source); })()), "videoPath", [], "any", false, false, false, 49), "html", null, true);
        echo "
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Tesserakt/Cours/showCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  94 => 42,  86 => 37,  53 => 7,  49 => 6,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/main.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-4.4.1-dist/css/bootstrap.css') }}\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <a class=\"navbar-brand\" href=\"#\">Tesserakt</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"/index\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/cours\">Cours</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/exercices\">Exercices</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/profil\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
<div class=\"page\">
    <div class=\"row\">
        <div class=\"content\" style=\"width: 100% ; height:100%\">
            <center>
                <h1>{{ cours.title }}</h1>
            </center>
            <div class=\"row\">
                <div class=\"col-6\">
                    <div class=\"content\">
                        {{ cours.content }}
                    </div>

                </div>

                <div class=\"col-6\">
                    <div class=\"videoContent\">
                        {{ cours.videoPath }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>", "Tesserakt/Cours/showCours.html.twig", "C:\\Users\\robin\\Desktop\\ProjetM2\\ProjetAnnuelM2ESGI\\tesseraktWeb\\templates\\Tesserakt\\Cours\\showCours.html.twig");
    }
}
