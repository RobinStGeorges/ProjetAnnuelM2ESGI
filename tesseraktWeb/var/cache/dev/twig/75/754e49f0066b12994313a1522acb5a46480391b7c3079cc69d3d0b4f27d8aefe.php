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

/* Tesserakt/Exercice/exercices.html.twig */
class __TwigTemplate_05b5ffb74ed1e39b8efa7863dd5dfc06edf4de70399777081c0bb142734c30f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Exercice/exercices.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Tesserakt/Exercice/exercices.html.twig"));

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
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
<div class=\"page\">
    <div class=\"row\">
        <div class=\"content\" style=\"width: 100%\">
            <center>
                <h1> Les exercices disponibles</h1>
            </center>

            <div class=\"liste_de_exercices\">
                ";
        // line 41
        if (( !(isset($context["listeExercices"]) || array_key_exists("listeExercices", $context)) || twig_test_empty((isset($context["listeExercices"]) || array_key_exists("listeExercices", $context) ? $context["listeExercices"] : (function () { throw new RuntimeError('Variable "listeExercices" does not exist.', 41, $this->source); })())))) {
            // line 42
            echo "                    <p> Vous n'avez pas d'exercice diponible pour le moment ! </p>
                ";
        } else {
            // line 44
            echo "                    <ul class=\"list-group\">
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeExercices"]) || array_key_exists("listeExercices", $context) ? $context["listeExercices"] : (function () { throw new RuntimeError('Variable "listeExercices" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
                // line 46
                echo "                            <li onclick=\"window.location.href ='/exercice/'+";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo ";\" class=\"list-group-item\" style=\"color: darkgray\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                    </div>
                                    <div class=\"col-4\">
                                        <img class=\"fit-picture\" src=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/web/" . twig_get_attribute($this->env, $this->source, $context["exercice"], "imagePath", [], "any", false, false, false, 52))), "html", null, true);
                echo "\">
                                    </div>

                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </ul>
                ";
        }
        // line 60
        echo "            </div>

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
        return "Tesserakt/Exercice/exercices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 60,  128 => 58,  116 => 52,  110 => 49,  103 => 46,  99 => 45,  96 => 44,  92 => 42,  90 => 41,  53 => 7,  49 => 6,  43 => 2,);
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
                <a class=\"nav-link\" href=\"#\">Profil</a>
            </li>

        </ul>
    </div>
</nav>
<div class=\"page\">
    <div class=\"row\">
        <div class=\"content\" style=\"width: 100%\">
            <center>
                <h1> Les exercices disponibles</h1>
            </center>

            <div class=\"liste_de_exercices\">
                {% if listeExercices is not defined or listeExercices is empty   %}
                    <p> Vous n'avez pas d'exercice diponible pour le moment ! </p>
                {% else %}
                    <ul class=\"list-group\">
                        {% for exercice in listeExercices %}
                            <li onclick=\"window.location.href ='/exercice/'+{{ exercice.id }};\" class=\"list-group-item\" style=\"color: darkgray\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        {{ exercice.title }}
                                    </div>
                                    <div class=\"col-4\">
                                        <img class=\"fit-picture\" src=\"{{ asset('assets/web/' ~ exercice.imagePath) }}\">
                                    </div>

                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>

        </div>
    </div>
</div>

</body>
</html>", "Tesserakt/Exercice/exercices.html.twig", "C:\\Users\\robin\\Desktop\\ProjetM2\\ProjetAnnuelM2ESGI\\tesseraktWeb\\templates\\Tesserakt\\Exercice\\exercices.html.twig");
    }
}
